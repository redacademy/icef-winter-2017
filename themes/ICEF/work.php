<?php
/**
 * Template Name: Our Work Page
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
				<div class = "openMap">
					<p>open map</p>
					<img src="<?php echo get_template_directory_uri();?>/images/svg/arrow-icon.svg" 	alt="crafting-icon">
				</div>
				<div class ="categoryContainer">
					<div class="yellowBackgroundCategory">
						<div class ="categoryNumber">
							<?php echo CFS()->get('project_number');?>
							<p> hellooo</p>
						</div>
						<div class="categoryName">
							<?php echo CFS()->get('project_name');?>
						</div>	
					</div>
					<div class ="categoryPicture">
						<img src="<?php echo CFS()->get('project_image');?>" alt="Project 1 Image">
					</div>
				</div>
			</section>
			<section class ="categoryQuotes">
				<div class = "quoteLeft">
					<p>01</p>
					<img src="<?php echo get_template_directory_uri();?>/images/svg/arrow-right.svg" 	alt="right-arrow">
				</div>
				

			</section>
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
