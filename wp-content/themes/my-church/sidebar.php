<?php
/**
 * @package 	WordPress
 * @subpackage 	My Church
 * @version 	1.0.6
 * 
 * Sidebar Template
 * Created by CMSMasters
 * 
 */


if (is_singular()) {
	$sidebar_id = get_post_meta(get_the_ID(), 'cmsmasters_sidebar_id', true);
} elseif (CMSMASTERS_WOOCOMMERCE && is_shop()) {
	$sidebar_id = get_post_meta(wc_get_page_id('shop'), 'cmsmasters_sidebar_id', true);
}


if (isset($sidebar_id) && is_dynamic_sidebar($sidebar_id) && is_active_sidebar($sidebar_id)) {
	dynamic_sidebar($sidebar_id);
} else if (CMSMASTERS_WOOCOMMERCE && is_woocommerce()) {
	dynamic_sidebar('sidebar_shop');
} else if ((is_home() || is_archive()) && is_active_sidebar('sidebar_archive')) {
	dynamic_sidebar('sidebar_archive');
} else if (is_search() && is_active_sidebar('sidebar_search')) {
	dynamic_sidebar('sidebar_search');
} else if (is_active_sidebar('sidebar_default')) {
	dynamic_sidebar('sidebar_default');
}