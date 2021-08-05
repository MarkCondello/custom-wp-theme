<?php
/**
 * The template part for displaying a message that posts cannot be found
 */
?>

<div class="post-not-found">
	
	<?php if ( is_search() ) : ?>
		
		<header class="article-header">
			<h1><?php _e( 'Sorry, No Results.', ' markcondwp' );?></h1>
		</header>
		
		<section class="entry-content">
			<p><?php _e( 'Try your search again.', ' markcondwp' );?></p>
		</section>
		
		<section class="search">
		    <p><?php get_search_form(); ?></p>
		</section> <!-- end search section -->
		
		
	<?php else: ?>
		<header class="article-header">
			<h1><?php _e( 'Oops, Nothing Found!', ' markcondwp' ); ?></h1>
		</header>
		<section class="entry-content">
			<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', ' markcondwp' ); ?></p>
		</section>
		<section class="search">
		    <p><?php get_search_form(); ?></p>
		</section> <!-- end search section -->	
	<?php endif; ?>
	
</div>
