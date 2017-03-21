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
				<div class="primary-wrapper">
					<h2><?php echo CFS()->get('primary_school_title');?></h2>
					<p class="donate-trc-desc"><?php echo CFS()->get('primary_school_description');?></p>
					<img src="<?php echo CFS()->get('primary_school_image');?>">
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
