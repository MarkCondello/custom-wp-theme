<?php
/**
 * Displays event archive posts. 
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header(); 

$title = post_type_archive_title('', false);
$archive_page_ID = get_archive_page_id('events');
$eventPage = get_post($archive_page_ID);	
$bgImage = (has_post_thumbnail($archive_page_ID) ? wp_get_attachment_image_src( get_post_thumbnail_id($archive_page_ID), 'downpage-banner' ) : '' );	

?>	
	<div class="content">
	<?= $eventPage->post_content; ?>
 				<main class="main small-12 cell  p-t-3" role="main"> 
			<?php 	if (have_posts()) : 
					//  Add template code here
	  				else : ?>		
				<?php get_template_part( 'parts/content', 'missing' ); ?>
		<?php 	endif; ?>
				</main> <!-- end #main -->
 	 
	</div>
<?php get_footer(); ?>