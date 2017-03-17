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
			<div>
				<img src="<?php echo CFS()->get('internship_second_image');?>" alt="top image">
			</div>
			<div class = "yellowBackground">
				<div class = "belowSecondImageTitle">
					<?php echo CFS()->get('internship_below_second_image_title_text');?>
				</div>
				<?php echo CFS()->get('internship_below_second_image_text');?>
			</div>
			<div class = "positionText">
				<div class = "positionAvailability">
					<?php echo CFS()->get('internship_position_availability');?>
				</div>
				<div class = "positionName yellowBackground">
					<?php echo CFS()->get('internship_position_name');?>
				</div>
			</div>
			<div class = "positionTerm">
				<div class = "leftColumn">
					<p> Term: </p>
				</div>
				<div class = "rightColumn">
					<?php echo CFS()->get('internship_position_term');?>
				</div>
			</div>
			<div class = "positionDescription">
				<div class = "leftColumn">
					<p> Description: </p>
				</div>
				<div class = "rightColumn">
					<?php echo CFS()->get('internship_position_description');?>
				</div>
			</div>
			<div class = "positionRequirement">
				<div class = "leftColumn">
					<p> Requirements: </p>
				</div>
				<div class = "rightColumn">
					<?php echo CFS()->get('internship_position_requirements');?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
