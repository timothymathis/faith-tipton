<?php
/**
 * @package 	WordPress
 * @subpackage 	My Church
 * @version		1.0.2
 * 
 * Timetable Content Composer Functions 
 * Created by CMSMasters
 * 
 */


/* Register JS Scripts */
function my_church_timetable_register_c_c_scripts() {
	global $pagenow;
	
	
	$cmsmasters_option = my_church_get_global_options();
	
	
	if ( 
		$pagenow == 'post-new.php' || 
		($pagenow == 'post.php' && isset($_GET['post']) && get_post_type($_GET['post']) != 'attachment') 
	) {
		wp_enqueue_script('my-church-timetable-extend', get_template_directory_uri() . '/timetable/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-c-c/js/cmsmasters-c-c-plugin-extend.js', array('cmsmasters_composer_shortcodes_js'), '1.0.0', true);
		
		wp_localize_script('my-church-timetable-extend', 'cmsmasters_timetable_shortcodes', array( 
			'timetable_events' => 								my_church_timetable_events(), 
			'timetable_event_categories' => 					my_church_timetable_event_categories(), 
			'timetable_hour_categories' => 						my_church_timetable_hour_categories(), 
			'timetable_columns' => 								my_church_timetable_columns(), 
			'timetable_title' =>								esc_html__('Timetable', 'my-church'), 
			'timetable_field_event_title' =>					esc_html__('Events', 'my-church'), 
			'timetable_field_event_descr' =>					esc_html__('Select the events that are to be displayed in timetable', 'my-church'), 
			'timetable_field_event_descr_note' =>				esc_html__('Hold the CTRL key to select multiple items', 'my-church'), 
			'timetable_field_event_category_title' =>			esc_html__('Event categories', 'my-church'), 
			'timetable_field_event_category_descr' =>			esc_html__('Select the events categories that are to be displayed in timetable', 'my-church'), 
			'timetable_field_event_category_descr_note' =>		esc_html__('Hold the CTRL key to select multiple items', 'my-church'), 
			'timetable_field_hour_category_title' =>			esc_html__('Hour categories', 'my-church'), 
			'timetable_field_hour_category_descr' =>			esc_html__('Select the hour categories (if defined for existing event hours) for events that are to be displayed in timetable', 'my-church'), 
			'timetable_field_hour_category_descr_note' =>		esc_html__('Hold the CTRL key to select multiple items', 'my-church'), 
			'timetable_field_columns_title' =>					esc_html__('Columns', 'my-church'), 
			'timetable_field_columns_descr' =>					esc_html__('Select the columns that are to be displayed in timetable', 'my-church'), 
			'timetable_field_columns_descr_note' =>				esc_html__('Hold the CTRL key to select multiple items', 'my-church'), 
			'timetable_field_measure_title' =>					esc_html__('Hour measure', 'my-church'), 
			'timetable_field_measure_descr' =>					esc_html__('Choose hour measure for event hours', 'my-church'), 
			'timetable_field_measure_choice_hour' =>			esc_html__('Hour (1h)', 'my-church'), 
			'timetable_field_measure_choice_half_hour' =>		esc_html__('Half hour (30min)', 'my-church'), 
			'timetable_field_measure_choice_quarter_hour' =>	esc_html__('Quarter hour (15min)', 'my-church'), 
			'timetable_field_filter_style_title' =>				esc_html__('Filter style', 'my-church'), 
			'timetable_field_filter_style_descr' =>				esc_html__('Choose between dropdown menu and tabs for event filtering', 'my-church'), 
			'timetable_field_filter_style_choice_dropdown_list' =>	esc_html__('Dropdown list', 'my-church'), 
			'timetable_field_filter_style_choice_tabs' =>		esc_html__('Tabs', 'my-church'), 
			'timetable_field_filter_kind_title' =>				esc_html__('Filter kind', 'my-church'), 
			'timetable_field_filter_kind_descr' =>				esc_html__('Choose between filtering by events or events categories', 'my-church'), 
			'timetable_field_filter_kind_choice_event' =>		esc_html__('By event', 'my-church'), 
			'timetable_field_filter_kind_choice_event_category' =>	esc_html__('By event category', 'my-church'), 
			'timetable_field_filter_label_title' =>				esc_html__('Filter label', 'my-church'), 
			'timetable_field_filter_label_descr' =>				esc_html__('Specify text label for all events', 'my-church'), 
			'timetable_field_filter_label_def' =>				esc_html__('All Events', 'my-church'), 
			'timetable_field_time_format_title' =>				esc_html__('Time format', 'my-church'), 
			'timetable_field_time_format_choice_custom' =>		esc_html__('Custom', 'my-church'), 
			'timetable_field_time_format_custom_title' =>		esc_html__('Custom Time Format', 'my-church'), 
			'timetable_field_hide_all_events_view_title' =>		esc_html__('Hide \'All Events\' view', 'my-church'), 
			'timetable_field_hide_hours_column_title' =>		esc_html__('Hide first (hours) column', 'my-church'), 
			'timetable_field_show_end_hour_title' =>			esc_html__('Show end hour in first (hours) column', 'my-church'), 
			'timetable_field_event_layout_title' =>				esc_html__('Event block layout', 'my-church'), 
			'timetable_field_event_layout_descr' =>				esc_html__('Select one of the available event block layouts', 'my-church'), 
			'timetable_field_event_layout_choice_type' =>		esc_html__('Type', 'my-church'), 
			'timetable_field_hide_empty_title' =>				esc_html__('Hide empty rows', 'my-church'), 
			'timetable_field_disable_event_url_title' =>		esc_html__('Disable event url', 'my-church'), 
			'timetable_field_text_align_title' =>				esc_html__('Text align', 'my-church'), 
			'timetable_field_text_align_descr' =>				esc_html__('Specify text align in timetable event block', 'my-church'), 
			'timetable_field_id_title' =>						esc_html__('Id', 'my-church'), 
			'timetable_field_id_descr' =>						esc_html__('Assign a unique identifier to a timetable if you use more than one table on a single page', 'my-church'), 
			'timetable_field_id_descr_note' =>					esc_html__('Otherwise, leave this field blank', 'my-church'), 
			'timetable_field_row_height_title' =>				esc_html__('Row height', 'my-church'), 
			'timetable_field_box_bg_color_title' =>				esc_html__('Timetable box background color', 'my-church'), 
			'timetable_field_box_hover_bg_color_title' =>		esc_html__('Timetable box hover background color', 'my-church'), 
			'timetable_field_box_txt_color_title' =>			esc_html__('Timetable box text color', 'my-church'), 
			'timetable_field_box_bd_color_title' =>				esc_html__('Timetable box border color', 'my-church'), 
			'timetable_field_box_hover_txt_color_title' =>		esc_html__('Timetable box hover text color', 'my-church'), 
			'timetable_field_box_hours_txt_color_title' =>		esc_html__('Timetable box hours text color', 'my-church'), 
			'timetable_field_box_hours_hover_txt_color_title' =>	esc_html__('Timetable box hours hover text color', 'my-church'), 
			'timetable_field_row1_bg_color_title' =>			esc_html__('Row 1 style background color', 'my-church'), 
			'timetable_field_row1_txt_color_title' =>			esc_html__('Row 1 style text color', 'my-church'), 
			'timetable_field_row2_bg_color_title' =>			esc_html__('Row 2 style background color', 'my-church'), 
			'timetable_field_row2_txt_color_title' =>			esc_html__('Row 2 style text color', 'my-church'), 
			
			
			/* Default Colors */
			'box_bg_color' => 				($cmsmasters_option['my-church' . '_default' . '_bg'] == '#ffffff' ? 'rgba(' . cmsmasters_color2rgb($cmsmasters_option['my-church' . '_default' . '_bg']) . ', 0.99)' : $cmsmasters_option['my-church' . '_default' . '_bg']), 
			'box_bd_color' => 				($cmsmasters_option['my-church' . '_default' . '_border'] == '#ffffff' ? 'rgba(' . cmsmasters_color2rgb($cmsmasters_option['my-church' . '_default' . '_border']) . ', 0.99)' : $cmsmasters_option['my-church' . '_default' . '_border']), 
			'box_hover_bg_color' => 		($cmsmasters_option['my-church' . '_default' . '_link'] == '#ffffff' ? 'rgba(' . cmsmasters_color2rgb($cmsmasters_option['my-church' . '_default' . '_link']) . ', 0.99)' : $cmsmasters_option['my-church' . '_default' . '_link']), 
			'box_txt_color' => 				($cmsmasters_option['my-church' . '_default' . '_color'] == '#ffffff' ? 'rgba(' . cmsmasters_color2rgb($cmsmasters_option['my-church' . '_default' . '_color']) . ', 0.99)' : $cmsmasters_option['my-church' . '_default' . '_color']), 
			'box_hover_txt_color' => 		($cmsmasters_option['my-church' . '_default' . '_alternate'] == '#ffffff' ? 'rgba(' . cmsmasters_color2rgb($cmsmasters_option['my-church' . '_default' . '_alternate']) . ', 0.99)' : $cmsmasters_option['my-church' . '_default' . '_alternate']), 
			'box_hours_txt_color' => 		($cmsmasters_option['my-church' . '_default' . '_link'] == '#ffffff' ? 'rgba(' . cmsmasters_color2rgb($cmsmasters_option['my-church' . '_default' . '_link']) . ', 0.99)' : $cmsmasters_option['my-church' . '_default' . '_link']), 
			'box_hours_hover_txt_color' => 	($cmsmasters_option['my-church' . '_default' . '_bg'] == '#ffffff' ? 'rgba(' . cmsmasters_color2rgb($cmsmasters_option['my-church' . '_default' . '_bg']) . ', 0.99)' : $cmsmasters_option['my-church' . '_default' . '_bg']), 
			'row1_bg_color' => 				($cmsmasters_option['my-church' . '_default' . '_alternate'] == '#ffffff' ? 'rgba(' . cmsmasters_color2rgb($cmsmasters_option['my-church' . '_default' . '_alternate']) . ', 0.99)' : $cmsmasters_option['my-church' . '_default' . '_alternate']), 
			'row1_txt_color' => 			($cmsmasters_option['my-church' . '_default' . '_color'] == '#ffffff' ? 'rgba(' . cmsmasters_color2rgb($cmsmasters_option['my-church' . '_default' . '_color']) . ', 0.99)' : $cmsmasters_option['my-church' . '_default' . '_color']), 
			'row2_bg_color' => 				($cmsmasters_option['my-church' . '_default' . '_bg'] == '#ffffff' ? 'rgba(' . cmsmasters_color2rgb($cmsmasters_option['my-church' . '_default' . '_bg']) . ', 0.99)' : $cmsmasters_option['my-church' . '_default' . '_bg']), 
			'row2_txt_color' => 			($cmsmasters_option['my-church' . '_default' . '_color'] == '#ffffff' ? 'rgba(' . cmsmasters_color2rgb($cmsmasters_option['my-church' . '_default' . '_color']) . ', 0.99)' : $cmsmasters_option['my-church' . '_default' . '_color']) 
		));
	}
}

add_action('admin_enqueue_scripts', 'my_church_timetable_register_c_c_scripts');


/* Events */
function my_church_timetable_events() {
	$timetable_events = get_posts(array(
		'numberposts' => -1, 
		'post_type' => 'events'
	));
	
	
	$out = array();
	
	
	if (!empty($timetable_events)) {
		foreach ($timetable_events as $timetable_event) {
			$out[urldecode($timetable_event->post_name)] = esc_html($timetable_event->post_title);
		}
	}
	
	
	return $out;
}


/* Event Categories */
function my_church_timetable_event_categories() {
	$categories = get_terms('events_category', array( 
		'hide_empty' => 0 
	));
	
	
	$out = array();
	
	
	if (!empty($categories)) {
		foreach ($categories as $category) {
			$out[urldecode(esc_attr($category->slug))] = esc_html($category->name);
		}
	}
	
	
	return $out;
}


/* Hour Categories */
function my_church_timetable_hour_categories() {
	global $wpdb;
	
	
	$query = $wpdb->prepare("SELECT distinct(category) AS category FROM {$wpdb->prefix}event_hours AS t1
		LEFT JOIN {$wpdb->posts} AS t2 ON t1.event_id=t2.ID 
		WHERE 
		t2.post_type='%s'
		AND t2.post_status='publish'
		AND category<>''", 'events');
	
	
	$categories = $wpdb->get_results($query);
	
	
	$out = array();
	
	
	if (!empty($categories)) {
		foreach ($categories as $category) {
			$out[esc_attr($category->category)] = esc_html($category->category);
		}
	}
	
	
	return $out;
}


/* Columns */
function my_church_timetable_columns() {
	$timetable_columns = get_posts(array(
		'numberposts' => -1, 
		'post_type' => 'timetable_weekdays'
	));
	
	
	$out = array();
	
	
	if (!empty($timetable_columns)) {
		foreach ($timetable_columns as $timetable_column) {
			$out[urldecode($timetable_column->post_name)] = esc_html($timetable_column->post_title);
		}
	}
	
	
	return $out;
}

