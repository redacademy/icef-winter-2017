<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<h1 class='our-team'>Our Team</h1>
			<div class='team-type-archive'>
				<div class=' canada-team'>
					<h2>Canada</h2>

					<?php while ( have_posts() ) : the_post(); 

						$job = CFS()->get( 'job' );
						$name = CFS()->get( 'name' );
						$name = str_replace(' ', '', $name);
						$terms = get_the_category();

						foreach ($terms as $term) :              
							$country = $term->slug; 
						endforeach; 

						if($country == 'canada'){ ?>

							<div class='team-member <?php echo $name; ?>'>

								<?php if($job == 'President'){?>
									<img src='<?php echo get_template_directory_uri();?>/images/svg/deco-president.svg' class='job-border' />
								<?php } else if($job == 'Executive Director'){ ?>
									<img src='<?php echo get_template_directory_uri();?>/images/svg/deco-exec-director.svg' class='job-border' />
								<?php } else { ?>
									<img src='<?php echo get_template_directory_uri();?>/images/svg/deco-director.svg' class='job-border' />
								<?php } ?>
								<div class='profile-pic'>
									<img  src='<?php echo CFS()->get( 'profile_picture' ); ?>'  />
								</div>
								<p class='name' ><?php echo CFS()->get( 'name' ); ?></p>
								<p class='job' ><?php echo $job; ?></p>
							</div>

							<section class='<?php echo $name; ?> popup' >
								<div class='team-member'>
									<?php if($job == 'President'){?>
										<img src='<?php echo get_template_directory_uri();?>/images/svg/deco-president.svg' class='job-border' />
									<?php } else if($job == 'Executive Director'){ ?>
										<img src='<?php echo get_template_directory_uri();?>/images/svg/deco-exec-director.svg' class='job-border' />
									<?php } else { ?>
										<img src='<?php echo get_template_directory_uri();?>/images/svg/deco-director.svg' class='job-border' />
									<?php } ?>
									<div class='profile-pic'>
										<img  src='<?php echo CFS()->get( 'profile_picture' ); ?>'  />
									</div>
									<p class='name' ><?php echo CFS()->get( 'name' ); ?></p>
									<p class='job' ><?php echo $job; ?></p>
								</div>
								<img src='<?php echo get_template_directory_uri();?>/images/svg/yellow-cross.svg' class='x-close'>
								<p class='description'><?php echo CFS()->get('team_member_description') ?></p>
							</section>
						<?php }

						endwhile; // End of the loop. ?>
				</div>

				<div class='uganda-team'>
					<h2>Uganda</h2>

					<?php while ( have_posts() ) : the_post(); 

						$job = esc_html(CFS()->get( 'job' ));
						$name = str_replace(' ', '', $name);
						$terms = get_the_category();
						
						foreach ($terms as $term) :              
							$country = $term->slug; 
						endforeach; 

						if($country == 'uganda'){ ?>

							<div class='team-member <?php echo $name; ?>'>
								<img src='<?php echo get_template_directory_uri();?>/images/svg/deco-uganda.svg' class='job-border' />
								<div class='profile-pic'>
									<img  src='<?php echo esc_html(CFS()->get( 'profile_picture' )); ?>'  />
								</div>
								<p class='name' ><?php echo esc_html(CFS()->get( 'name' )); ?></p>
								<p class='job' ><?php echo $job; ?></p>
							</div>

							<section class='<?php echo $name; ?> popup' >
								<div class='team-member'>
									<img src='<?php echo get_template_directory_uri();?>/images/svg/deco-uganda.svg' class='job-border' />
									<div class='profile-pic'>
										<img  src='<?php echo esc_html(CFS()->get( 'profile_picture' )); ?>'  />
									</div>
									<p class='name' ><?php echo esc_html(CFS()->get( 'name' )); ?></p>
									<p class='job' ><?php echo $job; ?></p>
								</div>
								<img src='<?php echo get_template_directory_uri();?>/images/svg/yellow-cross.svg' class='x-close'>
								<p class='description'><?php echo esc_html(CFS()->get('team_member_description')) ?></p>
							</section>
						<?php } 
					
					endwhile; // End of the loop. ?>
					<div class='ugandan-staff'>
						<p><span>100%</span> of their 30 staff is Ugandan.
					</div>
				</div>
			</div>

			
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
