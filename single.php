<?php 
/**
 * The template for displaying all single posts and attachments
 */
get_header(); ?>
			
<div class="content">
	<main role="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  			<?= the_content(); ?>
		<?php endwhile; else : ?>
			<?php get_template_part( 'parts/content', 'missing' ); ?>
		<?php endif; ?>
	</main> <!-- end #main -->
</div> <!-- end #content -->

<?php get_footer(); ?>