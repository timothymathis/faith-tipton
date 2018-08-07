<?php 
/**
 * @package 	WordPress
 * @subpackage 	My Church
 * @version 	1.0.2
 * 
 * CMSMasters Donations Admin Settings
 * Created by CMSMasters
 * 
 */


/* Single Settings */
function my_church_donations_options_general_fields($options, $tab) {
	$new_options = array();
	
	if ($tab == 'header') {
		foreach($options as $option) {
			if ($option['id'] == 'my-church_header_top_line_donations_but') {
				// remove field
			} elseif ($option['id'] == 'my-church_header_top_line_donations_but_text') {
				// remove field
			} else {
				$new_options[] = $option;
			}
		}
	} else {
		$new_options = $options;
	}
	
	
	return $new_options;
}

add_filter('cmsmasters_options_single_fields_filter', 'my_church_donations_options_general_fields', 10, 2);

