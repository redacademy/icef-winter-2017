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
			<?php $allowed_html = array('br' => array()); ?> 
			<img src="<?php echo esc_html(CFS()->get('internship_first_image'));?>" alt="top image">
			<p><?php echo wp_kses(CFS()->get('internship_below_top_image'), $allowed_html); ?></p>
			<div class="desktop-flex">
				<div class="second-image">
					<img src="<?php echo esc_html(CFS()->get('internship_second_image'));?>" alt="second image">
				</div>
				<div class="yellow-background yellow-background-content">
					<div class="below-second-image-title">
						<p><?php echo wp_kses(CFS()->get('internship_below_second_image_title_text'), $allowed_html); ?></p>
					</div>
					<p><?php echo wp_kses(CFS()->get('internship_below_second_image_text'), $allowed_html); ?></p>
				</div>
			</div>
			<div class="position-text">
				<div class="position-availability">
					<p><?php echo esc_html(CFS()->get('internship_position_availability'));?></p>
				</div>
				<div class="position-name yellow-background">
					<p><?php echo esc_html(CFS()->get('internship_position_name'));?></p>
				</div>
			</div>
			<div class="position-term">
				<div class="left-column">
					<p> Term </p>
				</div>
				<div class="right-column">
					<p><?php echo esc_html(CFS()->get('internship_position_term'));?></p>
				</div>
			</div>
			<div class="position-description">
				<div class="left-column">
					<p> Description </p>
				</div>
				<div class="right-column">
					<p><?php echo esc_html(CFS()->get('internship_position_description'));?></p>
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
			<div class="download-button">
				<a href="<?php echo esc_html(CFS()->get('internship_application_form'));?>">Download Form</a>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
