<?php 
/**
 * @package 	WordPress
 * @subpackage 	My Church
 * @version 	1.0.5
 * 
 * Admin Panel Element Options
 * Created by CMSMasters
 * 
 */


function my_church_options_element_tabs() {
	$tabs = array();
	
	$tabs['sidebar'] = esc_attr__('Sidebars', 'my-church');
	
	if (class_exists('Cmsmasters_Content_Composer')) {
		$tabs['icon'] = esc_attr__('Social Icons', 'my-church');
	}
	
	$tabs['lightbox'] = esc_attr__('Lightbox', 'my-church');
	$tabs['sitemap'] = esc_attr__('Sitemap', 'my-church');
	$tabs['error'] = esc_attr__('404', 'my-church');
	$tabs['code'] = esc_attr__('Custom Codes', 'my-church');
	
	if (class_exists('Cmsmasters_Form_Builder')) {
		$tabs['recaptcha'] = esc_attr__('reCAPTCHA', 'my-church');
	}
	
	return apply_filters('cmsmasters_options_element_tabs_filter', $tabs);
}


function my_church_options_element_sections() {
	$tab = my_church_get_the_tab();
	
	switch ($tab) {
	case 'sidebar':
		$sections = array();
		
		$sections['sidebar_section'] = esc_attr__('Custom Sidebars', 'my-church');
		
		break;
	case 'icon':
		$sections = array();
		
		$sections['icon_section'] = esc_attr__('Social Icons', 'my-church');
		
		break;
	case 'lightbox':
		$sections = array();
		
		$sections['lightbox_section'] = esc_attr__('Theme Lightbox Options', 'my-church');
		
		break;
	case 'sitemap':
		$sections = array();
		
		$sections['sitemap_section'] = esc_attr__('Sitemap Page Options', 'my-church');
		
		break;
	case 'error':
		$sections = array();
		
		$sections['error_section'] = esc_attr__('404 Error Page Options', 'my-church');
		
		break;
	case 'code':
		$sections = array();
		
		$sections['code_section'] = esc_attr__('Custom Codes', 'my-church');
		
		break;
	case 'recaptcha':
		$sections = array();
		
		$sections['recaptcha_section'] = esc_attr__('Form Builder Plugin reCAPTCHA Keys', 'my-church');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_element_sections_filter', $sections, $tab);	
} 


function my_church_options_element_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = my_church_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = my_church_settings_element_defaults();
	
	
	switch ($tab) {
	case 'sidebar':
		$options[] = array( 
			'section' => 'sidebar_section', 
			'id' => 'my-church' . '_sidebar', 
			'title' => esc_html__('Custom Sidebars', 'my-church'), 
			'desc' => '', 
			'type' => 'sidebar', 
			'std' => $defaults[$tab]['my-church' . '_sidebar'] 
		);
		
		break;
	case 'icon':
		$options[] = array( 
			'section' => 'icon_section', 
			'id' => 'my-church' . '_social_icons', 
			'title' => esc_html__('Social Icons', 'my-church'), 
			'desc' => '', 
			'type' => 'social', 
			'std' => $defaults[$tab]['my-church' . '_social_icons'] 
		);
		
		break;
	case 'lightbox':
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'my-church' . '_ilightbox_skin', 
			'title' => esc_html__('Skin', 'my-church'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['my-church' . '_ilightbox_skin'], 
			'choices' => array( 
				esc_html__('Dark', 'my-church') . '|dark', 
				esc_html__('Light', 'my-church') . '|light', 
				esc_html__('Mac', 'my-church') . '|mac', 
				esc_html__('Metro Black', 'my-church') . '|metro-black', 
				esc_html__('Metro White', 'my-church') . '|metro-white', 
				esc_html__('Parade', 'my-church') . '|parade', 
				esc_html__('Smooth', 'my-church') . '|smooth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'my-church' . '_ilightbox_path', 
			'title' => esc_html__('Path', 'my-church'), 
			'desc' => esc_html__('Sets path for switching windows', 'my-church'), 
			'type' => 'radio', 
			'std' => $defaults[$tab]['my-church' . '_ilightbox_path'], 
			'choices' => array( 
				esc_html__('Vertical', 'my-church') . '|vertical', 
				esc_html__('Horizontal', 'my-church') . '|horizontal' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'my-church' . '_ilightbox_infinite', 
			'title' => esc_html__('Infinite', 'my-church'), 
			'desc' => esc_html__('Sets the ability to infinite the group', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_ilightbox_infinite'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'my-church' . '_ilightbox_aspect_ratio', 
			'title' => esc_html__('Keep Aspect Ratio', 'my-church'), 
			'desc' => esc_html__('Sets the resizing method used to keep aspect ratio within the viewport', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_ilightbox_aspect_ratio'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'my-church' . '_ilightbox_mobile_optimizer', 
			'title' => esc_html__('Mobile Optimizer', 'my-church'), 
			'desc' => esc_html__('Make lightboxes optimized for giving better experience with mobile devices', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_ilightbox_mobile_optimizer'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'my-church' . '_ilightbox_max_scale', 
			'title' => esc_html__('Max Scale', 'my-church'), 
			'desc' => esc_html__('Sets the maximum viewport scale of the content', 'my-church'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['my-church' . '_ilightbox_max_scale'], 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'my-church' . '_ilightbox_min_scale', 
			'title' => esc_html__('Min Scale', 'my-church'), 
			'desc' => esc_html__('Sets the minimum viewport scale of the content', 'my-church'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['my-church' . '_ilightbox_min_scale'], 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'my-church' . '_ilightbox_inner_toolbar', 
			'title' => esc_html__('Inner Toolbar', 'my-church'), 
			'desc' => esc_html__('Bring buttons into windows, or let them be over the overlay', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_ilightbox_inner_toolbar'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'my-church' . '_ilightbox_smart_recognition', 
			'title' => esc_html__('Smart Recognition', 'my-church'), 
			'desc' => esc_html__('Sets content auto recognize from web pages', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_ilightbox_smart_recognition'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'my-church' . '_ilightbox_fullscreen_one_slide', 
			'title' => esc_html__('Fullscreen One Slide', 'my-church'), 
			'desc' => esc_html__('Decide to fullscreen only one slide or hole gallery the fullscreen mode', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_ilightbox_fullscreen_one_slide'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'my-church' . '_ilightbox_fullscreen_viewport', 
			'title' => esc_html__('Fullscreen Viewport', 'my-church'), 
			'desc' => esc_html__('Sets the resizing method used to fit content within the fullscreen mode', 'my-church'), 
			'type' => 'select', 
			'std' => $defaults[$tab]['my-church' . '_ilightbox_fullscreen_viewport'], 
			'choices' => array( 
				esc_html__('Center', 'my-church') . '|center', 
				esc_html__('Fit', 'my-church') . '|fit', 
				esc_html__('Fill', 'my-church') . '|fill', 
				esc_html__('Stretch', 'my-church') . '|stretch' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'my-church' . '_ilightbox_controls_toolbar', 
			'title' => esc_html__('Toolbar Controls', 'my-church'), 
			'desc' => esc_html__('Sets buttons be available or not', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_ilightbox_controls_toolbar'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'my-church' . '_ilightbox_controls_arrows', 
			'title' => esc_html__('Arrow Controls', 'my-church'), 
			'desc' => esc_html__('Enable the arrow buttons', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_ilightbox_controls_arrows'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'my-church' . '_ilightbox_controls_fullscreen', 
			'title' => esc_html__('Fullscreen Controls', 'my-church'), 
			'desc' => esc_html__('Sets the fullscreen button', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_ilightbox_controls_fullscreen'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'my-church' . '_ilightbox_controls_thumbnail', 
			'title' => esc_html__('Thumbnails Controls', 'my-church'), 
			'desc' => esc_html__('Sets the thumbnail navigation', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_ilightbox_controls_thumbnail'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'my-church' . '_ilightbox_controls_keyboard', 
			'title' => esc_html__('Keyboard Controls', 'my-church'), 
			'desc' => esc_html__('Sets the keyboard navigation', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_ilightbox_controls_keyboard'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'my-church' . '_ilightbox_controls_mousewheel', 
			'title' => esc_html__('Mouse Wheel Controls', 'my-church'), 
			'desc' => esc_html__('Sets the mousewheel navigation', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_ilightbox_controls_mousewheel'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'my-church' . '_ilightbox_controls_swipe', 
			'title' => esc_html__('Swipe Controls', 'my-church'), 
			'desc' => esc_html__('Sets the swipe navigation', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_ilightbox_controls_swipe'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'my-church' . '_ilightbox_controls_slideshow', 
			'title' => esc_html__('Slideshow Controls', 'my-church'), 
			'desc' => esc_html__('Enable the slideshow feature and button', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_ilightbox_controls_slideshow'] 
		);
		
		break;
	case 'sitemap':
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'my-church' . '_sitemap_nav', 
			'title' => esc_html__('Website Pages', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_sitemap_nav'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'my-church' . '_sitemap_categs', 
			'title' => esc_html__('Blog Archives by Categories', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_sitemap_categs'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'my-church' . '_sitemap_tags', 
			'title' => esc_html__('Blog Archives by Tags', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_sitemap_tags'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'my-church' . '_sitemap_month', 
			'title' => esc_html__('Blog Archives by Month', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_sitemap_month'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'my-church' . '_sitemap_pj_categs', 
			'title' => esc_html__('Portfolio Archives by Categories', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_sitemap_pj_categs'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'my-church' . '_sitemap_pj_tags', 
			'title' => esc_html__('Portfolio Archives by Tags', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_sitemap_pj_tags'] 
		);
		
		break;
	case 'error':
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'my-church' . '_error_color', 
			'title' => esc_html__('Text Color', 'my-church'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['my-church' . '_error_color'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'my-church' . '_error_bg_color', 
			'title' => esc_html__('Background Color', 'my-church'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['my-church' . '_error_bg_color'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'my-church' . '_error_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_error_bg_img_enable'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'my-church' . '_error_bg_image', 
			'title' => esc_html__('Background Image', 'my-church'), 
			'desc' => esc_html__('Choose your custom error page background image.', 'my-church'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['my-church' . '_error_bg_image'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'my-church' . '_error_bg_rep', 
			'title' => esc_html__('Background Repeat', 'my-church'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['my-church' . '_error_bg_rep'], 
			'choices' => array( 
				esc_html__('No Repeat', 'my-church') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'my-church') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'my-church') . '|repeat-y', 
				esc_html__('Repeat', 'my-church') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'my-church' . '_error_bg_pos', 
			'title' => esc_html__('Background Position', 'my-church'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['my-church' . '_error_bg_pos'], 
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
			'section' => 'error_section', 
			'id' => 'my-church' . '_error_bg_att', 
			'title' => esc_html__('Background Attachment', 'my-church'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['my-church' . '_error_bg_att'], 
			'choices' => array( 
				esc_html__('Scroll', 'my-church') . '|scroll', 
				esc_html__('Fixed', 'my-church') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'my-church' . '_error_bg_size', 
			'title' => esc_html__('Background Size', 'my-church'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['my-church' . '_error_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'my-church') . '|auto', 
				esc_html__('Cover', 'my-church') . '|cover', 
				esc_html__('Contain', 'my-church') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'my-church' . '_error_search', 
			'title' => esc_html__('Search Line', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_error_search'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'my-church' . '_error_sitemap_button', 
			'title' => esc_html__('Sitemap Button', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_error_sitemap_button'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'my-church' . '_error_sitemap_link', 
			'title' => esc_html__('Sitemap Page URL', 'my-church'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['my-church' . '_error_sitemap_link'], 
			'class' => '' 
		);
		
		break;
	case 'code':
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'my-church' . '_custom_css', 
			'title' => esc_html__('Custom CSS', 'my-church'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['my-church' . '_custom_css'], 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'my-church' . '_custom_js', 
			'title' => esc_html__('Custom JavaScript', 'my-church'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['my-church' . '_custom_js'], 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'my-church' . '_gmap_api_key', 
			'title' => esc_html__('Google Maps API key', 'my-church'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['my-church' . '_gmap_api_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'my-church' . '_api_key', 
			'title' => esc_html__('Twitter API key', 'my-church'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['my-church' . '_api_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'my-church' . '_api_secret', 
			'title' => esc_html__('Twitter API secret', 'my-church'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['my-church' . '_api_secret'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'my-church' . '_access_token', 
			'title' => esc_html__('Twitter Access token', 'my-church'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['my-church' . '_access_token'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'my-church' . '_access_token_secret', 
			'title' => esc_html__('Twitter Access token secret', 'my-church'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['my-church' . '_access_token_secret'], 
			'class' => '' 
		);
		
		break;
	case 'recaptcha':
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'my-church' . '_recaptcha_public_key', 
			'title' => esc_html__('reCAPTCHA Public Key', 'my-church'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['my-church' . '_recaptcha_public_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'my-church' . '_recaptcha_private_key', 
			'title' => esc_html__('reCAPTCHA Private Key', 'my-church'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['my-church' . '_recaptcha_private_key'], 
			'class' => '' 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_element_fields_filter', $options, $tab);	
}

