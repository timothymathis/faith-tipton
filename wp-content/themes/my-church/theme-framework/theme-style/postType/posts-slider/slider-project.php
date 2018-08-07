<?php
/**
 * @package 	WordPress
 * @subpackage 	My Church
 * @version		1.0.2
 * 
 * Posts Slider Project Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_metadata = explode(',', $cmsmasters_project_metadata);


$title = in_array('title', $cmsmasters_metadata) ? true : false;
$categories = (get_the_terms(get_the_ID(), 'pj-categs') && in_array('categories', $cmsmasters_metadata)) ? true : false;
$comments = (comments_open() && in_array('comments', $cmsmasters_metadata)) ? true : false;
$likes = in_array('likes', $cmsmasters_metadata) ? true : false;
$more = in_array('more', $cmsmasters_metadata) ? true : false;


$cmsmasters_project_link_url = get_post_meta(get_the_ID(), 'cmsmasters_project_link_url', true);
$cmsmasters_project_link_redirect = get_post_meta(get_the_ID(), 'cmsmasters_project_link_redirect', true);
$cmsmasters_project_link_target = get_post_meta(get_the_ID(), 'cmsmasters_project_link_target', true);


$cmsmasters_post_format = get_post_format();

?>
<!--_________________________ Start Posts Slider Project Article _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_slider_project'); ?>>
	<div class="cmsmasters_slider_project_outer">
	<?php 
		echo '<div class="project_img_wrap">';
			
			my_church_thumb_rollover(get_the_ID(), 'cmsmasters-blog-masonry-thumb', false, false, false, false, false, false, false, false, true, $cmsmasters_project_link_redirect, $cmsmasters_project_link_url);
			
			if ($title || $categories || $likes || $comments || $more) {
				echo '<div class="cmsmasters_slider_project_inner">';
					
					if ($categories || $title || $more) {
						echo '<div class="cmsmasters_slider_project_inner_wrap">';
							$title ? my_church_slider_post_heading(get_the_ID(), 'project', 'h2', $cmsmasters_project_link_redirect, $cmsmasters_project_link_url, true, $cmsmasters_project_link_target) : '';
							
							if ($categories) {
								echo '<div class="cmsmasters_slider_project_cont_info entry-meta">';
									
									my_church_get_slider_post_category(get_the_ID(), 'pj-categs', 'project');
									
								echo '</div>';
							}
							
							$more ? my_church_slider_post_more(get_the_ID(), 'project') : '';
						echo '</div>';
					}
					
					if ($likes || $comments) {
						echo '<footer class="cmsmasters_slider_project_footer entry-meta">';
							
							($likes) ? my_church_slider_post_like('project') : '';
							
							($comments) ? my_church_get_slider_post_comments('project') : '';
							
						echo '</footer>';
					}
					
				echo '</div>';
			}
		
		echo '</div>';
	?>
	</div>
</article>
<!--_________________________ Finish Posts Slider Project Article _________________________ -->

