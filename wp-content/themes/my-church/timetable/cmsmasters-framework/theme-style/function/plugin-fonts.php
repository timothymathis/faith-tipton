<?php
/**
 * @package 	WordPress
 * @subpackage 	My Church
 * @version		1.0.2
 * 
 * Timetable Fonts Rules
 * Created by CMSMasters
 * 
 */


function my_church_timetable_fonts($custom_css) {
	$cmsmasters_option = my_church_get_global_options();
	
	
	$custom_css .= "
/***************** Start Timetable Font Styles ******************/

	/* Start Content Font */
	table.tt_timetable th,
	table.tt_timetable .event, 
	table.tt_timetable .event a, 
	table.tt_timetable .event .hours, 
	ul.tt_upcoming_events li .tt_upcoming_events_event_container * {
		font-family:" . my_church_get_google_font($cmsmasters_option['my-church' . '_content_font_google_font']) . $cmsmasters_option['my-church' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['my-church' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['my-church' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['my-church' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['my-church' . '_content_font_font_style'] . ";
	}
	
	ul.tt_upcoming_events li .tt_upcoming_events_event_container * {
		text-transform: none;
	}
	
	table.tt_timetable .event, 
	ul.tt_upcoming_events li .tt_upcoming_events_event_container * {
		font-size:" . ((int) $cmsmasters_option['my-church' . '_content_font_font_size'] - 1) . "px;
	}
	/* Finish Content Font */

	
	/* Start H3 Font */
	.event_layout_4 table.tt_timetable .event .hours {
		font-family:" . my_church_get_google_font($cmsmasters_option['my-church' . '_h3_font_google_font']) . $cmsmasters_option['my-church' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['my-church' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['my-church' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['my-church' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['my-church' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['my-church' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['my-church' . '_h3_font_text_decoration'] . ";
	}
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	.cmsmasters_tt_event .cmsmasters_tt_event_header .cmsmasters_tt_event_subtitle {
		font-size:" . ((int) $cmsmasters_option['my-church' . '_h4_font_font_size'] + 2) . "px;
	}
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	.tt_tabs_navigation li a {
		font-family:" . my_church_get_google_font($cmsmasters_option['my-church' . '_h5_font_google_font']) . $cmsmasters_option['my-church' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['my-church' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['my-church' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['my-church' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['my-church' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['my-church' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['my-church' . '_h5_font_text_decoration'] . ";
	}
	/* Finish H5 Font */


	/* Start H6 Font */
	.cmsmasters_tt_event .cmsmasters_tt_event_hours .cmsmasters_tt_event_hours_item,
	.cmsmasters_tt_event .cmsmasters_tt_event_details .cmsmasters_tt_event_details_item,
	.cmsmasters_tt_event .cmsmasters_tt_event_details .cmsmasters_tt_event_details_item a,
	table.tt_timetable .event .after_hour_text,
	table.tt_timetable .event .before_hour_text {
		font-family:" . my_church_get_google_font($cmsmasters_option['my-church' . '_h6_font_google_font']) . $cmsmasters_option['my-church' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['my-church' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['my-church' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['my-church' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['my-church' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['my-church' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['my-church' . '_h6_font_text_decoration'] . ";
	}
	/* Finish H6 Font */


	/* Start Button Font */
	ul.tt_upcoming_events li .tt_upcoming_events_event_container,
	.ui-tabs .tt_tabs_navigation.ui-widget-header li a,
	.tabs_box_navigation .tabs_box_navigation_selected,
	table.tt_timetable .tt_tooltip_content a,
	table.tt_timetable .event .event_header {
		font-family:" . my_church_get_google_font($cmsmasters_option['my-church' . '_button_font_google_font']) . $cmsmasters_option['my-church' . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option['my-church' . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['my-church' . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['my-church' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['my-church' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['my-church' . '_button_font_text_transform'] . ";
	}
	
	ul.tt_upcoming_events li .tt_upcoming_events_event_container,
	.ui-tabs .tt_tabs_navigation.ui-widget-header li a,
	.tabs_box_navigation .tabs_box_navigation_selected,
	table.tt_timetable .tt_tooltip_content a,
	table.tt_timetable .event .event_header {
		line-height:20px;
	}
	/* Finish Button Font */
	

/***************** Finish Timetable Font Styles ******************/

";
	
	
	return $custom_css;
}

add_filter('my_church_theme_fonts_filter', 'my_church_timetable_fonts');

