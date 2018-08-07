<?php
/**
 * @package 	WordPress
 * @subpackage 	My Church
 * @version 	1.0.3
 * 
 * Content Composer Campaigns Shortcode
 * Created by CMSMasters
 * 
 */


extract(shortcode_atts($new_atts, $atts));


$unique_id = $shortcode_id;


$this->campaigns_atts = array(
	'cmsmasters_campaigns_metadata' => 	$campaigns_metadata
);


$args = array( 
	'post_type' => 				'campaign', 
	'order' => 					$order, 
	'posts_per_page' => 		$count, 
	'ignore_sticky_posts' => 	true 
);


if ($orderby == 'campaigns' && $campaigns_ids != '') {
	$campaigns_ids_array = explode(',', $campaigns_ids);
	
	$args['post__in'] = $campaigns_ids_array;
	
	$args['orderby'] = 'menu_order';
} else {
	$args['orderby'] = $orderby;
	
	if ($campaigns_categories != '') {
		$cat_array = explode(',', $campaigns_categories);
		
		$args['tax_query'] = array(
			array( 
				'taxonomy' => 	'cp-categs', 
				'field' => 		'slug', 
				'terms' => 		$cat_array 
			)
		);
	}
}


$query = new WP_Query($args);


$autoplay = ($pause > 0 ? $pause * 1000 : 'false');


$out = "";


if ($query->have_posts()) : 
	
	$out .= "<div class=\"cmsmasters_campaigns" . 
		(($classes != '') ? ' ' . $classes : '') . 
	"\" " . 
		(($animation != '') ? ' data-animation="' . $animation . '"' : '') . 
		(($animation != '' && $animation_delay != '') ? ' data-delay="' . $animation_delay . '"' : '') . 
	">
		<div" . 
			" id=\"cmsmasters_owl_slider_" . esc_attr($unique_id) . "\"" . 
			" class=\"cmsmasters_owl_slider\"" . 
			" data-items=\"" . esc_attr($columns) . "\"" . 
			" data-single-item=\"false\"" . 
			" data-pagination=\"false\"" . 
			" data-auto-play=\"" . esc_attr($autoplay) . "\"" . 
		">";
			
			while ($query->have_posts()) : $query->the_post();
				
				$out .= '<div class="cmsmasters_owl_slider_item">';
				
					$out .= cmsmasters_composer_ob_load_template('cmsmasters-donations/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/postType/campaign-horizontal.php', $this->campaigns_atts);
					
				$out .= '</div>';
				
			endwhile;
			
		$out .= '</div>' . 
	'</div>';

endif;


wp_reset_postdata();


echo $out;
