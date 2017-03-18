<?php
/**
 * Template Name: Our Team Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php echo CFS()->get( 'job' ); ?>
			<?php while ( have_posts() ) : the_post(); ?>

				

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
