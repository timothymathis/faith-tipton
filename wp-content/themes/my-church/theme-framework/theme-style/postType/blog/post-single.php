<?php
/**
 * @package 	WordPress
 * @subpackage 	My Church
 * @version		1.0.6
 * 
 * Post Single Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = my_church_get_global_options();

$cmsmasters_post_title = get_post_meta(get_the_ID(), 'cmsmasters_post_title', true);


list($cmsmasters_layout) = my_church_theme_page_layout_scheme();

if ($cmsmasters_layout == 'fullwidth') {
	$cmsmasters_image_thumb_size = 'cmsmasters-full-masonry-thumb';
} else {
	$cmsmasters_image_thumb_size = 'cmsmasters-masonry-thumb';
}


$cmsmasters_post_format = get_post_format();


$cmsmasters_post_sharing_box = get_post_meta(get_the_ID(), 'cmsmasters_post_sharing_box', true);

$cmsmasters_post_author_box = get_post_meta(get_the_ID(), 'cmsmasters_post_author_box', true);

$cmsmasters_post_more_posts = get_post_meta(get_the_ID(), 'cmsmasters_post_more_posts', true);

?>
<!--_________________________ Start Post Single Article _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_open_post'); ?>>
	<?php 
	if ($cmsmasters_option['my-church' . '_blog_post_date']) {
		my_church_get_post_date('post');
	}
	
	
	if ($cmsmasters_post_title == 'true') {
		my_church_post_title_nolink(get_the_ID(), 'h2');
	}
	
	
	if (
		$cmsmasters_option['my-church' . '_blog_post_tag'] || 
		$cmsmasters_option['my-church' . '_blog_post_author'] || 
		$cmsmasters_option['my-church' . '_blog_post_cat'] || 
		$cmsmasters_option['my-church' . '_blog_post_like'] || 
		$cmsmasters_option['my-church' . '_blog_post_comment'] 
	) {
		echo '<div class="cmsmasters_post_cont_info entry-meta">';
			
			my_church_get_post_author('post');
			
			my_church_get_post_category(get_the_ID(), 'category', 'post');
			
			my_church_get_post_tags();
			
			if (
				$cmsmasters_option['my-church' . '_blog_post_like'] || 
				$cmsmasters_option['my-church' . '_blog_post_comment'] 
			) {
				echo '<div class="cmsmasters_post_info">';
					
					my_church_get_post_likes('post');
					
					my_church_get_post_comments('post');
					
				echo '</div>';
			}
			
		echo '</div>';
	}
	
	
	if ($cmsmasters_post_format == 'image') {
		$cmsmasters_post_image_link = get_post_meta(get_the_ID(), 'cmsmasters_post_image_link', true);
		
		my_church_post_type_image(get_the_ID(), $cmsmasters_post_image_link, $cmsmasters_image_thumb_size);
	} elseif ($cmsmasters_post_format == 'gallery') {
		$cmsmasters_post_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsmasters_post_images', true))));
		
		my_church_post_type_slider(get_the_ID(), $cmsmasters_post_images, $cmsmasters_image_thumb_size);
	} elseif ($cmsmasters_post_format == 'video') {
		$cmsmasters_post_video_type = get_post_meta(get_the_ID(), 'cmsmasters_post_video_type', true);
		$cmsmasters_post_video_link = get_post_meta(get_the_ID(), 'cmsmasters_post_video_link', true);
		$cmsmasters_post_video_links = get_post_meta(get_the_ID(), 'cmsmasters_post_video_links', true);
		
		my_church_post_type_video(get_the_ID(), $cmsmasters_post_video_type, $cmsmasters_post_video_link, $cmsmasters_post_video_links, $cmsmasters_image_thumb_size);
	} elseif ($cmsmasters_post_format == 'audio') {
		$cmsmasters_post_audio_links = get_post_meta(get_the_ID(), 'cmsmasters_post_audio_links', true);
		
		my_church_post_type_audio($cmsmasters_post_audio_links);
	} elseif ($cmsmasters_post_format == '' && !post_password_required() && has_post_thumbnail()) {
		$cmsmasters_post_image_show = get_post_meta(get_the_ID(), 'cmsmasters_post_image_show', true);
		
		if ($cmsmasters_post_image_show != 'true') {
			my_church_thumb(get_the_ID(), $cmsmasters_image_thumb_size, false, 'cmsmasters_open_post_img', false, false, false, true, false);
		}
	}
	
	
	if (get_the_content() != '') {
		echo '<div class="cmsmasters_post_content entry-content">';
			
			the_content();
			
			
			wp_link_pages(array( 
				'before' => '<div class="subpage_nav">' . '<strong>' . esc_html__('Pages', 'my-church') . ':</strong>', 
				'after' => '</div>', 
				'link_before' => ' [ ', 
				'link_after' => ' ] ' 
			));
			
		echo '</div>';
	}
	?>
</article>
<!--_________________________ Finish Post Single Article _________________________ -->
<?php 

if ($cmsmasters_post_sharing_box == 'true') {
	my_church_sharing_box(esc_html__('Like this post?', 'my-church'));
}


if ($cmsmasters_option['my-church' . '_blog_post_nav_box']) {
	$order_cat = (isset($cmsmasters_option['my-church' . '_blog_post_nav_order_cat']) ? $cmsmasters_option['my-church' . '_blog_post_nav_order_cat'] : false);
	
	my_church_prev_next_posts($order_cat);
}


if ($cmsmasters_post_author_box == 'true') {
	my_church_author_box(esc_html__('About author', 'my-church'), 'h3', 'h5');
}


if (get_the_tags()) {
	$tgsarray = array();
	
	foreach (get_the_tags() as $tagone) {
		$tgsarray[] = $tagone->term_id;
	}
} else {
	$tgsarray = '';
}


if ($cmsmasters_post_more_posts != 'hide') {
	my_church_related( 
		'h3', 
		esc_html__('More posts', 'my-church'), 
		esc_html__('No posts found', 'my-church'), 
		$cmsmasters_post_more_posts, 
		$tgsarray, 
		$cmsmasters_option['my-church' . '_blog_more_posts_count'], 
		$cmsmasters_option['my-church' . '_blog_more_posts_pause'], 
		'post' 
	);
}


echo my_church_get_pings(get_the_ID(), 'h2');


comments_template();

