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
						<a class="read-more" href="<?php the_permalink(); ?> ">
							<?php the_post_thumbnail('large'); ?>
							<div class="update-text">
								<p><?php the_title(); ?></p>
								<?php the_content(); ?>
							</div>
						</a>
					</div>

				<?php endwhile; // End of the loop. ?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
