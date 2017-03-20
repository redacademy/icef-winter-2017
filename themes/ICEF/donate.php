<?php
/**
 * Template Name: Donate Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<img src="<?php echo CFS()->get('donate_landing_title_image');?>">
				<div class="donate-wrapper">
					<div class="donate-trc-wrapper">
						<h2><?php echo CFS()->get('donate_to_trc_title');?></h2>
						<p class="donate-trc-desc"><?php echo CFS()->get('donate_to_trc_description');?></p>
						<div class="donate-button">
						<a href="https://www.paypal.com/ca/cgi-bin/webscr?cmd=_flow&SESSION=BBw3VEgXEBX6tnBdh_bsHSqjV3hmNlWXYjk9xlDYv36kell-12te6Y3ptAu&dispatch=5885d80a13c0db1f8e263663d3faee8d94717bd303200c3af9aadd01a5f55080">Donate</a>
						</div>
					</div>
					<div class="sponsor-wrapper">
						<h2 class="sponsor-title"><?php echo CFS()->get('sponsor_title');?></h2>
						<p class="sponsor-desc"><?php echo CFS()->get('sponsor_description');?></p>
						<img src="<?php echo get_template_directory_uri();?>/images/svg/gift.svg" alt="Image of a gift">
						<div class="sponsor-button-wrapper">
							<div class="primary-school-button">
								<a href="">Primary School</a>
							</div>
							<div class="vocational-school-button">
								<a href="">Vocational School</a>
							</div>
						</div>
					</div>
				</div>
				<div class="project-wrapper">
					<img src="<?php echo CFS()->get('project_image');?>">
					<div class="fund-project-wrapper">
						<h2 class="project-title"><?php echo CFS()->get('project_title');?></h2>
						<p class="project-desc"><?php echo CFS()->get('project_description');?></p>
					</div>
				</div>
				<div class="yellow-dots-banner"> 
					<!--<img src="<?php echo get_template_directory_uri();?>/images/svg/yellow-dots.svg" alt="image of yellow dots on white background">-->
				</div>
				<div class="recycling-wrapper">
					<h2 class="recycling-prog-title"><?php echo CFS()->get('return_it_recycling_program_title');?></h2>
					<p class="recycling-prog-desc"><?php echo CFS()->get('return_it_recycling_program_description');?></p>
					<p class="icef-donor">
						ICEF’s Donor ID Number is
						<span class="donor-number">#395</span>
					</p>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
