<?php
/**
 * Template Name: Our Approach Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<!--<?php the_content();?>-->
			<img src="<?php echo CFS()->get('approach_hero');?>" alt=:"top image">
			<!--<img src="<?php echo get_template_directory_uri();?>/images/jpegs/our-approach-title2x.jpg" alt="top image">-->
			<?php echo CFS()->get('below_hero_text');?>
			<img class ="mobile-swirl" src="<?php echo get_template_directory_uri();?>/images/svg/mobile-swirl.svg" alt="swirly image">
			<!--<img src="<?php echo get_template_directory_uri();?>/images/svg/our-approach-mobile.svg" alt="swirly image">-->
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
			<!--<img src="<?php echo get_template_directory_uri();?>/images/svg/Mobile_ApproachTable4.svg" alt ="table image">-->
			<?php echo CFS()->get('below_self_sustainability');?>
			<?php echo CFS()->get('below_quote');?>
			<!--<?php echo CFS()->get('last_picture');?>-->
			<img src="<?php echo CFS()->get('last_picture');?>" alt=:"last picture">
			<!--<img src="<?php echo get_template_directory_uri();?>/images/jpegs/our-approach-bottom-mobile2x.jpg" alt="bottom image">-->
			<?php echo CFS()->get('below_last_picture_text');?> 

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
