<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class ="workHero">
				<div class="yellowBackground">
					<h1>Explore Tekera Resource Centre</h1>
				</div>
				<div class='map'>
					<img src='<?php echo get_template_directory_uri();?>/images/jpegs/our-work2x.jpg' alt='map'>
				</div>
				<div class = "openMap">
					<p>open map</p>
					<img class='map-arrow' src="<?php echo get_template_directory_uri();?>/images/svg/arrow-icon.svg" alt="crafting-icon">
				</div>

				<?php while ( have_posts() ) : the_post(); ?>
					<section class='our-work-content'>
						<div class="yellowBackgroundCategory">
							<div class='yellow-number' ></div>
							<div class='yellow-pic' ></div>
						</div>

						<ol>
							<li></li>
							<li></li>
							<li></li>
						</ol>

						<div class='quote-block'></div>

						<div class='work-flex'>
							<div class='why-flex'>
								<div class='why-text'></div>
								<div class='why-pic'></div>
							</div>
					
							<div class='story-flex'>
								<div class='story-pic'></div>
								<div class='story-text'></div>
							</div>

							<div class='impact-flex'>
								<div class='impact-text'></div>
								<div class='impact-pic'></div>
							</div>
						</div>
				</section>
			<?php endwhile; // End of the loop. ?>


			<section class="purpleCircles">
				<div class = "purpleCircleTitle">
					<h2>Explore More of The TRC's Programs:</h2>
				</div>
				<ul class="purpleCircleGrid">
					<li>
						<div class="ch-item">				
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front">
										<div class="handMade">
											<p>TRC</p>
										</div>
									</div>
									<div class="ch-info-back">
										<p>Tekera <br>Resource<br> Centre</p>
									</div>	
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item">				
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front">
										<img src="<?php echo get_template_directory_uri();?>/images/svg/our-work-mobile/apple.svg" 	alt="apple-icon">
									</div>
									<div class="ch-info-back">
										<p>Primary<br> School</p>
									</div>	
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item">				
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front">
										<img src="<?php echo get_template_directory_uri();?>/images/svg/our-work-mobile/farm.svg" 	alt="farm-icon">
									</div>
									<div class="ch-info-back">
										<p>Community Farm </br>& Cooperative Agriculture</p>
									</div>	
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item">				
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front">
										<img src="<?php echo get_template_directory_uri();?>/images/svg/our-work-mobile/adult-education.svg" 	alt="crafting-icon">
									</div>
									<div class="ch-info-back">
										<p>Adult<br>Education</p>
									</div>	
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item">				
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front">
										<img src="<?php echo get_template_directory_uri();?>/images/svg/our-work-mobile/medical.svg" 	alt="crafting-icon">
									</div>
									<div class="ch-info-back">
										<p>Medical<br>Clinic</p>
									</div>	
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item">				
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front">
										<img src="<?php echo get_template_directory_uri();?>/images/svg/our-work-mobile/crafting.svg" 	alt="crafting-icon">
									</div>
									<div class="ch-info-back">
										<p>Women's<br>Craft Club</p>
									</div>	
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item">				
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front">
										<img src="<?php echo get_template_directory_uri();?>/images/svg/our-work-mobile/people.svg" alt="people-icon">
									</div>
									<div class="ch-info-back">
										<p>Community<br> Work Program</p>
									</div>	
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item">				
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front">
										<img src="<?php echo get_template_directory_uri();?>/images/svg/our-work-mobile/rectangle.svg" alt="rectangle-icon">
									</div>
									<div class="ch-info-back">
										<p>Vocational<br> School</p>
									</div>	
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item">				
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front">
										<img src="<?php echo get_template_directory_uri();?>/images/svg/our-work-mobile/water.svg" alt="water-icon">
									</div>
									<div class="ch-info-back">
										<p>Portable<br>Drinking Water</p>
									</div>	
								</div>
							</div>
						</div>
					</li>
				</ul>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
