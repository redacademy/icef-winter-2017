<?php
/*
* The template for displaying all pages.
*
* Template Name: Donate Child Page
*
* @package ICEF_Theme
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<div class="yellow-dots-banner"></div>
				<div class="donate-child-wrapper">
					<div class="donate-child-content">
						<h2 class="donate-child-title"><?php echo esc_html(CFS()->get('donate_child_title'));?></h2>
						<p class="donate-child-desc"><?php echo esc_html(CFS()->get('donate_child_description'));?></p>
					</div>
					<div class="donate-child-img">
						<img src="<?php echo esc_html(CFS()->get('donate_child_image'));?>">
					</div>
				</div>
				<div class="content-wrapper">
					<div class="process-wrapper">
						<h2 class="donate-child-process-title"><?php echo esc_html(CFS()->get('donate_child_process_title'));?></h2>
						<?php $content = CFS()->get('donate_child_process_description') ?>
						<?php $allowed_html = array('br' => array()); ?>
						<p class="donate-child-process-desc"><?php echo wp_kses($content, $allowed_html);?></p>
						<img src="<?php echo get_template_directory_uri();?>/images/svg/line.svg" alt="Image of a line">
					</div> <!-- .process-wrapper -->
				
				
					<div class="donate-child-scholarship-wrapper">
						<div class="donate-child-scholarship-heading">
							<img src="<?php echo get_template_directory_uri();?>/images/svg/craft.svg" alt="Image of a spool of thread">
							<h2 class="scholarship-title"><?php echo esc_html(CFS()->get('donate_child_scholarship_title'));?><h2>
						</div> <!-- .vocational-scholarship-heading -->
						<div class="scholarship-content">
							<p><?php echo esc_html(CFS()->get('donate_child_scholarship_description'));?></p>

							<table>
								<!--<thead>
								<tr>
									<th>Scholarship</th>
									<th>Amount</th>
									<th>Donation Amount(CAD)</th>
								</tr> 
								</thead>-->
								<tbody>
									<?php $fields = CFS()->get( 'donate_child_scholarship_loop'); ?>
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
							<p><?php echo esc_html(CFS()->get('donate_child_student_fees'));?></p>
						</div> <!-- .scholarship-content -->
					</div> <!-- vocational-scholarship-wrapper -->
				</div> <!-- .content-wrapper -->
				<div class="sponsor-wrapper">
					<div class="sponsor-section">	
						<h2 class="donate-child-sponsor-title"><?php echo esc_html(CFS()->get('donate_child_sponsor_title'));?></h2>
						<div class="donate-child-content-wrapper">
							<ul>
								<?php $sponsor_list = CFS()->get( 'donate_child_sponsor_package_loop' ); ?>
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