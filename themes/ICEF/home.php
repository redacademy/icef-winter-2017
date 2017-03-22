<?php
/**
 * Template Name: Updates Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main updates" role="main">
			<h2>Updates</h2>
			<div class='updates-flex'>
				<?php while ( have_posts() ) : the_post(); ?>

					<div class="update-article">
						<a class="update-box" href="<?php the_permalink(); ?>">
							<div class='update-image'><?php the_post_thumbnail('large'); ?></div>
							<p class='update-date'><?php echo get_the_date(); ?></p>
							<p class='update-title'><?php the_title(); ?></p>
						</a>
						<div class="update-text">	
							<?php echo get_the_excerpt(); ?>
						</div>
						<div class ='read'>
							<a  href="<?php the_permalink(); ?>">
								<p>Read</p>
								<img src='<?php echo get_template_directory_uri();?>/images/svg/arrow-right.svg' alt='arrow-left'>
							</a>
						</div>
					</div>

				<?php endwhile; // End of the loop. ?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
