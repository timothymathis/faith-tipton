<?php 
/**
 * @package 	WordPress
 * @subpackage 	My Church
 * @version		1.0.2
 * 
 * Theme Admin Settings
 * Created by CMSMasters
 * 
 */


/* General Settings */
function my_church_theme_options_general_fields($options, $tab) {
	if ($tab == 'header') {
		$new_options = array();
		
		foreach ($options as $option) {
			if ($option['id'] == 'my-church_header_styles') {
				$option['choices'][] = esc_html__('Fullwidth Header Style', 'my-church') . '|fullwidth';
				
				$new_options[] = $option;
			} else {
				$new_options[] = $option;
			}
		}
		
		$options = $new_options;
	}
	
	
	return $options;
}

add_filter('cmsmasters_options_general_fields_filter', 'my_church_theme_options_general_fields', 10, 2);

