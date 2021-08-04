<?php 
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

get_header(); 
$title = get_the_title();
$bgImage = get_the_post_thumbnail_url(get_the_ID());
?>
	<div class="content">
 		    <main role="main">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
 				<?= the_content(); ?>			    
			    <?php endwhile; endif; ?>												
			</main> <!-- end #main -->
 	</div> <!-- end #content -->
<?php get_footer(); ?>