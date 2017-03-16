<?php
/**
 * Template Name: Internship Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<img src="<?php echo CFS()->get('internship_first_image');?>" alt="top image">
			<?php echo CFS()->get('internship_below_top_image');?>
			<img src="<?php echo CFS()->get('internship_second_image');?>" alt="top image">
			<div class = "yellowBackground">
				<?php echo CFS()->get('internship_below_second_image_title_text');?>
				<?php echo CFS()->get('internship_below_second_image_text');?>
			</div>
			<?php echo CFS()->get('internship_position_availability');?>
			<div class = "yellowBackground">
				<?php echo CFS()->get('internship_position_name');?>
			</div>
			<?php echo CFS()->get('internship_position_term');?>
			<?php echo CFS()->get('internship_position_description');?>
			<?php echo CFS()->get('internship_position_requirements');?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
