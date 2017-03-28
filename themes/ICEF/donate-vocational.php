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
				<div class="yellow-dots-banner"></div>
				<div class="vocational-wrapper">
					<div class="vocational-content">
						<h2 class="vocational-school-title"><?php echo esc_html(CFS()->get('vocational_school_title'));?></h2>
						<p class="vocational-school-desc"><?php echo esc_html(CFS()->get('vocational_school_description'));?></p>
						<div class="sponsor-button align-center">
							<a href="mailto:info@icefcanada.org">Sponsor</a>
						</div>
					</div>
					<img src="<?php echo esc_html(CFS()->get('vocational_school_image'));?>">					
				</div>
				<div class="content-wrapper">
					<div class="process-wrapper">
						<h2 class="vocational-school-process-title"><?php echo esc_html(CFS()->get('vocational_school_process_title'));?></h2>
						<?php $content = CFS()->get('vocational_school_process_description') ?>
						<?php $allowed_html = array('br' => array()); ?>
						<p class="vocational-school-process-desc"><?php echo wp_kses($content, $allowed_html);?></p>
						<img src="<?php echo get_template_directory_uri();?>/images/svg/line.svg" alt="Image of a line">
					</div> <!-- .process-wrapper -->
				
				
					<div class="vocational-scholarship-wrapper">
						<div class="vocational-scholarship-heading">
							<img src="<?php echo get_template_directory_uri();?>/images/svg/craft.svg" alt="Image of a spool of thread">
							<h2 class="scholarship-title"><?php echo esc_html(CFS()->get('vocational_school_scholarship_title'));?><h2>
						</div> <!-- .vocational-scholarship-heading -->
						<div class="scholarship-content">
							<p><?php echo esc_html(CFS()->get('vocational_school_scholarship_description'));?></p>

							<table>
								<!--<thead>
								<tr>
									<th>Scholarship</th>
									<th>Amount</th>
									<th>Donation Amount(CAD)</th>
								</tr> 
								</thead>-->
								<tbody>
									<?php $fields = CFS()->get( 'vocational_school_scholarship_loop'); ?>
									<?php foreach( $fields as $field ): ?>
										<tr>
											<td> <?php echo esc_html($field['scholarship_category']); ?></td>
											<td class="scholarship-amount"> <?php echo esc_html($field['scholarship_amount']); ?> </td>
											<td class="donation-amount"> <?php echo esc_html($field['donation_amount']); ?> </td>
										</tr>
									<?php endforeach; ?>
								</tbody>				
							</table>
							<p>* Prices in yellow are in Canadian (CAD)</p>
							<p><?php echo esc_html(CFS()->get('vocational_school_student_fees'));?></p>
						</div> <!-- .scholarship-content -->
					</div> <!-- vocational-scholarship-wrapper -->
				</div> <!-- .content-wrapper -->
				<div class="sponsor-wrapper">
					<div class="sponsor-section">	
						<h2 class="vocational-school-sponsor-title"><?php echo esc_html(CFS()->get('vocational_school_sponsor_title'));?></h2>
						<div class="vocational-content-wrapper">
							<ul>
								<?php $sponsor_list = CFS()->get( 'vocational_school_sponsor_package_loop' ); ?>
								<?php foreach( $sponsor_list as $item ): ?>
									<li> <?php echo esc_html($item['sponsor_item']); ?> </li>
								<?php endforeach; ?>
							</ul>
							<div class="sponsor-button align-right">
								<a href="mailto:info@icefcanada.org">Sponsor</a>
							</div> <!-- .sponsor-button align-center -->
						</div> <!-- .content-wrapper -->
					</div> <!-- .sponsor-section -->
				</div> <!-- .sponsor-wrapper -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
