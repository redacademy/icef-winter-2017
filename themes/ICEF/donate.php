<?php
/**
 * Template Name: Donate Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="yellow-dots-banner">
				<!--<img src="<?php echo get_template_directory_uri();?>/images/svg/yellow-dots.svg" alt="image of yellow dots on white background">-->
			</div>
			<?php echo CFS()->get('donation_description');?>	
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
