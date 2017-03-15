<?php
/**
 * Template Name: Our Approach Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'approach' ); ?>
						

			<?php endwhile; // End of the loop. ?>
			<!--<?php the_content();?>-->
			<?php echo CFS()->get('approach_hero');?>
			<?php echo CFS()->get('below_hero_text');?>
			<?php echo CFS()->get('below_self_sustainability');?>
			<?php echo CFS()->get('below_quote');?>
			<?php echo CFS()->get('last_picture');?>
			<?php echo CFS()->get('below_last_picture_text');?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
