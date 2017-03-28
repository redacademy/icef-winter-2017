<?php
/**
 * Template Name: Our Approach Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="approach-title">
				<h1><?php esc_html(the_title());?></h1>
			</section>
			<section class="hero">
				<img src="<?php echo esc_html(CFS()->get('approach_hero'));?>" alt=:"top image">
			</section>
			<!--for the wp_kses stuff below-->
			<?php $allowed_html = array('br' => array()); ?>    
			<p><?php echo wp_kses(CFS()->get('below_hero_text'), $allowed_html); ?></p>  
			<section class ="desktop-swirl">
				<img class ="desktop-koru-swirl" src="<?php echo get_template_directory_uri();?>/images/svg/our-approach-desktop/koru-swirl-des.svg" alt="our-approach-wheel">
				<div class="wheel-text">
					<p>Self-Sustainability</p>
				</div>
				<div class="wheel-icons">
					<ul class = "swirl-icons">
						<li> <img src="<?php echo get_template_directory_uri();?>/images/svg/our-approach-desktop/hand-heart-des.svg" alt="Hand-Heart-Icon"><p>Support</p>
						</li>
						<li> <img src="<?php echo get_template_directory_uri();?>/images/svg/our-approach-desktop/tractor-des.svg" alt="Tractor-Icon"><p>Economic</p>
						</li>
						<li> <img src="<?php echo get_template_directory_uri();?>/images/svg/our-approach-desktop/cap-des.svg" alt="Cap-mob-Icon"><p>Education</p>
						</li>
						<li> <img src="<?php echo get_template_directory_uri();?>/images/svg/our-approach-desktop/infrastructure-des.svg" alt="Infrastructure-Icon"><p>Infrastructure</p>
						</li>
						<li> <img src="<?php echo get_template_directory_uri();?>/images/svg/our-approach-desktop/social-des.svg" alt="Social-mob-Icon"><p> Social</p>
						</li>
						<li> <img src="<?php echo get_template_directory_uri();?>/images/svg/our-approach-desktop/health-des.svg" alt="Health-mob-Icon"><p>Health</p>
						</li>
						<li> <img src="<?php echo get_template_directory_uri();?>/images/svg/our-approach-desktop/well-being-des.svg" alt="Well-being-Icon"><p>Well-being</p>
						</li>
					</ul>
				</div>
			</section>
			<section class ="swirl-and-text">
				<div class = "mobile-swirl-wrapper">
					<img class ="mobile-swirl" src="<?php echo get_template_directory_uri();?>/images/svg/koru-swirl.svg" alt="swirly-image">
					<div class = "swirl-text">
						<p> Self-Sustainability</p>
					</div>
				</div>
				<ul class = "mobile-approach-table">
					<li> <img src="<?php echo get_template_directory_uri();?>/images/svg/our-approach-icons/hand-heart.svg" alt="Hand-Heart-Icon"><p><span class = "table-numbers">01.</span> Support</p>
					</li>
					<li> <img src="<?php echo get_template_directory_uri();?>/images/svg/our-approach-icons/tractor.svg" alt="Tractor-Icon"><p><span class = "table-numbers">02.</span> Economic</p>
					</li>
					<li> <img src="<?php echo get_template_directory_uri();?>/images/svg/our-approach-icons/cap-mob.svg" alt="Cap-mob-Icon"><p><span class = "table-numbers">03.</span> Education</p>
					</li>
					<li> <img src="<?php echo get_template_directory_uri();?>/images/svg/our-approach-icons/infrastructure.svg" alt="Infrastructure-Icon"><p><span class = "table-numbers">04.</span> Infrastructure</p>
					</li>
					<li> <img src="<?php echo get_template_directory_uri();?>/images/svg/our-approach-icons/social-mob.svg" alt="Social-mob-Icon"><p><span class = "table-numbers">05.</span> Social</p>
					</li>
					<li> <img src="<?php echo get_template_directory_uri();?>/images/svg/our-approach-icons/health-mob.svg" alt="Health-mob-Icon"><p><span class = "table-numbers">06.</span> Health</p>
					</li>
					<li> <img src="<?php echo get_template_directory_uri();?>/images/svg/our-approach-icons/well-being.svg" alt="Well-being-Icon"><p><span class = "table-numbers">07.</span> Well-being</p>
					</li>
				</ul>
			</section>
			<div>
				<p><?php echo wp_kses(CFS()->get('below_self_sustainability'), $allowed_html); ?></p>
			<div class = "quote-background">
				<p><?php echo wp_kses(CFS()->get('approach_quote'), $allowed_html); ?></p>
			</div>                                 
				<p><?php echo wp_kses(CFS()->get('below_quote'), $allowed_html); ?></p>
			<div class="last-picture-mobile">
				<img src="<?php echo esc_html(CFS()->get('last_picture'));?>" alt="last picture">
			</div>
			<div class="last-picture-desktop">
				<img src="<?php echo esc_html(CFS()->get('last_picture_desktop'));?>" alt="last-picture-desktop">
			</div>                            
			<p><?php echo wp_kses(CFS()->get('below_last_picture_text'), $allowed_html); ?></p>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
