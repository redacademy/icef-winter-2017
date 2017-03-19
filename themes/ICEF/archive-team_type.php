<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main team-type-archive" role="main">
			
			<div class='team-flex'>
				<?php while ( have_posts() ) : the_post(); ?>

				<div class='team-member'>

					<?php
					$job = CFS()->get( 'job' );
					$country = get_the_category();

					if($job == 'President'){?>
						<img src='<?php echo get_template_directory_uri();?>/images/svg/deco-president.svg' class='job-border' />
					<?php } else if($job == 'Executive Director'){ ?>
						<img src='<?php echo get_template_directory_uri();?>/images/svg/deco-exec-director.svg' class='job-border' />
					<?php } else if($country == 'Uganda'){ ?>
						<img src='<?php echo get_template_directory_uri();?>/images/svg/deco-uganda.svg' class='job-border' />
					<?php } else { ?>
						<img src='<?php echo get_template_directory_uri();?>/images/svg/deco-director.svg' class='job-border' />
					<?php } ?>
					
					<!--//-->
					<div class='profile-pic'>
						<img  src='<?php echo CFS()->get( 'profile_picture' ); ?>'  />
					</div>
					<p class='name' ><?php echo CFS()->get( 'name' ); ?></p>
					<p class='job' ><?php echo $job; ?></p>
				</div>

				<?php endwhile; // End of the loop. ?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
