<?php
/**
 * @package 	WordPress
 * @subpackage 	Mall
 * @version		1.0.4
 * 
 * Blog Page Masonry Standard Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_post_metadata = explode(',', $cmsmasters_metadata);


$date = (in_array('date', $cmsmasters_post_metadata) || is_home()) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsmasters_post_metadata) || is_home())) ? true : false;
$author = (in_array('author', $cmsmasters_post_metadata) || is_home()) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_post_metadata) || is_home())) ? true : false;
$likes = (in_array('likes', $cmsmasters_post_metadata) || is_home()) ? true : false;
$more = (in_array('more', $cmsmasters_post_metadata) || is_home()) ? true : false;


$post_sort_categs = get_the_terms(0, 'category');

if ($post_sort_categs != '') {
	$post_categs = '';
	
	foreach ($post_sort_categs as $post_sort_categ) {
		$post_categs .= ' ' . $post_sort_categ->slug;
	}
	
	$post_categs = ltrim($post_categs, ' ');
}

?>

<!--_________________________ Start Standard Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_post_masonry'); ?> data-category="<?php echo esc_attr($post_categs); ?>">
	<div class="cmsmasters_post_cont">
	<?php
		if (!post_password_required() && has_post_thumbnail()) {
			echo '<div class="cmsmasters_date_img_wrap">';
				
				cmsmasters_thumb(get_the_ID(), 'blog-masonry-thumb', true, false, true, false, true, true, false);
				
				$date ? cmsmasters_post_date('page', 'masonry') : '';
				
			echo '</div>';
		} else {
			$date ? cmsmasters_post_date('page', 'masonry') : '';
		}
		
		
		cmsmasters_post_heading(get_the_ID(), 'h3');
		
		
		if ($author || $categories) {
			echo '<div class="cmsmasters_post_cont_info entry-meta">';
				
				$author ? cmsmasters_post_author('page') : '';
				
				$categories ? cmsmasters_post_category(get_the_ID(), 'category', 'page') : '';
				
			echo '</div>';
		}
		
		
		cmsmasters_post_exc_cont();
		
		
		if ($more || $likes || $comments) {
			echo '<footer class="cmsmasters_post_footer entry-meta">';
				
				$more ? cmsmasters_post_more(get_the_ID()) : '';
				
				$likes ? cmsmasters_post_likes('page') : '';
				
				$comments ? cmsmasters_post_comments('page') : '';
				
			echo '</footer>';
		}
	?>
	</div>
</article>
<!--_________________________ Finish Standard Article _________________________ -->

