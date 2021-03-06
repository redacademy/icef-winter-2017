<?php
/**
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<div class="page-title-wrapper">
					<h1 class="page-title">Donations</h1>
				</div>
				<div class="img-wrapper">
					<img src="<?php echo esc_html(CFS()->get('donate_landing_title_image'));?>">
				</div>
				<div class="donate-wrapper">
					<div class="donate-trc-wrapper">
						<?php $content = CFS()->get('donate_to_trc_description') ?>
						<?php $allowed_html = array('br' => array()); ?>
						<h2><?php echo esc_html(CFS()->get('donate_to_trc_title'));?></h2>				
						<p class="donate-trc-desc"><?php echo wp_kses($content, $allowed_html); ?></p>						
						<form style="text-align: center;" action="https://www.paypal.com/cgi-bin/webscr" method="post">
							<input name="cmd" type="hidden" value="_s-xclick"> 
							<input name="hosted_button_id" type="hidden" value="YF3LX86L5U8YJ"> 
							<input class="donate-button" alt="PayPal - The safer, easier way to pay online!" value="Donate" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" type="submit"> 
						</form>
					</div>
					<div class="sponsor-wrapper">
						<h2 class="sponsor-title"><?php echo esc_html(CFS()->get('sponsor_title'));?></h2>
						<?php $content = CFS()->get('sponsor_description') ?>
						<p class="sponsor-desc"><?php echo wp_kses($content, $allowed_html); ?></p>
						<img src="<?php echo get_template_directory_uri();?>/images/svg/gift.svg" alt="Image of a gift">
						<div class="sponsor-link-wrapper">
							<div class="primary-school-link">
								<a href="./primary-school">Primary School</a>
								
							</div>
							<div class="separate-link">or</div>
							<div class="vocational-school-link">
								<a href="./vocational-school">Vocational School</a>
							</div>
						</div>
					</div>
				</div>
				<div class="project-wrapper">
					<img src="<?php echo esc_html(CFS()->get('project_image'));?>">
					<div class="fund-project-wrapper">
						<h2 class="project-title"><?php echo esc_html(CFS()->get('project_title')); ?></h2>
						<?php $content = CFS()->get('project_description') ?>
						<p class="project-desc"><?php echo wp_kses($content, $allowed_html); ?></p>
					</div>
				</div>
				<div class="yellow-dots-banner"></div>
				<div class="recycling-wrapper">
					<div class="recycling-info">
						<h2 class="recycling-prog-title"><?php echo esc_html(CFS()->get('return_it_recycling_program_title')); ?></h2>
						<?php $content = CFS()->get('return_it_recycling_program_description') ?>
						<p class="recycling-prog-desc"><?php echo wp_kses($content, $allowed_html); ?></p>
					</div>
					<div class="icef-info">
						<p class="icef-donor">ICEF’s Donor ID Number is</p>
						<p class="donor-number">#395</p>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
