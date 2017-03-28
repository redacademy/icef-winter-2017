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
						<h2><?php echo esc_html(CFS()->get('primary_school_title'));?></h2>
						<p class="primary-school-desc"><?php echo esc_html(CFS()->get('primary_school_description'));?></p>
						<div class="sponsor-button align-center">
							<a href="mailto:info@icefcanada.org">Sponsor</a>
						</div>
					</div>
					<img class="primary-school-img" src="<?php echo esc_html(CFS()->get('primary_school_image'));?>">
				</div> <!-- .primary-wrapper -->
				<div class="content-wrapper">
					<div class="process-wrapper">
						<h2 class="process-title"><?php echo esc_html(CFS()->get('primary_school_process_title'));?></h2>
						<?php $content = CFS()->get('primary_school_process_description') ?>
						<?php $allowed_html = array('br' => array()); ?>
						<p class="primary_school_process_desc"><?php echo wp_kses($content, $allowed_html);?></p>
						<img src="<?php echo get_template_directory_uri();?>/images/svg/line.svg" alt="Image of a line">
					</div> <!-- .process-wrapper -->		
					<div class="primary-scholarship-wrapper">
						<div class="primary-scholarship-heading">
							<img src="<?php echo get_template_directory_uri();?>/images/svg/page.svg" alt="Image of an open book">
							<h2 class="scholarship-title"><?php echo esc_html(CFS()->get('primary_school_scholarship_title'));?><h2>
						</div> <!-- .primary-scholarship-heading -->
						<div class="scholarship-content">
							<p><?php echo esc_html(CFS()->get('primary_school_scholarship_description'));?></p>
							<table>
								<!--<thead align="left">
									<tr>
										<th>Scholarship</th>
										<th>Amount</th>
										<th>Donation Amount *</th>
									</tr> 
								</thead>-->
								<tbody>
									<?php $fields = CFS()->get( 'primary_school_scholarship_loop' ); ?>
									<?php foreach( $fields as $field ): ?>
										<tr>
											<td> <?php echo esc_html($field['scholarship_category']); ?> </td>
											<td class="scholarship-amount"> <?php echo esc_html($field['scholarship_amount']); ?> </td>
											<td class="donation-amount"> <?php echo esc_html($field['donation_amount']); ?> </td>
										</tr>
									<?php endforeach; ?>
								</tbody>				
							</table>
							<p class="grey-text">* Prices in yellow are in Canadian (CAD)</p>
							<p><?php echo esc_html(CFS()->get('primary_school_student_fees'));?></p>
						</div> <!-- .scholarship-content -->
					</div> <!-- .primary-scholarship-wrapper -->
				</div> <!-- .content-wrapper -->
				<div class="sponsor-wrapper">
					<div class="sponsor-section">
						<h2><?php echo esc_html(CFS()->get('primary_school_sponsor_title'));?></h2>
						<div class="sponsor-content-wrapper">
							<ul>
								<?php $sponsor_list = CFS()->get( 'primary_school_sponsor_package_loop' ); ?>
								<?php foreach( $sponsor_list as $item ): ?>
									<li> <?php echo esc_html($item['sponsor_item']); ?> </li>
								<?php endforeach; ?>
							</ul>
							<div class="sponsor-button align-right">
									<a href="mailto:info@icefcanada.org">Sponsor</a>
							</div> <!-- .sponsor-button align-right -->
						</div>
					</div> <!-- .sponsor-section -->
				</div> <!-- .sponsor-wrapper -->
			</div> <!-- .container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
