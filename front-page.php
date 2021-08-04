<?php
/**
 * The front page template file
 *
 * It is used to display a content which is set to front page and uses a custom query to get future events.
 */

get_header(); ?>		
<div class="content">	 
	<?php 
	if (have_posts()) : 
		while (have_posts()) : 
			the_post(); 
			the_content();
		endwhile;  
	else :   ?>
	<div class="inner-content">
		<main role="main">
		<?php get_template_part( 'parts/content', 'missing' ); ?>
		</main>  
	</div> <!-- end #inner-content -->
<?php endif; ?>															
</div> <!-- end #content -->
<?php get_footer(); ?>