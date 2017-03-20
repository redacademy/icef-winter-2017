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
			<div class="donate-wrapper">
				<div class="donate-trc-wrapper">
					<h2><?php echo CFS()->get('donate_to_trc_title');?></h2>
					<p class="donate-trc-desc"><?php echo CFS()->get('donate_to_trc_description');?></p>
				</div>
				<div class="sponsor-wrapper">
					<h2 class="sponsor-title"><?php echo CFS()->get('sponsor_title');?></h2>
					<p class="sponsor-desc"><?php echo CFS()->get('sponsor_description');?></p>
				</div>
			</div>
			<div class="project-wrapper">
				<img src="<?php echo CFS()->get('project_image');?>">
				<h2 class="project-title"><?php echo CFS()->get('project_title');?></h2>
				<p class="project-desc"><?php echo CFS()->get('project_description');?></p>
			<div class="yellow-dots-banner">
				<!--<img src="<?php echo get_template_directory_uri();?>/images/svg/yellow-dots.svg" alt="image of yellow dots on white background">-->
			</div>
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
