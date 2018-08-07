<?php 
/**
 * @package 	WordPress
 * @subpackage 	My Church
 * @version		1.0.5
 * 
 * Admin Panel Theme Settings Import/Export
 * Created by CMSMasters
 * 
 */


function my_church_options_demo_tabs() {
	$tabs = array();
	
	
	$tabs['import'] = esc_attr__('Import', 'my-church');
	$tabs['export'] = esc_attr__('Export', 'my-church');
	
	
	return $tabs;
}


function my_church_options_demo_sections() {
	$tab = my_church_get_the_tab();
	
	
	switch ($tab) {
	case 'import':
		$sections = array();
		
		$sections['import_section'] = esc_html__('Theme Settings Import', 'my-church');
		
		
		break;
	case 'export':
		$sections = array();
		
		$sections['export_section'] = esc_html__('Theme Settings Export', 'my-church');
		
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	
	return $sections;
} 


function my_church_options_demo_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = my_church_get_the_tab();
	}
	
	
	$options = array();
	
	
	switch ($tab) {
	case 'import':
		$options[] = array( 
			'section' => 'import_section', 
			'id' => 'my-church' . '_demo_import', 
			'title' => esc_html__('Theme Settings', 'my-church'), 
			'desc' => esc_html__("Enter your theme settings data here and click 'Import' button", 'my-church') . (CMSMASTERS_THEME_STYLE_COMPATIBILITY ? '<span class="descr_note">' . esc_html__("Please note that when importing theme settings, these settings will be applied to the appropriate Theme Style (with the same name).", 'my-church') . '<br />' . esc_html__("To see these settings applied, please enable appropriate", 'my-church') . ' <a href="' . esc_url(admin_url('admin.php?page=cmsmasters-settings&tab=theme_style')) . '">' . esc_html__("Theme Style", 'my-church') . '</a>.</span>' : ''), 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		
		break;
	case 'export':
		$options[] = array( 
			'section' => 'export_section', 
			'id' => 'my-church' . '_demo_export', 
			'title' => esc_html__('Theme Settings', 'my-church'), 
			'desc' => esc_html__("Click here to export your theme settings data to the file.", 'my-church') . (CMSMASTERS_THEME_STYLE_COMPATIBILITY ? '<span class="descr_note">' . esc_html__("Please note, that when exporting theme settings, you will export settings for the currently active Theme Style.", 'my-church') . '<br />' . esc_html__("Theme Style can be set", 'my-church') . ' <a href="' . esc_url(admin_url('admin.php?page=cmsmasters-settings&tab=theme_style')) . '">' . esc_html__("here", 'my-church') . '</a>.</span>' : ''), 
			'type' => 'button', 
			'std' => esc_html__('Export Theme Settings', 'my-church'), 
			'class' => 'cmsmasters-demo-export' 
		);
		
		
		break;
	}
	
	
	return $options;	
}

