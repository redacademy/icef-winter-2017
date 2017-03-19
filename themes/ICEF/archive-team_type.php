<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main team-type-archive" role="main">
			
			<div class='team-flex'>
				<?php while ( have_posts() ) : the_post(); ?>

				<div class='team-member'>
					<img class='profile-pic' src='<?php echo CFS()->get( 'profile_picture' ); ?>'  />
					<?php echo CFS()->get( 'name' ); ?>
					<?php echo CFS()->get( 'job' ); ?>	
				</div>

				<?php endwhile; // End of the loop. ?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
