<?php
/*
* The template for displaying all pages.
*
* Template Name: Donation Primary Page
*
* @package RED_Starter_Theme
*/


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="container">
				<div class="yellow-dots-banner"></div>
				<div class="primary-wrapper">
					<div class="primary-content">
						<h2><?php echo CFS()->get('primary_school_title');?></h2>
						<p class="primary-school-desc"><?php echo CFS()->get('primary_school_description');?></p>
					</div>
					<img class="primary-school-img" src="<?php echo CFS()->get('primary_school_image');?>">
				</div> <!-- .primary-wrapper -->
				<div class="content-wrapper">
					<div class="process-wrapper">
						<h2 class="process-title"><?php echo CFS()->get('primary_school_process_title');?></h2>
						<p class="primary_school_process_desc"><?php echo CFS()->get('primary_school_process_description');?></p>
						<img src="<?php echo get_template_directory_uri();?>/images/svg/line.svg" alt="Image of a line">
					</div> <!-- .process-wrapper -->		
					<div class="primary-scholarship-wrapper">
						<div class="primary-scholarship-heading">
							<img src="<?php echo get_template_directory_uri();?>/images/svg/page.svg" alt="Image of an open book">
							<h2 class="scholarship-title"><?php echo CFS()->get('primary_school_scholarship_title');?><h2>
						</div> <!-- .primary-scholarship-heading -->
						<div class="scholarship-content">
							<p><?php echo CFS()->get('primary_school_scholarship_description');?></p>
							<table>
								<!--<thead align="left">
									<tr>
										<th>Scholarship</th>
										<th>Amount</th>
										<th>Donation Amount *</th>
									</tr> 
								</thead>-->
								<tbody>
									<?php $fields = CFS()->get( 'primary_school_scholarship_loop'); ?>
									<?php foreach( $fields as $field ): ?>
										<tr>
											<td> <?php echo $field['scholarship_category']; ?> </td>
											<td class="scholarship-amount"> <?php echo $field['scholarship_amount']; ?> </td>
											<td class="donation-amount"> <?php echo $field['donation_amount']; ?> </td>
										</tr>
									<?php endforeach; ?>
								</tbody>				
							</table>
							<p class="grey-text">* Prices in yellow are in Canadian (CAD)</p>
							<p><?php echo CFS()->get('primary_school_student_fees');?></p>
						</div> <!-- .scholarship-content -->
					</div> <!-- .primary-scholarship-wrapper -->
				</div> <!-- .content-wrapper -->
				<div class="sponsor-wrapper">
					<div class="sponsor-section">
						<h2><?php echo CFS()->get('primary_school_sponsor_title');?></h2>
						<p><?php echo CFS()->get('primary_school_sponsor_package');?></p>
					</div>
				</div> <!-- .sponsor-wrapper -->
			</div> <!-- .container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
