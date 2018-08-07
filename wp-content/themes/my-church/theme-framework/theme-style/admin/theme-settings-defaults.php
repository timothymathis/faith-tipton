<?php 
/**
 * @package 	WordPress
 * @subpackage 	My Church
 * @version		1.0.6
 * 
 * Theme Settings Defaults
 * Created by CMSMasters
 * 
 */


/* Theme Settings General Default Values */
if (!function_exists('my_church_settings_general_defaults')) {

function my_church_settings_general_defaults($id = false) {
	$settings = array( 
		'general' => array( 
			'my-church' . '_theme_layout' => 		'boxed', 
			'my-church' . '_logo_type' => 			'image', 
			'my-church' . '_logo_url' => 			'|' . get_template_directory_uri() . '/theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo.png', 
			'my-church' . '_logo_url_retina' => 		'|' . get_template_directory_uri() . '/theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_retina.png', 
			'my-church' . '_logo_title' => 			get_bloginfo('name') ? get_bloginfo('name') : 'My Church', 
			'my-church' . '_logo_subtitle' => 		'', 
			'my-church' . '_logo_custom_color' => 	0, 
			'my-church' . '_logo_title_color' => 	'', 
			'my-church' . '_logo_subtitle_color' => 	'' 
		), 
		'bg' => array( 
			'my-church' . '_bg_col' => 			'#f9f9f9', 
			'my-church' . '_bg_img_enable' => 	0, 
			'my-church' . '_bg_img' => 			'', 
			'my-church' . '_bg_rep' => 			'no-repeat', 
			'my-church' . '_bg_pos' => 			'top center', 
			'my-church' . '_bg_att' => 			'scroll', 
			'my-church' . '_bg_size' => 			'cover' 
		), 
		'header' => array( 
			'my-church' . '_fixed_header' => 				1, 
			'my-church' . '_header_overlaps' => 				0, 
			'my-church' . '_header_top_line' => 				0, 
			'my-church' . '_header_top_height' => 			'32', 
			'my-church' . '_header_top_line_short_info' => 	'', 
			'my-church' . '_header_top_line_add_cont' => 	'nav', 
			'my-church' . '_header_styles' => 				'default', 
			'my-church' . '_header_mid_height' => 			'90', 
			'my-church' . '_header_bot_height' => 			'60', 
			'my-church' . '_header_search' => 				1, 
			'my-church' . '_header_add_cont' => 				'none', 
			'my-church' . '_header_add_cont_cust_html' => 	'' 
		), 
		'content' => array( 
			'my-church' . '_layout' => 					'fullwidth', 
			'my-church' . '_archives_layout' => 		'fullwidth', 
			'my-church' . '_search_layout' => 			'fullwidth', 
			'my-church' . '_other_layout' => 			'fullwidth', 
			'my-church' . '_heading_alignment' => 		'center', 
			'my-church' . '_heading_scheme' => 			'first', 
			'my-church' . '_heading_bg_image_enable' => 	0, 
			'my-church' . '_heading_bg_image' => 		'', 
			'my-church' . '_heading_bg_repeat' => 		'no-repeat', 
			'my-church' . '_heading_bg_attachment' => 	'scroll', 
			'my-church' . '_heading_bg_size' => 			'cover', 
			'my-church' . '_heading_bg_color' => 		'#23272f', 
			'my-church' . '_heading_height' => 			'345', 
			'my-church' . '_breadcrumbs' => 				1, 
			'my-church' . '_bottom_scheme' => 			'second', 
			'my-church' . '_bottom_sidebar' => 			1, 
			'my-church' . '_bottom_sidebar_layout' => 	'14141414' 
		), 
		'footer' => array( 
			'my-church' . '_footer_scheme' => 				'footer', 
			'my-church' . '_footer_type' => 					'default', 
			'my-church' . '_footer_additional_content' => 	'social', 
			'my-church' . '_footer_logo' => 					1, 
			'my-church' . '_footer_logo_url' => 				'|' . get_template_directory_uri() . '/theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_footer.png', 
			'my-church' . '_footer_logo_url_retina' => 		'|' . get_template_directory_uri() . '/theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_footer_retina.png', 
			'my-church' . '_footer_nav' => 					1, 
			'my-church' . '_footer_social' => 				1, 
			'my-church' . '_footer_html' => 					'', 
			'my-church' . '_footer_copyright' => 			'&copy; ' . date('Y') . ' ' . 'My Church' 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



/* Add Google Font */
if (!function_exists('my_church_add_foogle_font')) {

function my_church_add_foogle_font($fonts) {	
	$fonts['Lora:400,400italic,700,700italic'] = 'Lora';	
	
	return $fonts;
}

}

add_filter('my_church_google_fonts_list_filter', 'my_church_add_foogle_font');



/* Theme Settings Fonts Default Values */
if (!function_exists('my_church_settings_font_defaults')) {

function my_church_settings_font_defaults($id = false) {
	$settings = array( 
		'content' => array( 
			'my-church' . '_content_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Lora:400,400italic,700,700italic', 
				'font_size' => 			'15', 
				'line_height' => 		'24', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal' 
			) 
		), 
		'link' => array( 
			'my-church' . '_link_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Lora:400,400italic,700,700italic', 
				'font_size' => 			'15', 
				'line_height' => 		'24', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'my-church' . '_link_hover_decoration' => 	'none' 
		), 
		'nav' => array( 
			'my-church' . '_nav_title_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic', 
				'font_size' => 			'18', 
				'line_height' => 		'24', 
				'font_weight' => 		'900', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			), 
			'my-church' . '_nav_dropdown_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic', 
				'font_size' => 			'15', 
				'line_height' => 		'20', 
				'font_weight' => 		'900', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			) 
		), 
		'heading' => array( 
			'my-church' . '_h1_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic', 
				'font_size' => 			'58', 
				'line_height' => 		'78', 
				'font_weight' => 		'900', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'my-church' . '_h2_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic', 
				'font_size' => 			'28', 
				'line_height' => 		'32', 
				'font_weight' => 		'900', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'my-church' . '_h3_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic', 
				'font_size' => 			'24', 
				'line_height' => 		'34', 
				'font_weight' => 		'900', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'my-church' . '_h4_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic', 
				'font_size' => 			'22', 
				'line_height' => 		'28', 
				'font_weight' => 		'900', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'my-church' . '_h5_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic', 
				'font_size' => 			'16', 
				'line_height' => 		'22', 
				'font_weight' => 		'900', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'my-church' . '_h6_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Lora:400,400italic,700,700italic', 
				'font_size' => 			'16', 
				'line_height' => 		'24', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			) 
		), 
		'other' => array( 
			'my-church' . '_button_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic', 
				'font_size' => 			'15', 
				'line_height' => 		'52', 
				'font_weight' => 		'900', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase' 
			), 
			'my-church' . '_small_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic', 
				'font_size' => 			'15', 
				'line_height' => 		'24', 
				'font_weight' => 		'900', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			), 
			'my-church' . '_input_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Lora:400,400italic,700,700italic', 
				'font_size' => 			'15', 
				'line_height' => 		'26', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal' 
			), 
			'my-church' . '_quote_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic', 
				'font_size' => 			'40', 
				'line_height' => 		'60', 
				'font_weight' => 		'900', 
				'font_style' => 		'normal' 
			) 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// WP Color Picker Palettes
if (!function_exists('cmsmasters_color_picker_palettes')) {

function cmsmasters_color_picker_palettes() {
	$palettes = array( 
		'#000000', 
		'#ffffff', 
		'#7f8081', 
		'#2db3bb', 
		'#b6b6b6', 
		'#23272f', 
		'#f6f6f6', 
		'#eaeaea' 
	);
	
	
	return $palettes;
}

}



// Theme Settings Color Schemes Default Colors
if (!function_exists('my_church_color_schemes_defaults')) {

function my_church_color_schemes_defaults($id = false) {
	$settings = array( 
		'default' => array( // content default color scheme
			'color' => 		'#7f8081', 
			'link' => 		'#2db3bb', 
			'hover' => 		'#b6b6b6', 
			'heading' => 	'#23272f', 
			'bg' => 		'#ffffff', 
			'alternate' => 	'#f6f6f6', 
			'border' => 	'#eaeaea' 
		), 
		'header' => array( // Header color scheme
			'mid_color' => 		'#23272f', 
			'mid_link' => 		'#23272f', 
			'mid_hover' => 		'rgba(35,39,47,0.5)', 
			'mid_bg' => 		'#ffffff', 
			'mid_bg_scroll' => 	'#ffffff', 
			'mid_border' => 	'#eaeaea', 
			'bot_color' => 		'#23272f', 
			'bot_link' => 		'#23272f', 
			'bot_hover' => 		'#2db3bb', 
			'bot_bg' => 		'#ffffff', 
			'bot_bg_scroll' => 	'#ffffff', 
			'bot_border' => 	'#eaeaea' 
		), 
		'navigation' => array( // Navigation color scheme
			'title_link' => 			'#23272f', 
			'title_link_hover' => 		'rgba(35,39,47,0.5)', 
			'title_link_current' => 	'rgba(35,39,47,0.5)', 
			'title_link_subtitle' => 	'rgba(35,39,47,0.3)', 
			'title_link_bg' => 			'rgba(255,255,255,0)', 
			'title_link_bg_hover' => 	'rgba(255,255,255,0)', 
			'title_link_bg_current' => 	'rgba(255,255,255,0)', 
			'title_link_border' => 		'#dddddd', 
			'dropdown_text' => 			'#23272f', 
			'dropdown_bg' => 			'#ffffff', 
			'dropdown_border' => 		'#eaeaea', 
			'dropdown_link' => 			'rgba(35,39,47,0.4)', 
			'dropdown_link_hover' => 	'#23272f', 
			'dropdown_link_subtitle' => 'rgba(35,39,47,0.4)', 
			'dropdown_link_highlight' => 'rgba(255,255,255,0.07)', 
			'dropdown_link_border' => 	'rgba(255,255,255,0)' 
		), 
		'header_top' => array( // Header Top color scheme
			'color' => 					'#ffffff', 
			'link' => 					'#ffffff', 
			'hover' => 					'rgba(255,255,255,0.5)', 
			'bg' => 					'#23272f', 
			'border' => 				'rgba(255,255,255,0)', 
			'title_link' => 			'#ffffff', 
			'title_link_hover' => 		'rgba(255,255,255,0.5)', 
			'title_link_bg' => 			'rgba(255,255,255,0)', 
			'title_link_bg_hover' => 	'rgba(255,255,255,0)', 
			'title_link_border' => 		'rgba(255,255,255,0)', 
			'dropdown_bg' => 			'#ffffff', 
			'dropdown_border' => 		'#dddddd', 
			'dropdown_link' => 			'rgba(35,39,47,0.4)', 
			'dropdown_link_hover' => 	'#23272f', 
			'dropdown_link_highlight' => 'rgba(255,255,255,0)', 
			'dropdown_link_border' => 	'rgba(255,255,255,0)' 
		), 
		'footer' => array( // Footer color scheme
			'color' => 		'#585c65', 
			'link' => 		'#757c8a', 
			'hover' => 		'#ffffff', 
			'heading' => 	'#ffffff', 
			'bg' => 		'#23272f', 
			'alternate' => 	'rgba(255,255,255,0.5)', 
			'border' => 	'rgba(255,255,255,0.1)' 
		), 
		'first' => array( // custom color scheme 1
			'color' => 		'#ffffff', 
			'link' => 		'#ffffff', 
			'hover' => 		'rgba(255,255,255,0.55)', 
			'heading' => 	'#ffffff', 
			'bg' => 		'#b6b6b6', 
			'alternate' => 	'#f6f6f6', 
			'border' => 	'#eaeaea' 
		), 
		'second' => array( // custom color scheme 2
			'color' => 		'#757c8a', 
			'link' => 		'#757c8a', 
			'hover' => 		'#feea8c', 
			'heading' => 	'#ffffff', 
			'bg' => 		'#23272f', 
			'alternate' => 	'rgba(255,255,255,0.5)', 
			'border' => 	'rgba(255,255,255,0.1)' 
		), 
		'third' => array( // custom color scheme 3
			'color' => 		'#7f8081', 
			'link' => 		'#2db3bb', 
			'hover' => 		'#b6b6b6', 
			'heading' => 	'#23272f', 
			'bg' => 		'#ffffff', 
			'alternate' => 	'#f6f6f6', 
			'border' => 	'#eaeaea' 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// Theme Settings Elements Default Values
if (!function_exists('my_church_settings_element_defaults')) {

function my_church_settings_element_defaults($id = false) {
	$settings = array( 
		'sidebar' => array( 
			'my-church' . '_sidebar' => 	'' 
		), 
		'icon' => array( 
			'my-church' . '_social_icons' => array( 
				'cmsmasters-icon-linkedin|#|' . esc_html__('Linkedin', 'my-church') . '|true||', 
				'cmsmasters-icon-facebook|#|' . esc_html__('Facebook', 'my-church') . '|true||', 
				'cmsmasters-icon-gplus|#|' . esc_html__('Google', 'my-church') . '|true||', 
				'cmsmasters-icon-twitter|#|' . esc_html__('Twitter', 'my-church') . '|true||', 
				'cmsmasters-icon-skype|#|' . esc_html__('Skype', 'my-church') . '|true||' 
			) 
		), 
		'lightbox' => array( 
			'my-church' . '_ilightbox_skin' => 					'dark', 
			'my-church' . '_ilightbox_path' => 					'vertical', 
			'my-church' . '_ilightbox_infinite' => 				0, 
			'my-church' . '_ilightbox_aspect_ratio' => 			1, 
			'my-church' . '_ilightbox_mobile_optimizer' => 		1, 
			'my-church' . '_ilightbox_max_scale' => 				1, 
			'my-church' . '_ilightbox_min_scale' => 				0.2, 
			'my-church' . '_ilightbox_inner_toolbar' => 			0, 
			'my-church' . '_ilightbox_smart_recognition' => 		0, 
			'my-church' . '_ilightbox_fullscreen_one_slide' => 	0, 
			'my-church' . '_ilightbox_fullscreen_viewport' => 	'center', 
			'my-church' . '_ilightbox_controls_toolbar' => 		1, 
			'my-church' . '_ilightbox_controls_arrows' => 		0, 
			'my-church' . '_ilightbox_controls_fullscreen' => 	1, 
			'my-church' . '_ilightbox_controls_thumbnail' => 	1, 
			'my-church' . '_ilightbox_controls_keyboard' => 		1, 
			'my-church' . '_ilightbox_controls_mousewheel' => 	1, 
			'my-church' . '_ilightbox_controls_swipe' => 		1, 
			'my-church' . '_ilightbox_controls_slideshow' => 	0 
		), 
		'sitemap' => array( 
			'my-church' . '_sitemap_nav' => 			1, 
			'my-church' . '_sitemap_categs' => 		1, 
			'my-church' . '_sitemap_tags' => 		1, 
			'my-church' . '_sitemap_month' => 		1, 
			'my-church' . '_sitemap_pj_categs' => 	1, 
			'my-church' . '_sitemap_pj_tags' => 		1 
		), 
		'error' => array( 
			'my-church' . '_error_color' => 				'#292929', 
			'my-church' . '_error_bg_color' => 			'#fcfcfc', 
			'my-church' . '_error_bg_img_enable' => 		0, 
			'my-church' . '_error_bg_image' => 			'', 
			'my-church' . '_error_bg_rep' => 			'no-repeat', 
			'my-church' . '_error_bg_pos' => 			'top center', 
			'my-church' . '_error_bg_att' => 			'scroll', 
			'my-church' . '_error_bg_size' => 			'cover', 
			'my-church' . '_error_search' => 			1, 
			'my-church' . '_error_sitemap_button' => 	1, 
			'my-church' . '_error_sitemap_link' => 		'' 
		), 
		'code' => array( 
			'my-church' . '_custom_css' => 			'', 
			'my-church' . '_custom_js' => 			'', 
			'my-church' . '_gmap_api_key' => 		'', 
			'my-church' . '_api_key' => 				'', 
			'my-church' . '_api_secret' => 			'', 
			'my-church' . '_access_token' => 		'', 
			'my-church' . '_access_token_secret' => 	'' 
		), 
		'recaptcha' => array( 
			'my-church' . '_recaptcha_public_key' => 	'', 
			'my-church' . '_recaptcha_private_key' => 	'' 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// Theme Settings Single Posts Default Values
if (!function_exists('my_church_settings_single_defaults')) {

function my_church_settings_single_defaults($id = false) {
	$settings = array( 
		'post' => array( 
			'my-church' . '_blog_post_layout' => 		'r_sidebar', 
			'my-church' . '_blog_post_title' => 			1, 
			'my-church' . '_blog_post_date' => 			1, 
			'my-church' . '_blog_post_cat' => 			1, 
			'my-church' . '_blog_post_author' => 		1, 
			'my-church' . '_blog_post_comment' => 		1, 
			'my-church' . '_blog_post_tag' => 			1, 
			'my-church' . '_blog_post_like' => 			1, 
			'my-church' . '_blog_post_nav_box' => 		1, 
			'my-church' . '_blog_post_nav_order_cat' => 	0, 
			'my-church' . '_blog_post_share_box' => 		1, 
			'my-church' . '_blog_post_author_box' => 	1, 
			'my-church' . '_blog_more_posts_box' => 		'popular', 
			'my-church' . '_blog_more_posts_count' => 	'4', 
			'my-church' . '_blog_more_posts_pause' => 	'4' 
		), 
		'project' => array( 
			'my-church' . '_portfolio_project_title' => 			1, 
			'my-church' . '_portfolio_project_details_title' => 	esc_html__('Project details', 'my-church'), 
			'my-church' . '_portfolio_project_date' => 			1, 
			'my-church' . '_portfolio_project_cat' => 			1, 
			'my-church' . '_portfolio_project_author' => 		1, 
			'my-church' . '_portfolio_project_comment' => 		1, 
			'my-church' . '_portfolio_project_tag' => 			0, 
			'my-church' . '_portfolio_project_like' => 			1, 
			'my-church' . '_portfolio_project_link' => 			0, 
			'my-church' . '_portfolio_project_share_box' => 		1, 
			'my-church' . '_portfolio_project_nav_box' => 		1, 
			'my-church' . '_portfolio_project_nav_order_cat' => 	0, 
			'my-church' . '_portfolio_project_author_box' => 	0, 
			'my-church' . '_portfolio_more_projects_box' => 		'popular', 
			'my-church' . '_portfolio_more_projects_count' => 	'4', 
			'my-church' . '_portfolio_more_projects_pause' => 	'4', 
			'my-church' . '_portfolio_project_slug' => 			'project', 
			'my-church' . '_portfolio_pj_categs_slug' => 		'pj-categs', 
			'my-church' . '_portfolio_pj_tags_slug' => 			'pj-tags' 
		), 
		'profile' => array( 
			'my-church' . '_profile_post_title' => 			1, 
			'my-church' . '_profile_post_details_title' => 	esc_html__('Profile details', 'my-church'), 
			'my-church' . '_profile_post_cat' => 			1, 
			'my-church' . '_profile_post_comment' => 		1, 
			'my-church' . '_profile_post_like' => 			1, 
			'my-church' . '_profile_post_nav_box' => 		1, 
			'my-church' . '_profile_post_nav_order_cat' => 		0, 
			'my-church' . '_profile_post_share_box' => 		0, 
			'my-church' . '_profile_post_slug' => 			'profile', 
			'my-church' . '_profile_pl_categs_slug' => 		'pl-categs' 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



/* Project Puzzle Proportion */
if (!function_exists('my_church_project_puzzle_proportion')) {

function my_church_project_puzzle_proportion() {
	return 1;
}

}



/* Theme Image Thumbnails Size */
if (!function_exists('my_church_get_image_thumbnail_list')) {

function my_church_get_image_thumbnail_list() {
	$list = array( 
		'cmsmasters-small-thumb' => array( 
			'width' => 		70, 
			'height' => 	70, 
			'crop' => 		true 
		), 
		'cmsmasters-square-thumb' => array( 
			'width' => 		300, 
			'height' => 	300, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Square', 'my-church') 
		), 
		'cmsmasters-blog-masonry-thumb' => array( 
			'width' => 		580, 
			'height' => 	420, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Masonry Blog', 'my-church') 
		), 
		'cmsmasters-project-grid-thumb' => array( 
			'width' => 		480, 
			'height' => 	287, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Project Grid', 'my-church') 
		), 
		'cmsmasters-project-thumb' => array( 
			'width' => 		580, 
			'height' => 	580, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Project', 'my-church') 
		), 
		'cmsmasters-project-masonry-thumb' => array( 
			'width' => 		580, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry Project', 'my-church') 
		), 
		'post-thumbnail' => array( 
			'width' => 		1020, 
			'height' => 	593, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Featured', 'my-church') 
		), 
		'cmsmasters-masonry-thumb' => array( 
			'width' => 		1020, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry', 'my-church') 
		), 
		'cmsmasters-full-thumb' => array( 
			'width' => 		1360, 
			'height' => 	762, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Full', 'my-church') 
		), 
		'cmsmasters-project-full-thumb' => array( 
			'width' => 		1360, 
			'height' => 	820, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Project Full', 'my-church') 
		), 
		'cmsmasters-full-masonry-thumb' => array( 
			'width' => 		1360, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry Full', 'my-church') 
		) 
	);
	
	
	return $list;
}

}



/* Project Post Type Registration Rename */
if (!function_exists('my_church_project_labels')) {

function my_church_project_labels() {
	return array( 
		'name' => 					esc_html__('Projects', 'my-church'), 
		'singular_name' => 			esc_html__('Project', 'my-church'), 
		'menu_name' => 				esc_html__('Projects', 'my-church'), 
		'all_items' => 				esc_html__('All Projects', 'my-church'), 
		'add_new' => 				esc_html__('Add New', 'my-church'), 
		'add_new_item' => 			esc_html__('Add New Project', 'my-church'), 
		'edit_item' => 				esc_html__('Edit Project', 'my-church'), 
		'new_item' => 				esc_html__('New Project', 'my-church'), 
		'view_item' => 				esc_html__('View Project', 'my-church'), 
		'search_items' => 			esc_html__('Search Projects', 'my-church'), 
		'not_found' => 				esc_html__('No projects found', 'my-church'), 
		'not_found_in_trash' => 	esc_html__('No projects found in Trash', 'my-church') 
	);
}

}

// add_filter('cmsmasters_project_labels_filter', 'my_church_project_labels');


if (!function_exists('my_church_pj_categs_labels')) {

function my_church_pj_categs_labels() {
	return array( 
		'name' => 					esc_html__('Project Categories', 'my-church'), 
		'singular_name' => 			esc_html__('Project Category', 'my-church') 
	);
}

}

// add_filter('cmsmasters_pj_categs_labels_filter', 'my_church_pj_categs_labels');


if (!function_exists('my_church_pj_tags_labels')) {

function my_church_pj_tags_labels() {
	return array( 
		'name' => 					esc_html__('Project Tags', 'my-church'), 
		'singular_name' => 			esc_html__('Project Tag', 'my-church') 
	);
}

}

// add_filter('cmsmasters_pj_tags_labels_filter', 'my_church_pj_tags_labels');



/* Profile Post Type Registration Rename */
if (!function_exists('my_church_profile_labels')) {

function my_church_profile_labels() {
	return array( 
		'name' => 					esc_html__('Profiles', 'my-church'), 
		'singular_name' => 			esc_html__('Profiles', 'my-church'), 
		'menu_name' => 				esc_html__('Profiles', 'my-church'), 
		'all_items' => 				esc_html__('All Profiles', 'my-church'), 
		'add_new' => 				esc_html__('Add New', 'my-church'), 
		'add_new_item' => 			esc_html__('Add New Profile', 'my-church'), 
		'edit_item' => 				esc_html__('Edit Profile', 'my-church'), 
		'new_item' => 				esc_html__('New Profile', 'my-church'), 
		'view_item' => 				esc_html__('View Profile', 'my-church'), 
		'search_items' => 			esc_html__('Search Profiles', 'my-church'), 
		'not_found' => 				esc_html__('No Profiles found', 'my-church'), 
		'not_found_in_trash' => 	esc_html__('No Profiles found in Trash', 'my-church') 
	);
}

}

// add_filter('cmsmasters_profile_labels_filter', 'my_church_profile_labels');


if (!function_exists('my_church_pl_categs_labels')) {

function my_church_pl_categs_labels() {
	return array( 
		'name' => 					esc_html__('Profile Categories', 'my-church'), 
		'singular_name' => 			esc_html__('Profile Category', 'my-church') 
	);
}

}

// add_filter('cmsmasters_pl_categs_labels_filter', 'my_church_pl_categs_labels');

