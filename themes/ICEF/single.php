<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main single-update" role="main">
		<h2>Updates > <?php the_title(); ?> </h2>
		<?php while ( have_posts() ) : the_post(); ?>

			<div>
				<div class='update-box'>
					<div class='update-image'><?php the_post_thumbnail('large'); ?></div>
					<p class='update-date'><?php echo get_the_date(); ?></p>
					<p class='update-title'><?php the_title(); ?></p>
				</div>
				<div class='update-content'>	
					<?php echo get_the_content(); ?>
				</div>
			</div>

		<?php endwhile; // End of the loop. ?>
		
			<?php $loop = new WP_Query( array( 
			'post_type' => 'post',
			'posts_per_page' => 3 ) ); ?>

			<div class="latest-adventures">
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>  
					<div class="adventure-pic">
						<?php the_post_thumbnail('large'); ?>
						<span class="colorMeDark"></span>
						<div class="adv-text">
							<p><?php the_title(); ?></p>
							<a class="read-more" href="<?php the_permalink(); ?> ">Read More</a>
						</div>
					</div>
			<?php endwhile; ?>  
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
