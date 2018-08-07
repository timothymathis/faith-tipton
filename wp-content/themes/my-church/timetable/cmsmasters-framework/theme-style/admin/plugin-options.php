<?php 
/**
 * @package 	WordPress
 * @subpackage 	My Church
 * @version		1.0.2
 * 
 * Timetable Admin Options
 * Created by CMSMasters
 * 
 */


/* Filter for Options */
function my_church_timetable_meta_fields($custom_all_meta_fields) {
	$cmsmasters_option = my_church_get_global_options();
	
	
	$cmsmasters_global_tt_event_hours = (isset($cmsmasters_option['my-church' . '_tt_event_hours']) && $cmsmasters_option['my-church' . '_tt_event_hours'] !== '') ? (($cmsmasters_option['my-church' . '_tt_event_hours'] == 1) ? 'true' : 'false') : 'true';
	
	$cmsmasters_global_tt_event_hours_title = (isset($cmsmasters_option['my-church' . '_tt_event_hours_title']) && $cmsmasters_option['my-church' . '_tt_event_hours_title'] !== '') ? $cmsmasters_option['my-church' . '_tt_event_hours_title'] : '';
	
	$cmsmasters_global_tt_event_details_title = (isset($cmsmasters_option['my-church' . '_tt_event_details_title']) && $cmsmasters_option['my-church' . '_tt_event_details_title'] !== '') ? $cmsmasters_option['my-church' . '_tt_event_details_title'] : '';
	
	
	$custom_all_meta_fields_new = array();
	
	
	if (
		(isset($_GET['post_type']) && $_GET['post_type'] == 'events') || 
		(isset($_POST['post_type']) && $_POST['post_type'] == 'events') || 
		(isset($_GET['post']) && get_post_type($_GET['post']) == 'events') 
	) {
		foreach ($custom_all_meta_fields as $custom_all_meta_field) {
			if ($custom_all_meta_field['id'] == 'cmsmasters_other_tabs') {
				$custom_all_meta_field['std'] = 'cmsmasters_tt_event';
				
				
				$tabs_array = array();
				
				$tabs_array['cmsmasters_tt_event'] = array( 
					'label' => esc_html__('Event', 'my-church'), 
					'value'	=> 'cmsmasters_tt_event' 
				);
				
				
				foreach ($custom_all_meta_field['options'] as $key => $val) {
					$tabs_array[$key] = $val;
				}
				
				
				$custom_all_meta_field['options'] = $tabs_array;
				
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} elseif (
				$custom_all_meta_field['id'] == 'cmsmasters_layout' && 
				$custom_all_meta_field['type'] == 'tab_start'
			) {
				$custom_all_meta_field['std'] = '';
				
				
				$custom_all_meta_fields_new[] = array( 
					'id'	=> 'cmsmasters_tt_event', 
					'type'	=> 'tab_start', 
					'std'	=> 'true' 
				);
				
				$custom_all_meta_fields_new[] = array( 
					'label'	=> esc_html__('Event Hours', 'my-church'), 
					'desc'	=> esc_html__('show', 'my-church'), 
					'id'	=> 'cmsmasters_tt_event_hours', 
					'type'	=> 'checkbox', 
					'hide'	=> '', 
					'std'	=> $cmsmasters_global_tt_event_hours 
				);
				
				$custom_all_meta_fields_new[] = array( 
					'label'	=> esc_html__('Event Hours Title', 'my-church'), 
					'desc'	=> '', 
					'id'	=> 'cmsmasters_tt_event_hours_title', 
					'type'	=> 'text_long', 
					'hide'	=> '', 
					'std'	=> $cmsmasters_global_tt_event_hours_title 
				);
				
				$custom_all_meta_fields_new[] = array( 
					'label'	=> esc_html__('Event Details Title', 'my-church'), 
					'desc'	=> '', 
					'id'	=> 'cmsmasters_tt_event_details_title', 
					'type'	=> 'text_long', 
					'hide'	=> '', 
					'std'	=> $cmsmasters_global_tt_event_details_title 
				);
				
				$custom_all_meta_fields_new[] = array( 
					'label'	=> esc_html__('Event Details', 'my-church'), 
					'desc'	=> '', 
					'id'	=> 'cmsmasters_tt_event_details', 
					'type'	=> 'repeatable_multiple', 
					'hide'	=> '', 
					'std'	=> '' 
				);
				
				$custom_all_meta_fields_new[] = array( 
					'id'	=> 'cmsmasters_tt_event', 
					'type'	=> 'tab_finish' 
				);
				
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} elseif (
				$custom_all_meta_field['id'] == 'cmsmasters_layout' && 
				$custom_all_meta_field['type'] != 'tab_start' && 
				$custom_all_meta_field['type'] != 'tab_finish'
			) {
				// remove layout field
			} elseif ($custom_all_meta_field['id'] == 'cmsmasters_sidebar_id') {
				// remove right/left sidebar field
			} else {
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			}
		}
	} else {
		$custom_all_meta_fields_new = $custom_all_meta_fields;
	}
	
	
	return $custom_all_meta_fields_new;
}

add_filter('get_custom_all_meta_fields_filter', 'my_church_timetable_meta_fields');

