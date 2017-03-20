<?php
/**
 * Template Name: Our Approach Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="approachTitle">
				<h1><?php the_title();?></h1>
			</section>
			<section class="hero">
				<img src="<?php echo CFS()->get('approach_hero');?>" alt=:"top image">
			</section>
			<?php echo CFS()->get('below_hero_text');?>
			<div class = "desktopSwirl">
				<img class ="desktop-swirl" src="<?php echo get_template_directory_uri();?>/images/svg/our-approach-wheel.svg" alt="our-approach-wheel">
			</div>
			<section class ="swirlAndText">
				<div class = "mobileSwirl">
					<img class ="mobile-swirl" src="<?php echo get_template_directory_uri();?>/images/svg/koru-swirl.svg" alt="swirly-image">
					<div class = "swirlText">
						<p> Self-Sustainability</p>
					</div>
				</div>
				<ul class = "mobile-approach-table">
					<li> <img src="<?php echo get_template_directory_uri();?>/images/svg/our-approach-icons/hand-heart.svg" alt="Hand-Heart-Icon"><p><span class = "tableNumbers">01.</span> Support</p>
					</li>
					<li> <img src="<?php echo get_template_directory_uri();?>/images/svg/our-approach-icons/tractor.svg" alt="Tractor-Icon"><p><span class = "tableNumbers">02.</span> Economic</p>
					</li>
					<li> <img src="<?php echo get_template_directory_uri();?>/images/svg/our-approach-icons/cap-mob.svg" alt="Cap-mob-Icon"><p><span class = "tableNumbers">03.</span> Education</p>
					</li>
					<li> <img src="<?php echo get_template_directory_uri();?>/images/svg/our-approach-icons/infrastructure.svg" alt="Infrastructure-Icon"><p><span class = "tableNumbers">04.</span> Infrastructure</p>
					</li>
					<li> <img src="<?php echo get_template_directory_uri();?>/images/svg/our-approach-icons/social-mob.svg" alt="Social-mob-Icon"><p><span class = "tableNumbers">05.</span> Social</p>
					</li>
					<li> <img src="<?php echo get_template_directory_uri();?>/images/svg/our-approach-icons/health-mob.svg" alt="Health-mob-Icon"><p><span class = "tableNumbers">06.</span> Health</p>
					</li>
					<li> <img src="<?php echo get_template_directory_uri();?>/images/svg/our-approach-icons/well-being.svg" alt="Well-being-Icon"><p><span class = "tableNumbers">07.</span> Well-being</p>
					</li>
				</ul>
			</section>
			<?php echo CFS()->get('below_self_sustainability');?>
			<div class = "quoteBackground">
				<?php echo CFS()->get('approach_quote');?>
			</div>
			<?php echo CFS()->get('below_quote');?>
			<div class="lastPictureMobile">
				<img src="<?php echo CFS()->get('last_picture');?>" alt="last picture">
			</div>
			<div class="lastPictureDesktop">
				<img src="<?php echo CFS()->get('last_picture_desktop');?>" alt="last-picture-desktop">
			</div>
			<?php echo CFS()->get('below_last_picture_text');?> 
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
