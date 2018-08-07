<?php 
/**
 * @package 	WordPress
 * @subpackage 	My Church
 * @version		1.0.6
 * 
 * Admin Panel Post, Project, Profile Settings
 * Created by CMSMasters
 * 
 */


function my_church_options_single_tabs() {
	$tabs = array();
	
	
	$tabs['post'] = esc_attr__('Post', 'my-church');
	
	if (CMSMASTERS_PROJECT_COMPATIBLE && class_exists('Cmsmasters_Projects')) {
		$tabs['project'] = esc_attr__('Project', 'my-church');
	}
	
	if (CMSMASTERS_PROFILE_COMPATIBLE && class_exists('Cmsmasters_Profiles')) {
		$tabs['profile'] = esc_attr__('Profile', 'my-church');
	}
	
	
	return apply_filters('cmsmasters_options_single_tabs_filter', $tabs);
}


function my_church_options_single_sections() {
	$tab = my_church_get_the_tab();
	
	
	switch ($tab) {
	case 'post':
		$sections = array();
		
		$sections['post_section'] = esc_attr__('Blog Post Options', 'my-church');
		
		
		break;
	case 'project':
		$sections = array();
		
		$sections['project_section'] = esc_attr__('Portfolio Project Options', 'my-church');
		
		
		break;
	case 'profile':
		$sections = array();
		
		$sections['profile_section'] = esc_attr__('Person Block Profile Options', 'my-church');
		
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	
	return apply_filters('cmsmasters_options_single_sections_filter', $sections, $tab);
} 


function my_church_options_single_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = my_church_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = my_church_settings_single_defaults();
	
	
	switch ($tab) {
	case 'post':
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'my-church' . '_blog_post_layout', 
			'title' => esc_html__('Layout Type', 'my-church'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['my-church' . '_blog_post_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'my-church') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'my-church') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'my-church') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'my-church' . '_blog_post_title', 
			'title' => esc_html__('Post Title', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_blog_post_title'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'my-church' . '_blog_post_date', 
			'title' => esc_html__('Post Date', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_blog_post_date'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'my-church' . '_blog_post_cat', 
			'title' => esc_html__('Post Categories', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_blog_post_cat'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'my-church' . '_blog_post_author', 
			'title' => esc_html__('Post Author', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_blog_post_author'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'my-church' . '_blog_post_comment', 
			'title' => esc_html__('Post Comments', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_blog_post_comment'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'my-church' . '_blog_post_tag', 
			'title' => esc_html__('Post Tags', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_blog_post_tag'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'my-church' . '_blog_post_like', 
			'title' => esc_html__('Post Likes', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_blog_post_like'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'my-church' . '_blog_post_nav_box', 
			'title' => esc_html__('Posts Navigation Box', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_blog_post_nav_box'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'my-church' . '_blog_post_nav_order_cat', 
			'title' => esc_html__('Posts Navigation Order by Category', 'my-church'), 
			'desc' => esc_html__('enable', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_blog_post_nav_order_cat'] 
		);
		
		if (class_exists('Cmsmasters_Content_Composer')) {
			$options[] = array( 
				'section' => 'post_section', 
				'id' => 'my-church' . '_blog_post_share_box', 
				'title' => esc_html__('Sharing Box', 'my-church'), 
				'desc' => esc_html__('show', 'my-church'), 
				'type' => 'checkbox', 
				'std' => $defaults[$tab]['my-church' . '_blog_post_share_box'] 
			);
		}
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'my-church' . '_blog_post_author_box', 
			'title' => esc_html__('About Author Box', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_blog_post_author_box'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'my-church' . '_blog_more_posts_box', 
			'title' => esc_html__('More Posts Box', 'my-church'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['my-church' . '_blog_more_posts_box'], 
			'choices' => array( 
				esc_html__('Show Related Posts', 'my-church') . '|related', 
				esc_html__('Show Popular Posts', 'my-church') . '|popular', 
				esc_html__('Show Recent Posts', 'my-church') . '|recent', 
				esc_html__('Hide More Posts Box', 'my-church') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'my-church' . '_blog_more_posts_count', 
			'title' => esc_html__('More Posts Box Items Number', 'my-church'), 
			'desc' => esc_html__('posts', 'my-church'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['my-church' . '_blog_more_posts_count'], 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'my-church' . '_blog_more_posts_pause', 
			'title' => esc_html__('More Posts Slider Pause Time', 'my-church'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'my-church'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['my-church' . '_blog_more_posts_pause'], 
			'min' => '0', 
			'max' => '20' 
		);
		
		
		break;
	case 'project':
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'my-church' . '_portfolio_project_title', 
			'title' => esc_html__('Project Title', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_portfolio_project_title'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'my-church' . '_portfolio_project_details_title', 
			'title' => esc_html__('Project Details Title', 'my-church'), 
			'desc' => esc_html__('Enter a project details block title', 'my-church'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['my-church' . '_portfolio_project_details_title'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'my-church' . '_portfolio_project_date', 
			'title' => esc_html__('Project Date', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_portfolio_project_date'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'my-church' . '_portfolio_project_cat', 
			'title' => esc_html__('Project Categories', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_portfolio_project_cat'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'my-church' . '_portfolio_project_author', 
			'title' => esc_html__('Project Author', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_portfolio_project_author'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'my-church' . '_portfolio_project_comment', 
			'title' => esc_html__('Project Comments', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_portfolio_project_comment'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'my-church' . '_portfolio_project_tag', 
			'title' => esc_html__('Project Tags', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_portfolio_project_tag'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'my-church' . '_portfolio_project_like', 
			'title' => esc_html__('Project Likes', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_portfolio_project_like'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'my-church' . '_portfolio_project_link', 
			'title' => esc_html__('Project Link', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_portfolio_project_link'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'my-church' . '_portfolio_project_share_box', 
			'title' => esc_html__('Sharing Box', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_portfolio_project_share_box'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'my-church' . '_portfolio_project_nav_box', 
			'title' => esc_html__('Projects Navigation Box', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_portfolio_project_nav_box'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'my-church' . '_portfolio_project_nav_order_cat', 
			'title' => esc_html__('Projects Navigation Order by Category', 'my-church'), 
			'desc' => esc_html__('enable', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_portfolio_project_nav_order_cat'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'my-church' . '_portfolio_project_author_box', 
			'title' => esc_html__('About Author Box', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_portfolio_project_author_box'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'my-church' . '_portfolio_more_projects_box', 
			'title' => esc_html__('More Projects Box', 'my-church'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['my-church' . '_portfolio_more_projects_box'], 
			'choices' => array( 
				esc_html__('Show Related Projects', 'my-church') . '|related', 
				esc_html__('Show Popular Projects', 'my-church') . '|popular', 
				esc_html__('Show Recent Projects', 'my-church') . '|recent', 
				esc_html__('Hide More Projects Box', 'my-church') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'my-church' . '_portfolio_more_projects_count', 
			'title' => esc_html__('More Projects Box Items Number', 'my-church'), 
			'desc' => esc_html__('projects', 'my-church'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['my-church' . '_portfolio_more_projects_count'], 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'my-church' . '_portfolio_more_projects_pause', 
			'title' => esc_html__('More Projects Slider Pause Time', 'my-church'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'my-church'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['my-church' . '_portfolio_more_projects_pause'], 
			'min' => '0', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'my-church' . '_portfolio_project_slug', 
			'title' => esc_html__('Project Slug', 'my-church'), 
			'desc' => esc_html__('Enter a page slug that should be used for your projects single item', 'my-church'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['my-church' . '_portfolio_project_slug'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'my-church' . '_portfolio_pj_categs_slug', 
			'title' => esc_html__('Project Categories Slug', 'my-church'), 
			'desc' => esc_html__('Enter page slug that should be used on projects categories archive page', 'my-church'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['my-church' . '_portfolio_pj_categs_slug'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'my-church' . '_portfolio_pj_tags_slug', 
			'title' => esc_html__('Project Tags Slug', 'my-church'), 
			'desc' => esc_html__('Enter page slug that should be used on projects tags archive page', 'my-church'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['my-church' . '_portfolio_pj_tags_slug'], 
			'class' => '' 
		);
		
		
		break;
	case 'profile':
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'my-church' . '_profile_post_title', 
			'title' => esc_html__('Profile Title', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_profile_post_title'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'my-church' . '_profile_post_details_title', 
			'title' => esc_html__('Profile Details Title', 'my-church'), 
			'desc' => esc_html__('Enter a profile details block title', 'my-church'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['my-church' . '_profile_post_details_title'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'my-church' . '_profile_post_cat', 
			'title' => esc_html__('Profile Categories', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_profile_post_cat'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'my-church' . '_profile_post_comment', 
			'title' => esc_html__('Profile Comments', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_profile_post_comment'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'my-church' . '_profile_post_like', 
			'title' => esc_html__('Profile Likes', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_profile_post_like'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'my-church' . '_profile_post_nav_box', 
			'title' => esc_html__('Profiles Navigation Box', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_profile_post_nav_box'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'my-church' . '_profile_post_nav_order_cat', 
			'title' => esc_html__('Profiles Navigation Order by Category', 'my-church'), 
			'desc' => esc_html__('enable', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_profile_post_nav_order_cat'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'my-church' . '_profile_post_share_box', 
			'title' => esc_html__('Sharing Box', 'my-church'), 
			'desc' => esc_html__('show', 'my-church'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['my-church' . '_profile_post_share_box'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'my-church' . '_profile_post_slug', 
			'title' => esc_html__('Profile Slug', 'my-church'), 
			'desc' => esc_html__('Enter a page slug that should be used for your profiles single item', 'my-church'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['my-church' . '_profile_post_slug'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'my-church' . '_profile_pl_categs_slug', 
			'title' => esc_html__('Profile Categories Slug', 'my-church'), 
			'desc' => esc_html__('Enter page slug that should be used on profiles categories archive page', 'my-church'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['my-church' . '_profile_pl_categs_slug'], 
			'class' => '' 
		);
		
		
		break;
	}
	
	
	return apply_filters('cmsmasters_options_single_fields_filter', $options, $tab);
}

