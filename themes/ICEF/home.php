<?php
/**
 * Template Name: Updates Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main updates" role="main">
			<h1>Updates</h1>
			<div class='updates-flex'>
				<?php while ( have_posts() ) : the_post(); ?>

					<div class="update-article">
						<a class="update-box" href="<?php esc_html(the_permalink()); ?>">
							<div class="update-image"><?php esc_html(the_post_thumbnail('large')); ?></div>
							<p class="update-date"><?php echo esc_html(get_the_date()); ?></p>
							<p class="update-title"><?php esc_html(the_title()); ?></p>
						</a>
						<div class="update-text">	
							<?php echo esc_html(get_the_excerpt()); ?>
						</div>
						<div class ="read">
							<a  href="<?php esc_html(the_permalink()); ?>">
								<p>Read</p>
								<img src="<?php echo get_template_directory_uri();?>/images/svg/arrow-right.svg" alt="arrow-left">
							</a>
						</div>
					</div>

				<?php endwhile; // End of the loop. ?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
