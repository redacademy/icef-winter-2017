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
			<img src="<?php echo get_template_directory_uri();?>/images/svg/our-approach-mobile.svg" alt="swirly image">
			<?php echo CFS()->get('below_self_sustainability');?>
			<?php echo CFS()->get('below_quote');?>
			<!--<?php echo CFS()->get('last_picture');?>-->
			<img src="<?php echo CFS()->get('last_picture');?>" alt=:"last picture">
			<!--<img src="<?php echo get_template_directory_uri();?>/images/jpegs/our-approach-bottom-mobile2x.jpg" alt="bottom image">-->
			<?php echo CFS()->get('below_last_picture_text');?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
