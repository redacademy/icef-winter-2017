<?php
/**
 * Template Name: Internship Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="pageHeader">
				<div class="pageTitle">
					<h1>Skilled Internships</h1>
				</div>
			</section>
			<img src="<?php echo esc_html(CFS()->get('internship_first_image'));?>" alt="top image">
			<?php echo esc_html(CFS()->get('internship_below_top_image'));?>
			<div class="desktopFlex">
				<div class="secondImage">
					<img src="<?php echo esc_html(CFS()->get('internship_second_image'));?>" alt="top image">
				</div>
				<div class="yellowBackground yellowBackgroundContent">
					<div class="belowSecondImageTitle">
						<?php echo esc_html(CFS()->get('internship_below_second_image_title_text'));?>
					</div>
					<?php echo esc_html(CFS()->get('internship_below_second_image_text'));?>
				</div>
			</div>
			<div class="positionText">
				<div class="positionAvailability">
					<?php echo esc_html(CFS()->get('internship_position_availability'));?>
				</div>
				<div class="positionName yellowBackground">
					<?php echo esc_html(CFS()->get('internship_position_name'));?>
				</div>
			</div>
			<div class="positionTerm">
				<div class="leftColumn">
					<p> Term </p>
				</div>
				<div class="rightColumn">
					<?php echo esc_html(CFS()->get('internship_position_term'));?>
				</div>
			</div>
			<div class="positionDescription">
				<div class="leftColumn">
					<p> Description </p>
				</div>
				<div class="rightColumn">
					<?php echo esc_html(CFS()->get('internship_position_description'));?>
				</div>
			</div>
			<div class="positionRequirement">
				<div class="leftColumn">
					<p> Requirements </p>
				</div>
				<div class="rightColumn">
					<?php echo esc_html(CFS()->get('internship_position_requirements'));?>
				</div>
			</div>
			<div class="applyButton">
				<a  href="">Apply Now</a>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
