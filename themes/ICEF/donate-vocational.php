<?php
/*
* The template for displaying all pages.
*
* Template Name: Donation Vocational Page
*
* @package RED_Starter_Theme
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="container">
					<div class="vocational-wrapper">
						<img src="<?php echo CFS()->get('vocational_school_image');?>">
						<h2 class="vocational-school-title"><?php echo CFS()->get('vocational_school_title');?></h2>
						<p class="vocational-school-desc"><?php echo CFS()->get('vocational_school_description');?></p>
					</div>
				</div>
				<div class="process-wrapper">
					<h2><?php echo CFS()->get('vocational_school_process_title');?></p>
					<p class="vocational_school_process_desc"><?php echo CFS()->get('vocational_school_process_description');?></p>
				</div>
				<img src="<?php echo get_template_directory_uri();?>/images/svg/line.svg" alt="Image of a line">
				<div class="vocational-school-wrapper">
					<img src="<?php echo get_template_directory_uri();?>/images/svg/craft.svg" alt="Image of a spool of thread">
					<h2><?php echo CFS()->get('vocational_school_scholarship_title');?><h2>
					<p><?php echo CFS()->get('vocational_school_scholarship_description');?></p>
			</div>

			<table>
				<thead>
				<tr>
					<th>Scholarship</th>
					<th>Amount</th>
					<th>Donation Amount(CAD)</th>
				</tr> 
				</thead>
				<tbody>
					<?php $fields = CFS()->get( 'vocational_school_scholarship_loop'); ?>
					<?php foreach( $fields as $field ): ?>
						<tr>
							<td> <?php echo $field['scholarship_category']; ?> </td>
							<td> <?php echo $field['scholarship_amount']; ?> </td>
							<td> <?php echo $field['donation_amount']; ?> </td>
						</tr>
					<?php endforeach; ?>
				</tbody>
				<tfooter>* Price in yellow are in Canadian (CAD)</tfooter>
			</table>
			<p><?php echo CFS()->get('vocational_school_student_fees');?></p>
			<h2><?php echo CFS()->get('vocational_school_sponsor_title');?></h2>
			<p><?php echo CFS()->get('vocational_school_sponsor_package');?></p>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
