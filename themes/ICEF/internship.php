<?php
/**
 * Template Name: Internship Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="page-header">
				<div class="page-title">
					<h1>Skilled Internships</h1>
				</div>
			</section>
			<img src="<?php echo esc_html(CFS()->get('internship_first_image'));?>" alt="top image">
			<?php echo esc_html(CFS()->get('internship_below_top_image'));?>
			<div class="desktop-flex">
				<div class="second-image">
					<img src="<?php echo esc_html(CFS()->get('internship_second_image'));?>" alt="top image">
				</div>
				<div class="yellow-background yellow-background-content">
					<div class="below-second-image-title">
						<?php echo esc_html(CFS()->get('internship_below_second_image_title_text'));?>
					</div>
					<?php echo esc_html(CFS()->get('internship_below_second_image_text'));?>
				</div>
			</div>
			<div class="position-text">
				<div class="position-availability">
					<?php echo esc_html(CFS()->get('internship_position_availability'));?>
				</div>
				<div class="position-name yellow-background">
					<?php echo esc_html(CFS()->get('internship_position_name'));?>
				</div>
			</div>
			<div class="position-term">
				<div class="left-column">
					<p> Term </p>
				</div>
				<div class="right-column">
					<?php echo esc_html(CFS()->get('internship_position_term'));?>
				</div>
			</div>
			<div class="position-description">
				<div class="left-column">
					<p> Description </p>
				</div>
				<div class="right-column">
					<?php echo esc_html(CFS()->get('internship_position_description'));?>
				</div>
			</div>
			<div class="position-requirement">
				<div class="left-column">
					<p> Requirements </p>
				</div>
				<div class="right-column">
					<ul>
						<?php $requirements_list = CFS()->get('internship_position_requirements_loop');?>
						<?php foreach( $requirements_list as $item ): ?>
							<li> <?php echo esc_html( $item['internship_position_requirements']); ?> </li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
			<div class="applyButton">
				<a  href="">Apply Now</a>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
