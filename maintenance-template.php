<?php
/**
 * The maintenance template file
 *
 */

get_header(); 
?>
	<div style="height: 100vh; padding-top: 10vh; background-image: url('<?= get_template_directory_uri() . '/screenshot.png' ?>'); background-repeat: no-repeat; background-position: top; background-size: cover;">
		<main class="main small-10 cell text-center" role="main">
			<i class="colour-white fal fa-alarm-clock fa-4x"></i>
			<h1>Down for scheduled <br> maintenance. </h1>
			<p>For general enquiries, please email <a  href="mailto:###">here</a></p>														
		</main>  
 	</div> 
<?php get_footer(); ?>
<style>
	header.header {
		display: none;
	}
</style>