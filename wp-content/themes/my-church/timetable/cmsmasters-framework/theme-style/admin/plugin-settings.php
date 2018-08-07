<?php 
/**
 * @package 	WordPress
 * @subpackage 	My Church
 * @version		1.0.2
 * 
 * Timetable Admin Settings
 * Created by CMSMasters
 * 
 */


/* Single Settings */
// Settings Names
function my_church_timetable_option_name($cmsmasters_option_name, $tab) {
	if ($tab == 'tt_event') {
		$cmsmasters_option_name = 'cmsmasters_options_' . 'my-church' . CMSMASTERS_THEME_STYLE . '_single_tt_event';
	}
	
	
	return $cmsmasters_option_name;
}

add_filter('cmsmasters_option_name_filter', 'my_church_timetable_option_name', 10, 2);


// Add Settings
function my_church_timetable_add_global_options($cmsmasters_option_names) {
	$cmsmasters_option_names[] = array( 
		'cmsmasters_options_' . 'my-church' . CMSMASTERS_THEME_STYLE . '_single_tt_event', 
		my_church_options_single_fields('tt_event') 
	);
	
	
	return $cmsmasters_option_names;
}

add_filter('cmsmasters_add_global_options_filter', 'my_church_timetable_add_global_options');


// Get Settings
function my_church_timetable_get_global_options($cmsmasters_option_names) {
	array_push($cmsmasters_option_names, 'cmsmasters_options_' . 'my-church' . CMSMASTERS_THEME_STYLE . '_single_tt_event');
	
	
	return $cmsmasters_option_names;
}

add_filter('cmsmasters_get_global_options_filter', 'my_church_timetable_get_global_options');
add_filter('cmsmasters_settings_export_filter', 'my_church_timetable_get_global_options');


// Single Posts Settings
function my_church_timetable_options_single_tabs($tabs) {
	$tabs['tt_event'] = esc_attr__('Timetable Event', 'my-church');
	
	
	return $tabs;
}

add_filter('cmsmasters_options_single_tabs_filter', 'my_church_timetable_options_single_tabs');


function my_church_timetable_options_single_sections($sections, $tab) {
	if ($tab == 'tt_event') {
		$sections = array();
		
		$sections['tt_event_section'] = esc_attr__('Timetable Event Options', 'my-church');
	}
	
	
	return $sections;
}

add_filter('cmsmasters_options_single_sections_filter', 'my_church_timetable_options_single_sections', 10, 2);


function my_church_timetable_options_single_fields($options, $tab) {
	if ($tab == 'tt_event') {
		$options[] = array( 
			'section' => 'tt_event_section', 
			'id' => 'my-church' . '_tt_event_hours', 
			'title' => esc_html__('Event Hours', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'tt_event_section', 
			'id' => 'my-church' . '_tt_event_hours_title', 
			'title' => esc_html__('Event Hours Title', 'my-church'), 
			'desc' => esc_html__('Enter a event hours block title', 'my-church'), 
			'type' => 'text', 
			'std' => 'Event Hours', 
			'class' => ''
		);
		
		$options[] = array( 
			'section' => 'tt_event_section', 
			'id' => 'my-church' . '_tt_event_details_title', 
			'title' => esc_html__('Event Details Title', 'my-church'), 
			'desc' => esc_html__('Enter a event details block title', 'my-church'), 
			'type' => 'text', 
			'std' => 'Event Details', 
			'class' => ''
		);
		
		$options[] = array( 
			'section' => 'tt_event_section', 
			'id' => 'my-church' . '_tt_event_cat', 
			'title' => esc_html__('Event Categories', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
	}
	
	
	return $options;
}

add_filter('cmsmasters_options_single_fields_filter', 'my_church_timetable_options_single_fields', 10, 2);

