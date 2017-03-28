<?php
/**
 * Template Name: Our Team Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<?php while ( have_posts() ) : the_post(); ?>
			<?php echo CFS()->get( 'profile_picture' ); ?>
			<?php echo CFS()->get( 'name' ); ?>
			<?php echo CFS()->get( 'job' ); ?>	

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
