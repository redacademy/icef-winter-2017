<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main single-update" role="main">
		<h2>Updates > <span><?php the_title(); ?></span></h2>
		<?php while ( have_posts() ) : the_post(); ?>

			<div>
				<div class='update-box'>
					<div class='update-image'><?php the_post_thumbnail('large'); ?></div>
					<p class='update-date main-date'><?php echo get_the_date(); ?></p>
					<p class='update-title main-title'><?php the_title(); ?></p>
				</div>
				<div class='update-content'>	
					<?php echo get_the_content(); ?>
				</div>
			</div>

		<?php endwhile; // End of the loop. ?>
		
			<?php $loop = new WP_Query( array( 
			'post_type' => 'post',
			'posts_per_page' => 4 ) ); ?>

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
