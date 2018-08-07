<?php
/**
 * @package 	WordPress
 * @subpackage 	My Church
 * @version 	1.0.2
 * 
 * CMSMasters Donations Content Composer Functions
 * Created by CMSMasters
 * 
 */


/* Register JS Scripts */
function my_church_donations_register_c_c_scripts() {
	global $pagenow;
	
	
	$cmsmasters_option = my_church_get_global_options();
	
	
	if ( 
		$pagenow == 'post-new.php' || 
		($pagenow == 'post.php' && isset($_GET['post']) && get_post_type($_GET['post']) != 'attachment') 
	) {
		wp_enqueue_script('cmsmasters-c-c-donations-extend', get_template_directory_uri() . '/cmsmasters-donations/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-c-c/js/cmsmasters-c-c-plugin-extend.js', array('cmsmasters_composer_shortcodes_js'), '1.0.0', true);
		wp_localize_script('cmsmasters-c-c-donations-extend', 'cmsmasters_donations_cc_shortcodes', array( 
			'featured_campaign_color_title' => 			esc_attr__('Campaign progress color', 'my-church'), 
			'featured_campaign_color' => 				$cmsmasters_option['my-church' . '_default' . '_link'] 
		));
	}
}

add_action('admin_enqueue_scripts', 'my_church_donations_register_c_c_scripts');



// Featured Campaign Shortcode Attributes Filter
add_filter('cmsmasters_featured_campaign_atts_filter', 'cmsmasters_featured_campaign_atts');

function cmsmasters_featured_campaign_atts() {
	return array( 
		'campaign' => 			'', 
		'campaign_metadata' => 	'', 
		'campaign_color' => 	'', 
		'animation' => 			'', 
		'animation_delay' => 	'', 
		'classes' => 			'' 
	);
}

