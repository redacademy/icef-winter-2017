<?php
/**
 * Template Name: Donate Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<img src="<?php echo CFS()->get('donate_landing_title_image');?>">	
			<?php echo CFS()->get('donate_to_trc_title');?>
			<?php echo CFS()->get('donation_to_trc_description');?>
			<?php echo CFS()->get('donation_title');?>	

			<?php echo CFS()->get('donation_description');?>
			<img src="<?php echo CFS()->get('project_image');?>">
			<?php echo CFS()->get('project_description');?>	
			<div class="yellow-dots-banner">
				<!--<img src="<?php echo get_template_directory_uri();?>/images/svg/yellow-dots.svg" alt="image of yellow dots on white background">-->
			</div>
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
