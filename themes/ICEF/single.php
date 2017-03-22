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
			'posts_per_page' => 4 ) ); ?>

			<section class='updates'>
				<div class="updates-flex">
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>  
					<div class='updates-aticle'>
						<div class='update-box'>
							<div class='update-image'><?php the_post_thumbnail('large'); ?></div>
							<p class='update-date'><?php echo get_the_date(); ?></p>
							<p class='update-title'><?php the_title(); ?></p>
						</div>
					</div>
				<?php endwhile; ?>  
				</div>
			</section>
		</main><!-- #main -->
	</div>

<?php get_footer(); ?>
