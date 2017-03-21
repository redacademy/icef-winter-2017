<?php
/**
 * Template Name: Updates Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main updates" role="main">

			<div class='updates-flex'>
				<?php while ( have_posts() ) : the_post(); ?>

					<div class="update-article">
						<a class="update-box" href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('large'); ?>
							<p class='update-date'><?php echo get_the_date(); ?></p>
							<p class='update-title'><?php the_title(); ?></p>
						</a>
						<div class="update-text">	
							<?php echo get_the_excerpt(); ?>
						</div>
						<a class ='read' href="<?php the_permalink(); ?>">Read</a>
					</div>

				<?php endwhile; // End of the loop. ?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
