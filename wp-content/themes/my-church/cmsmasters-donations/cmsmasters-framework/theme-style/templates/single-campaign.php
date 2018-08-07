<?php
/**
 * @package 	WordPress
 * @subpackage 	My Church
 * @version		1.0.2
 * 
 * CMSMasters Donations Single Campaign Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = my_church_get_global_options();


$campaign_tags = get_the_terms(get_the_ID(), 'cp-tags');


$cmsmasters_campaign_sharing_box = get_post_meta(get_the_ID(), 'cmsmasters_campaign_sharing_box', true);

$cmsmasters_campaign_author_box = get_post_meta(get_the_ID(), 'cmsmasters_campaign_author_box', true);

$cmsmasters_campaign_more_posts = get_post_meta(get_the_ID(), 'cmsmasters_campaign_more_posts', true);

$cmsmasters_campaign_title = get_post_meta(get_the_ID(), 'cmsmasters_campaign_title', true);

?>
<!--_________________________ Start Standard Campaign _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="cmsmasters_campaign_cont">
	<?php
		if ($cmsmasters_option['my-church' . '_donations_campaign_date']) {
			my_church_donations_campaign_date('post');
		}
		
		
		if ($cmsmasters_campaign_title == 'true') {
			my_church_donations_campaign_heading(get_the_ID(), 'h2', false);
		}
		
		
		if ( 
			$cmsmasters_option['my-church' . '_donations_campaign_author'] || 
			$cmsmasters_option['my-church' . '_donations_campaign_cat'] || 
			$cmsmasters_option['my-church' . '_donations_campaign_tag'] || 
			$cmsmasters_option['my-church' . '_donations_campaign_like'] || 
			$cmsmasters_option['my-church' . '_donations_campaign_comment'] 
		) {
			echo '<div class="cmsmasters_campaign_cont_info entry-meta' . ((get_the_content() == '') ? ' no_bdb' : '') . '">';
				
				if ( 
					$cmsmasters_option['my-church' . '_donations_campaign_like'] || 
					$cmsmasters_option['my-church' . '_donations_campaign_comment'] 
				) {
					echo '<div class="cmsmasters_campaign_meta_info">';
						
						my_church_donations_campaign_like('post');
						
						my_church_donations_campaign_comments('post');
						
					echo '</div>';
				}
				
				
				my_church_donations_campaign_author('post');
				
				my_church_donations_campaign_category(get_the_ID(), 'cp-categs', 'post');
				
				my_church_donations_campaign_tags(get_the_ID(), 'cp-tags', 'post');
				
			echo '</div>';
		}
		
		
		if (!post_password_required() && has_post_thumbnail()) {
			my_church_thumb(get_the_ID(), 'post-thumbnail', false, true, true, true, true, true, false);
		}
		
		
		echo '<div class="campaign_meta_wrap">';
		
			my_church_donations_campaign_target(get_the_ID(), true);
			
			my_church_donations_campaign_donations_count(get_the_ID(), true);
			
			my_church_donations_campaign_donated(get_the_ID(), 'post');
			
			my_church_donations_campaign_donate_button(get_the_ID(), true);
			
		echo '</div>';
		
		
		if (get_the_content() != '') {
			echo '<div class="cmsmasters_campaign_content entry-content">';
				
				the_content();
				
				
				wp_link_pages(array( 
					'before' => '<div class="subpage_nav">' . '<strong>' . esc_html__('Pages', 'my-church') . ':</strong>', 
					'after' => '</div>', 
					'link_before' => ' [ ', 
					'link_after' => ' ] ' 
				));
				
			echo '<div class="cl"></div>' . 
			'</div>';
		}
	?>
	</div>
</article>
<!--_________________________ Finish Standard Campaign _________________________ -->
<?php

if ($cmsmasters_campaign_sharing_box == 'true') {
	my_church_sharing_box(esc_html__('Share this campaign?', 'my-church'));
}


if ($cmsmasters_option['my-church' . '_donations_campaign_nav_box']) {
	my_church_prev_next_posts();
}


if ($cmsmasters_campaign_author_box == 'true') {
	my_church_author_box(esc_html__('About author', 'my-church'), 'h3', 'h5');
}


if ($campaign_tags) {
	$tgsarray = array();
	
	foreach ($campaign_tags as $tagone) {
		$tgsarray[] = $tagone->term_id;
	}  
} else {
	$tgsarray = '';
}


if ($cmsmasters_campaign_more_posts != 'hide') {
	my_church_donations_related( 
		'h3', 
		esc_html__('More campaigns', 'my-church'), 
		esc_html__('No campaigns found', 'my-church'), 
		$cmsmasters_campaign_more_posts, 
		$tgsarray, 
		$cmsmasters_option['my-church' . '_donations_more_campaigns_count'], 
		$cmsmasters_option['my-church' . '_donations_more_campaigns_pause'], 
		'campaign', 
		'cp-tags' 
	);
}


comments_template();

