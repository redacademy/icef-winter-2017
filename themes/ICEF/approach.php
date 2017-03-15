<?php
/**
 * Template Name: Our Approach Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php the_content(); ?>
			<img src="<?php echo get_template_directory_uri();?>/images/svg/canada-footer.svg">

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
