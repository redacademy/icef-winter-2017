<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main single-update" role="main">
		<h2 class='updates-title'>Updates > <span><?php the_title(); ?></span></h2>
		<div class='updates-container'>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class='update-box'>
						<div class='update-image'><?php the_post_thumbnail('large'); ?></div>
						<p class='update-date main-date'><?php echo get_the_date(); ?></p>
						<div class="single-update-title">
							<p class='update-title main-title'><?php the_title(); ?></p>
						</div>
					</div>
					<div class='update-content'>
						<?php echo get_the_content(); ?>
					</div>
				</article>

			<?php endwhile; // End of the loop.

				wp_reset_postdata();
				$loop = new wp_query( array(
				'post_type' => 'post',
				'posts_per_page' => 4 ) ); ?>
		</div>

			<div class='more'>
				<a hfref="<?php get_post_type_archive_link(); ?>">More...</a>
			</div>

			<div class="updates-flex">
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class='updates-article'>
					<a class='update-box' href='<?php the_permalink(); ?>'>
						<div class='update-image'><?php the_post_thumbnail('large'); ?></div>
						<p class='update-date'><?php echo get_the_date(); ?></p>
						<p class='update-title'><?php the_title(); ?></p>
					</a>
				</div>
			<?php endwhile; ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
