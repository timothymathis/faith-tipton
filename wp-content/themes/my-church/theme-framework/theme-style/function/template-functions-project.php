<?php 
/**
 * @package 	WordPress
 * @subpackage 	My Church
 * @version		1.0.5
 * 
 * Template Functions for Portfolio & Project
 * Created by CMSMasters
 * 
 */


/* Get Projects Heading Function */
function my_church_project_heading($cmsmasters_id, $tag = 'h1', $link_redirect = false, $link_url = false, $link_target = false, $show = true) { 
	$out = '<header class="cmsmasters_project_header entry-header">' . 
		'<' . esc_html($tag) . ' class="cmsmasters_project_title entry-title">' . 
			'<a href="' . (($link_redirect == 'true' && $link_url != '') ? esc_url($link_url) : esc_url(get_permalink())) . '"' . ($link_target == 'true' ? ' target="_blank"' : '') . '>' . cmsmasters_title($cmsmasters_id, false) . '</a>' .  
		'</' . esc_html($tag) . '>' . 
	'</header>';
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Projects Heading Without Link Function */
function my_church_project_title_nolink($cmsmasters_id, $tag = 'h1', $show = true) { 
	$out = '<' . esc_html($tag) . ' class="cmsmasters_project_title entry-title">' . 
		cmsmasters_title($cmsmasters_id, false) . 
	'</' . esc_html($tag) . '>';
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Projects Content/Excerpt Function */
function my_church_project_exc_cont($show = true) {
	$out = cmsmasters_divpdel('<div class="cmsmasters_project_content entry-content">' . "\n" . 
		wpautop(my_church_excerpt(20, false)) . 
	'</div>' . "\n");
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Check Projects Content/Excerpt Not Empty Function */
function my_church_project_check_exc_cont() {
	$exc = my_church_project_exc_cont(false);
	
	$no_tags_exc = strip_tags($exc);
	
	$trim_exc = trim($no_tags_exc);
	
	
	if ($trim_exc != '') {
		return true;
	} else {
		return false;
	}
}



/* Get Projects Category Function */
function my_church_get_project_category($cmsmasters_id, $taxonomy, $template_type = 'page', $label = true, $show = true) {
	$out = '';
	
	
	if (get_the_terms($cmsmasters_id, $taxonomy)) {
		if ($template_type == 'page') {
			$out = '<span class="cmsmasters_project_category">' . 
				($label == true ? esc_html__('in', 'my-church') . ' ' : '') . 
				my_church_get_the_category_list($cmsmasters_id, $taxonomy, ', ') . 
			'</span>';
		} elseif ($template_type == 'post') {
			$cmsmasters_option = my_church_get_global_options();
			
			
			if ($cmsmasters_option['my-church' . '_portfolio_project_cat']) {
				$out .= '<div class="project_details_item">' . 
					'<div class="project_details_item_title">' . esc_html__('Categories', 'my-church') . ':' . '</div>' . 
					'<div class="project_details_item_desc">' . 
						'<span class="cmsmasters_project_category">' . 
							my_church_get_the_category_list($cmsmasters_id, $taxonomy, ', ') . 
						'</span>' . 
					'</div>' . 
				'</div>';
			}
		}
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Projects Like Function */
function my_church_get_project_likes($template_type = 'page', $show = true) {
	$out = '';
	
	
	if ($template_type == 'page') {
		$out = cmsmasters_like('cmsmasters_project_likes');
	} elseif ($template_type == 'post') {
		$cmsmasters_option = my_church_get_global_options();
		
		if ($cmsmasters_option['my-church' . '_portfolio_project_like']) {
			$out = '<div class="project_details_item">' . 
				'<div class="project_details_item_title">' . esc_html__('Likes', 'my-church') . ':' . '</div>' . 
				'<div class="project_details_item_desc details_item_desc_like">' . 
					cmsmasters_like('cmsmasters_project_likes') . 
				'</div>' . 
			'</div>';
		}
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Projects Comments Function */
function my_church_get_project_comments($template_type = 'page', $show = true) {
	$out = '';
	
	
	if (comments_open()) {
		if ($template_type == 'page') {
			$out = my_church_get_comments('cmsmasters_project_comments');
		} elseif ($template_type == 'post') {
			$cmsmasters_option = my_church_get_global_options();
			
			if ($cmsmasters_option['my-church' . '_portfolio_project_comment'] && comments_open()) {
				$out = '<div class="project_details_item">' . 
					'<div class="project_details_item_title">' . esc_html__('Comments', 'my-church') . ':' . '</div>' . 
					'<div class="project_details_item_desc details_item_desc_comments">' . 
						my_church_get_comments('cmsmasters_project_comments') . 
					'</div>' . 
				'</div>';
			}
		}
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Projects Date Function */
function my_church_get_project_date($template_type = 'page', $show = true) {
	if ($template_type == 'page') {
		$out = '<abbr class="published cmsmasters_project_date" title="' . esc_attr(get_the_date()) . '">' . 
			esc_html(get_the_date()) . 
		'</abbr>' . 
		'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
			esc_html(get_the_modified_date()) . 
		'</abbr>';
	} elseif ($template_type == 'post') {
		$cmsmasters_option = my_church_get_global_options();
		
		$out = '';
		
		if ($cmsmasters_option['my-church' . '_portfolio_project_date']) {
			$out .= '<div class="project_details_item">' . 
				'<div class="project_details_item_title">' . esc_html__('Date', 'my-church') . ':' . '</div>' . 
				'<div class="project_details_item_desc">' . 
					'<abbr class="published cmsmasters_project_date" title="' . esc_attr(get_the_date()) . '">' . 
						esc_html(get_the_date()) . 
					'</abbr>' . 
					'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
						esc_html(get_the_modified_date()) . 
					'</abbr>' . 
				'</div>' . 
			'</div>';
		}
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Projects Author Function */
function my_church_get_project_author($template_type = 'page', $show = true) {
	if ($template_type == 'page') {
		$out = '<span class="cmsmasters_project_author">' . 
			esc_html__('By', 'my-church') . ' ' . 
			'<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" title="' . esc_attr__('Projects by', 'my-church') . ' ' . esc_attr(get_the_author_meta('display_name')) . '" class="vcard author"><span class="fn" rel="author">' . esc_html(get_the_author_meta('display_name')) . '</span></a>' . 
		'</span>';
	} elseif ($template_type == 'post') {
		$cmsmasters_option = my_church_get_global_options();
		
		$out = '';
		
		if ($cmsmasters_option['my-church' . '_portfolio_project_author']) {
			$out .= '<div class="project_details_item">' . 
				'<div class="project_details_item_title">' . esc_html__('Author', 'my-church') . ':' . '</div>' . 
				'<div class="project_details_item_desc">' . 
					'<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" title="' . esc_attr__('Projects by', 'my-church') . ' ' . esc_attr(get_the_author_meta('display_name')) . '" class="vcard author"><span class="fn" rel="author">' . esc_html(get_the_author_meta('display_name')) . '</span></a>' . 
				'</div>' . 
			'</div>';
		}
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Projects Tags Function */
function my_church_get_project_tags($cmsmasters_id, $taxonomy, $show = true) {
	if (get_the_terms($cmsmasters_id, $taxonomy)) {
		$cmsmasters_option = my_church_get_global_options();
		$out = '';
		
		if ($cmsmasters_option['my-church' . '_portfolio_project_tag']) {
			$out = '<div class="project_details_item">' . 
				'<div class="project_details_item_title">' . esc_html__('Tags', 'my-church') . ':' . '</div>' . 
				'<div class="project_details_item_desc">' . 
					'<span class="cmsmasters_project_tags">' . 
						get_the_term_list($cmsmasters_id, $taxonomy, '', ', ', '') . 
					'</span>' . 
				'</div>' . 
			'</div>';
		}
		
		
		if ($show) {
			echo $out;
		} else {
			return $out;
		}
	}
}



/* Get Projects Features Function */
function my_church_get_project_features($features_position = 'features', $features = '', $features_title = false, $tag = 'h2', $show = true) {
	if (
		(
			!empty($features[0][0]) || 
			!empty($features[0][1])
		) || (
			!empty($features[1][0]) || 
			!empty($features[1][1])
		)
	) {
		$out = '';
		
		if ($features_position == 'features') {
			$out .= '<div class="project_features entry-meta">' . 
				($features_title ? '<' . esc_html($tag) . ' class="project_features_title">' . esc_html($features_title) . '</' . esc_html($tag) . '>' : '');
		}
		
		
		foreach ($features as $feature) {
			$out .= '<div class="project_' . esc_attr($features_position) . '_item' . ($feature[0] == '' || $feature[1] == '' ? ' project_' . esc_attr($features_position) . '_one_item' : '') . '">';
				
				if ($feature[0] != '') {
					$out .= '<div class="project_' . esc_attr($features_position) . '_item_title">' . esc_html($feature[0]) . '</div>';
				}
				
				
				if ($feature[1] != '') {
					$feature_lists = explode("\n", $feature[1]);
					
					
					$out .= '<div class="project_' . esc_attr($features_position) . '_item_desc">';
						
						foreach ($feature_lists as $feature_list) {
							$out .= trim($feature_list);
						}
						
					$out .= '</div>';
				}
				
			$out .= '</div>';
		}
		
		
		if ($features_position == 'features') {
			$out .= '</div>';
		}
		
		if ($show) {
			echo $out;
		} else {
			return $out;
		}
	}
}



/* Get Projects Link Function */
function my_church_project_link($link_text, $link_url, $link_target, $show = true) {
	$cmsmasters_option = my_church_get_global_options();
	$out = '';
	
	if ( 
		$cmsmasters_option['my-church' . '_portfolio_project_link'] && 
		$link_text != '' && 
		$link_url != '' 
	) {
		$out = '<div class="project_details_item">' . 
			'<div class="project_details_item_title">' . esc_html__('Project Link', 'my-church') . ':' . '</div>' . 
			'<div class="project_details_item_desc">' . 
				'<a href="' . esc_url($link_url) . '" title="' . esc_attr($link_text) . '"' . (($link_target == 'true') ? ' target="_blank"' : '') . '>' . esc_html($link_text) . '</a>' . 
			'</div>' . 
		'</div>';
	}
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Project More Button/Link Function */
function cmsmasters_project_more($cmsmasters_id, $show = true) {
	$cmsmasters_project_read_more = get_post_meta($cmsmasters_id, 'cmsmasters_project_read_more', true);
	
	
	if ($cmsmasters_project_read_more == '') {
		$cmsmasters_project_read_more = esc_html__('Read More', 'my-church');
	}
	
	
	$out = '<a class="cmsmasters_project_read_more" href="' . esc_url(get_permalink($cmsmasters_id)) . '">' . esc_html($cmsmasters_project_read_more) . '</a>';
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}

