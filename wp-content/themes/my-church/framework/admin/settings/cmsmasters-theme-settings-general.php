<?php 
/**
 * @package 	WordPress
 * @subpackage 	My Church
 * @version 	1.0.5
 * 
 * Admin Panel General Options
 * Created by CMSMasters
 * 
 */


function my_church_options_general_tabs() {
	$cmsmasters_option = my_church_get_global_options();
	
	$tabs = array();
	
	$tabs['general'] = esc_attr__('General', 'my-church');
	
	if ($cmsmasters_option['my-church' . '_theme_layout'] === 'boxed') {
		$tabs['bg'] = esc_attr__('Background', 'my-church');
	}
	
	if (CMSMASTERS_THEME_STYLE_COMPATIBILITY) {
		$tabs['theme_style'] = esc_attr__('Theme Style', 'my-church');
	}
	
	$tabs['header'] = esc_attr__('Header', 'my-church');
	$tabs['content'] = esc_attr__('Content', 'my-church');
	$tabs['footer'] = esc_attr__('Footer', 'my-church');
	
	return apply_filters('cmsmasters_options_general_tabs_filter', $tabs);
}


function my_church_options_general_sections() {
	$tab = my_church_get_the_tab();
	
	switch ($tab) {
	case 'general':
		$sections = array();
		
		$sections['general_section'] = esc_attr__('General Options', 'my-church');
		
		break;
	case 'bg':
		$sections = array();
		
		$sections['bg_section'] = esc_attr__('Background Options', 'my-church');
		
		break;
	case 'theme_style':
		$sections = array();
		
		$sections['theme_style_section'] = esc_attr__('Theme Design Style', 'my-church');
		
		break;
	case 'header':
		$sections = array();
		
		$sections['header_section'] = esc_attr__('Header Options', 'my-church');
		
		break;
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_attr__('Content Options', 'my-church');
		
		break;
	case 'footer':
		$sections = array();
		
		$sections['footer_section'] = esc_attr__('Footer Options', 'my-church');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_general_sections_filter', $sections, $tab);
} 


function my_church_options_general_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = my_church_get_the_tab();
	}
	
	$options = array();
	
	
	$defaults = my_church_settings_general_defaults();
	
	
	switch ($tab) {
	case 'general':
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'my-church' . '_theme_layout', 
			'title' => esc_html__('Theme Layout', 'my-church'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['my-church' . '_theme_layout'], 
			'choices' => array( 
				esc_html__('Liquid', 'my-church') . '|liquid', 
				esc_html__('Boxed', 'my-church') . '|boxed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'my-church' . '_logo_type', 
			'title' => esc_html__('Logo Type', 'my-church'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['my-church' . '_logo_type'], 
			'choices' => array( 
				esc_html__('Image', 'my-church') . '|image', 
				esc_html__('Text', 'my-church') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'my-church' . '_logo_url', 
			'title' => esc_html__('Logo Image', 'my-church'), 
			'desc' => esc_html__('Choose your website logo image.', 'my-church'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['my-church' . '_logo_url'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'my-church' . '_logo_url_retina', 
			'title' => esc_html__('Retina Logo Image', 'my-church'), 
			'desc' => esc_html__('Choose logo image for retina displays. Logo for Retina displays should be twice the size of the default one.', 'my-church'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['my-church' . '_logo_url_retina'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'my-church' . '_logo_title', 
			'title' => esc_html__('Logo Title', 'my-church'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['my-church' . '_logo_title'], 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'my-church' . '_logo_subtitle', 
			'title' => esc_html__('Logo Subtitle', 'my-church'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['my-church' . '_logo_subtitle'], 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'my-church' . '_logo_custom_color', 
			'title' => esc_html__('Custom Text Colors', 'my-church'), 
			'desc' => esc_html__('enable', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_logo_custom_color'] 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'my-church' . '_logo_title_color', 
			'title' => esc_html__('Logo Title Color', 'my-church'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['my-church' . '_logo_title_color'] 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'my-church' . '_logo_subtitle_color', 
			'title' => esc_html__('Logo Subtitle Color', 'my-church'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['my-church' . '_logo_subtitle_color'] 
		);
		
		break;
	case 'bg':
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'my-church' . '_bg_col', 
			'title' => esc_html__('Background Color', 'my-church'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => $defaults[$tab]['my-church' . '_bg_col'] 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'my-church' . '_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_bg_img_enable'] 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'my-church' . '_bg_img', 
			'title' => esc_html__('Background Image', 'my-church'), 
			'desc' => esc_html__('Choose your custom website background image url.', 'my-church'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['my-church' . '_bg_img'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'my-church' . '_bg_rep', 
			'title' => esc_html__('Background Repeat', 'my-church'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['my-church' . '_bg_rep'], 
			'choices' => array( 
				esc_html__('No Repeat', 'my-church') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'my-church') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'my-church') . '|repeat-y', 
				esc_html__('Repeat', 'my-church') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'my-church' . '_bg_pos', 
			'title' => esc_html__('Background Position', 'my-church'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['my-church' . '_bg_pos'], 
			'choices' => array( 
				esc_html__('Top Left', 'my-church') . '|top left', 
				esc_html__('Top Center', 'my-church') . '|top center', 
				esc_html__('Top Right', 'my-church') . '|top right', 
				esc_html__('Center Left', 'my-church') . '|center left', 
				esc_html__('Center Center', 'my-church') . '|center center', 
				esc_html__('Center Right', 'my-church') . '|center right', 
				esc_html__('Bottom Left', 'my-church') . '|bottom left', 
				esc_html__('Bottom Center', 'my-church') . '|bottom center', 
				esc_html__('Bottom Right', 'my-church') . '|bottom right' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'my-church' . '_bg_att', 
			'title' => esc_html__('Background Attachment', 'my-church'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['my-church' . '_bg_att'], 
			'choices' => array( 
				esc_html__('Scroll', 'my-church') . '|scroll', 
				esc_html__('Fixed', 'my-church') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'my-church' . '_bg_size', 
			'title' => esc_html__('Background Size', 'my-church'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['my-church' . '_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'my-church') . '|auto', 
				esc_html__('Cover', 'my-church') . '|cover', 
				esc_html__('Contain', 'my-church') . '|contain' 
			) 
		);
		
		break;
	case 'theme_style':
		$options[] = array( 
			'section' => 'theme_style_section', 
			'id' => 'my-church' . '_theme_style', 
			'title' => esc_html__('Choose Theme Style', 'my-church'), 
			'desc' => '', 
			'type' => 'select_theme_style', 
			'std' => '', 
			'choices' => my_church_all_theme_styles() 
		);
		
		break;
	case 'header':
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'my-church' . '_fixed_header', 
			'title' => esc_html__('Fixed Header', 'my-church'), 
			'desc' => esc_html__('enable', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_fixed_header'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'my-church' . '_header_overlaps', 
			'title' => esc_html__('Header Overlaps Content by Default', 'my-church'), 
			'desc' => esc_html__('enable', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_header_overlaps'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'my-church' . '_header_top_line', 
			'title' => esc_html__('Top Line', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_header_top_line'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'my-church' . '_header_top_height', 
			'title' => esc_html__('Top Height', 'my-church'), 
			'desc' => esc_html__('pixels', 'my-church'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['my-church' . '_header_top_height'], 
			'min' => '10' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'my-church' . '_header_top_line_short_info', 
			'title' => esc_html__('Top Short Info', 'my-church'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'my-church') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['my-church' . '_header_top_line_short_info'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'my-church' . '_header_top_line_add_cont', 
			'title' => esc_html__('Top Additional Content', 'my-church'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['my-church' . '_header_top_line_add_cont'], 
			'choices' => array( 
				esc_html__('None', 'my-church') . '|none', 
				esc_html__('Top Line Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'my-church') . '|social', 
				esc_html__('Top Line Navigation', 'my-church') . '|nav' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'my-church' . '_header_styles', 
			'title' => esc_html__('Header Styles', 'my-church'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['my-church' . '_header_styles'], 
			'choices' => array( 
				esc_html__('Default Style', 'my-church') . '|default', 
				esc_html__('Compact Style Left Navigation', 'my-church') . '|l_nav', 
				esc_html__('Compact Style Right Navigation', 'my-church') . '|r_nav', 
				esc_html__('Compact Style Center Navigation', 'my-church') . '|c_nav'
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'my-church' . '_header_mid_height', 
			'title' => esc_html__('Header Middle Height', 'my-church'), 
			'desc' => esc_html__('pixels', 'my-church'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['my-church' . '_header_mid_height'], 
			'min' => '40' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'my-church' . '_header_bot_height', 
			'title' => esc_html__('Header Bottom Height', 'my-church'), 
			'desc' => esc_html__('pixels', 'my-church'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['my-church' . '_header_bot_height'], 
			'min' => '20' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'my-church' . '_header_search', 
			'title' => esc_html__('Header Search', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_header_search'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'my-church' . '_header_add_cont', 
			'title' => esc_html__('Header Additional Content', 'my-church'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['my-church' . '_header_add_cont'], 
			'choices' => array( 
				esc_html__('None', 'my-church') . '|none', 
				esc_html__('Header Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'my-church') . '|social', 
				esc_html__('Header Custom HTML', 'my-church') . '|cust_html' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'my-church' . '_header_add_cont_cust_html', 
			'title' => esc_html__('Header Custom HTML', 'my-church'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'my-church') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['my-church' . '_header_add_cont_cust_html'], 
			'class' => '' 
		);
		
		break;
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'my-church' . '_layout', 
			'title' => esc_html__('Layout Type by Default', 'my-church'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['my-church' . '_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'my-church') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'my-church') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'my-church') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'my-church' . '_archives_layout', 
			'title' => esc_html__('Archives Layout Type', 'my-church'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['my-church' . '_archives_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'my-church') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'my-church') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'my-church') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'my-church' . '_search_layout', 
			'title' => esc_html__('Search Layout Type', 'my-church'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['my-church' . '_search_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'my-church') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'my-church') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'my-church') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'my-church' . '_other_layout', 
			'title' => esc_html__('Other Layout Type', 'my-church'), 
			'desc' => 'Layout for pages of non-listed types', 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['my-church' . '_other_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'my-church') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'my-church') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'my-church') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'my-church' . '_heading_alignment', 
			'title' => esc_html__('Heading Alignment by Default', 'my-church'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['my-church' . '_heading_alignment'], 
			'choices' => array( 
				esc_html__('Left', 'my-church') . '|left', 
				esc_html__('Right', 'my-church') . '|right', 
				esc_html__('Center', 'my-church') . '|center' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'my-church' . '_heading_scheme', 
			'title' => esc_html__('Heading Custom Color Scheme by Default', 'my-church'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['my-church' . '_heading_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'my-church' . '_heading_bg_image_enable', 
			'title' => esc_html__('Heading Background Image Visibility by Default', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_heading_bg_image_enable'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'my-church' . '_heading_bg_image', 
			'title' => esc_html__('Heading Background Image by Default', 'my-church'), 
			'desc' => esc_html__('Choose your custom heading background image by default.', 'my-church'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['my-church' . '_heading_bg_image'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'my-church' . '_heading_bg_repeat', 
			'title' => esc_html__('Heading Background Repeat by Default', 'my-church'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['my-church' . '_heading_bg_repeat'], 
			'choices' => array( 
				esc_html__('No Repeat', 'my-church') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'my-church') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'my-church') . '|repeat-y', 
				esc_html__('Repeat', 'my-church') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'my-church' . '_heading_bg_attachment', 
			'title' => esc_html__('Heading Background Attachment by Default', 'my-church'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['my-church' . '_heading_bg_attachment'], 
			'choices' => array( 
				esc_html__('Scroll', 'my-church') . '|scroll', 
				esc_html__('Fixed', 'my-church') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'my-church' . '_heading_bg_size', 
			'title' => esc_html__('Heading Background Size by Default', 'my-church'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['my-church' . '_heading_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'my-church') . '|auto', 
				esc_html__('Cover', 'my-church') . '|cover', 
				esc_html__('Contain', 'my-church') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'my-church' . '_heading_bg_color', 
			'title' => esc_html__('Heading Background Color Overlay by Default', 'my-church'), 
			'desc' => '',  
			'type' => 'rgba', 
			'std' => $defaults[$tab]['my-church' . '_heading_bg_color'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'my-church' . '_heading_height', 
			'title' => esc_html__('Heading Height by Default', 'my-church'), 
			'desc' => esc_html__('pixels', 'my-church'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['my-church' . '_heading_height'], 
			'min' => '0' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'my-church' . '_breadcrumbs', 
			'title' => esc_html__('Breadcrumbs Visibility by Default', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_breadcrumbs'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'my-church' . '_bottom_scheme', 
			'title' => esc_html__('Bottom Custom Color Scheme', 'my-church'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['my-church' . '_bottom_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'my-church' . '_bottom_sidebar', 
			'title' => esc_html__('Bottom Sidebar Visibility by Default', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_bottom_sidebar'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'my-church' . '_bottom_sidebar_layout', 
			'title' => esc_html__('Bottom Sidebar Layout by Default', 'my-church'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['my-church' . '_bottom_sidebar_layout'], 
			'choices' => array( 
				'1/1|11', 
				'1/2 + 1/2|1212', 
				'1/3 + 2/3|1323', 
				'2/3 + 1/3|2313', 
				'1/4 + 3/4|1434', 
				'3/4 + 1/4|3414', 
				'1/3 + 1/3 + 1/3|131313', 
				'1/2 + 1/4 + 1/4|121414', 
				'1/4 + 1/2 + 1/4|141214', 
				'1/4 + 1/4 + 1/2|141412', 
				'1/4 + 1/4 + 1/4 + 1/4|14141414' 
			) 
		);
		
		break;
	case 'footer':
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'my-church' . '_footer_scheme', 
			'title' => esc_html__('Footer Custom Color Scheme', 'my-church'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['my-church' . '_footer_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'my-church' . '_footer_type', 
			'title' => esc_html__('Footer Type', 'my-church'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['my-church' . '_footer_type'], 
			'choices' => array( 
				esc_html__('Default', 'my-church') . '|default', 
				esc_html__('Small', 'my-church') . '|small' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'my-church' . '_footer_additional_content', 
			'title' => esc_html__('Footer Additional Content', 'my-church'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['my-church' . '_footer_additional_content'], 
			'choices' => array( 
				esc_html__('None', 'my-church') . '|none', 
				esc_html__('Footer Navigation', 'my-church') . '|nav', 
				esc_html__('Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'my-church') . '|social', 
				esc_html__('Custom HTML', 'my-church') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'my-church' . '_footer_logo', 
			'title' => esc_html__('Footer Logo', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_footer_logo'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'my-church' . '_footer_logo_url', 
			'title' => esc_html__('Footer Logo', 'my-church'), 
			'desc' => esc_html__('Choose your website footer logo image.', 'my-church'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['my-church' . '_footer_logo_url'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'my-church' . '_footer_logo_url_retina', 
			'title' => esc_html__('Footer Logo for Retina', 'my-church'), 
			'desc' => esc_html__('Choose your website footer logo image for retina.', 'my-church'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['my-church' . '_footer_logo_url_retina'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'my-church' . '_footer_nav', 
			'title' => esc_html__('Footer Navigation', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_footer_nav'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'my-church' . '_footer_social', 
			'title' => esc_html__('Footer Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_footer_social'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'my-church' . '_footer_html', 
			'title' => esc_html__('Footer Custom HTML', 'my-church'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'my-church') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['my-church' . '_footer_html'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'my-church' . '_footer_copyright', 
			'title' => esc_html__('Copyright Text', 'my-church'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['my-church' . '_footer_copyright'], 
			'class' => '' 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_general_fields_filter', $options, $tab);	
}

