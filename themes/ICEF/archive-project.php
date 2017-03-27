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
					<img class='yellow-pin trc' src="<?php echo get_template_directory_uri();?>/images/svg/map/right-unselected.svg" alt="crafting-icon">
					<img class='yellow-pin medical' src="<?php echo get_template_directory_uri();?>/images/svg/map/right-unselected.svg" alt="crafting-icon">
					<img class='yellow-pin primary' src="<?php echo get_template_directory_uri();?>/images/svg/map/right-unselected.svg" alt="crafting-icon">
					<img class='yellow-pin farm' src="<?php echo get_template_directory_uri();?>/images/svg/map/right-unselected.svg" alt="crafting-icon">
					<img class='yellow-pin sustainability' src="<?php echo get_template_directory_uri();?>/images/svg/map/right-unselected.svg" alt="crafting-icon">
					<img class='yellow-pin empowerment' src="<?php echo get_template_directory_uri();?>/images/svg/map/right-unselected.svg" alt="crafting-icon">
					<img class='yellow-pin communitywork' src="<?php echo get_template_directory_uri();?>/images/svg/map/right-unselected.svg" alt="crafting-icon">
					<img class='yellow-pin vocational' src="<?php echo get_template_directory_uri();?>/images/svg/map/right-unselected.svg" alt="crafting-icon">
					<img class='yellow-pin water' src="<?php echo get_template_directory_uri();?>/images/svg/map/right-unselected.svg" alt="crafting-icon">
					<span class='our-work-wrapper'>
						<img class='purple-pin trc' src="<?php echo get_template_directory_uri();?>/images/svg/map/one-selected.svg" alt="crafting-icon">
						<img class='purple-pin primary' src="<?php echo get_template_directory_uri();?>/images/svg/map/two-selected.svg" alt="crafting-icon">
						<img class='purple-pin farm' src="<?php echo get_template_directory_uri();?>/images/svg/map/three-selected.svg" alt="crafting-icon">
						<img class='purple-pin sustainability' src="<?php echo get_template_directory_uri();?>/images/svg/map/four-selected.svg" alt="crafting-icon">
						<img class='purple-pin medical' src="<?php echo get_template_directory_uri();?>/images/svg/map/five-selected.svg" alt="crafting-icon">
						<img class='purple-pin empowerment' src="<?php echo get_template_directory_uri();?>/images/svg/map/six-selected.svg" alt="crafting-icon">
						<img class='purple-pin communitywork' src="<?php echo get_template_directory_uri();?>/images/svg/map/seven-selected.svg" alt="crafting-icon">
						<img class='purple-pin vocational' src="<?php echo get_template_directory_uri();?>/images/svg/map/eight-selected.svg" alt="crafting-icon">
						<img class='purple-pin water' src="<?php echo get_template_directory_uri();?>/images/svg/map/nine-selected.svg" alt="crafting-icon">
					</span>
				</div>
				<div class = "openMap">
					<p>open map</p>
					<img class='map-arrow' src="<?php echo get_template_directory_uri();?>/images/svg/arrow-icon.svg" alt="crafting-icon">
				</div>
				<!--<div class="yellowBackgroundCategory">
					<div class='yellow-number' ></div>
					<div class='yellow-pic' ></div>
				</div>-->
			</section>
			<span class='our-work-wrapper'>
	
				<?php while ( have_posts() ) : the_post(); 
					$class       = CFS()->get( 'project_class_creator' );
					$number      = CFS()->get( 'project_number' );
					$projectName = CFS()->get( 'project_name' );
					$image       = CFS()->get( 'project_image' );
					$fact1       = CFS()->get( 'project_fact_1' );
					$fact2       = CFS()->get( 'project_fact_2' );
					$fact3       = CFS()->get( 'project_fact_3' );
					$quote       = CFS()->get( 'project_quote' );
					$whyIntro    = CFS()->get( 'project_why_intro' );
					$why         = CFS()->get( 'project_why' );
					$whyImage    = CFS()->get( 'project_why_image' );
					$storyIntro  = CFS()->get( 'project_story_intro' );
					$story       = CFS()->get( 'project_story' );
					$storyImage  = CFS()->get( 'project_story_image' );
					$impactIntro = CFS()->get( 'project_impact_intro' );
					$impact      = CFS()->get( 'project_impact' );
					$impactImage = CFS()->get( 'project_impact_image' );
					?>
					<section class='our-work-content <?php echo $class; ?>'>
						<div class="section-category">
							<div class="yellow-background-category">
								<div class='yellow-number'>
									<?php echo $number ?>
								</div>
								<div class="yellow-description">
									<?php echo $projectName ?>
								</div>
							</div>
							<div class="section-picture">
								<div class="categoryImage">
									<img src="<?php echo $image ?>">
								</div>
							</div>
						</div>
						<div class = "fact">
							<div class = "fact-number">
								<div class="number">
								<p>01</p>
								</div>
								<div class="mobile-arrow">
									<img src="<?php echo get_template_directory_uri();?>/images/svg/arrow-icon.svg" 	alt="right-arrow">
								</div>
								<div class="desktop-arrow">
									<img src="<?php echo get_template_directory_uri();?>/images/svg/arrow-right.svg" 	alt="right-arrow">
								</div>
							</div>
							<div class="fact-text">
								<?php echo $fact1;?>
							</div>
						</div>
						<div class="fact">
							<div class = "fact-number">
								<p>02</p>
								<div class="mobile-arrow">
									<img src="<?php echo get_template_directory_uri();?>/images/svg/arrow-icon.svg" 	alt="right-arrow">
								</div>
								<div class="desktop-arrow">
									<img src="<?php echo get_template_directory_uri();?>/images/svg/arrow-right.svg" 	alt="right-arrow">
								</div>
							</div>
							<div class="fact-text">
								<?php echo $fact2;?>
							</div>
						</div>
						<div class="fact">
							<div class="fact-number">
								<p>03</p>
								<div class="mobile-arrow">
									<img src="<?php echo get_template_directory_uri();?>/images/svg/arrow-icon.svg" 	alt="right-arrow">
								</div>
								<div class="desktop-arrow">
									<img src="<?php echo get_template_directory_uri();?>/images/svg/arrow-right.svg" 	alt="right-arrow">
								</div>
							</div>
							<div class="fact-text">
								<?php echo $fact3;?>
							</div>
						</div>
						<div class="quote-background">
							<div class='quote-block'>
								<?php echo $quote;?>
							</div>
						</div>
						<div class='work-flex'>
							<div class='why-flex'>
								<div class='why-text'>
									<h2>Why</h2>
									<?php echo $whyIntro ?>
									<button class="why-read"> Read </button>
								</div>
								<div class='why-pic'>
										<img src='<?php echo $whyImage ?>'>
								</div>
							</div> 
							<div class='read-why'>
								<div class="read-more-why">
									<?php echo $why ?>
								</div>
								<div class="close-why-button">
									<img src="<?php echo get_template_directory_uri();?>/images/svg/yellow-cross.svg" 	alt="yellow cross">
									<p> Close</p>
								</div>
							</div>
							<div class='story-flex'>
								<div class='story-text'>
									<h2>Story</h2>
									<?php echo $storyIntro ?>
									<button class="story-read"> Read </button>
								</div>
								<div class='story-pic'>
									<img src='<?php echo $storyImage ?>'>
								</div>
							</div>
							<div class='read-story'>
								<div class="read-more-story">
									<?php echo $story ?>
								</div>
								<div class="close-story-button">
									<img src="<?php echo get_template_directory_uri();?>/images/svg/yellow-cross.svg" 	alt="yellow cross">
								</div>
							</div>
							<div class='impact-flex'>
								<div class='impact-text'>
									<h2>Impact</h2>
									<?php echo $impactIntro ?>
									<button class="impact-read"> Read </button>		
								</div>
								<div class='impact-pic'>
									<img src='<?php echo $impactImage?>'>
								</div>
							</div>
							<div class='read-impact'>
								<div class="read-more-impact">
									<?php echo $impact ?>
								</div>
								<div class="close-impact-button">
									<img src="<?php echo get_template_directory_uri();?>/images/svg/yellow-cross.svg" 	alt="yellow cross">
								</div>
							</div>
						</div>
					</section>
			<?php endwhile; // End of the loop. ?>
			<!--</section>-->
			</span>


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
										<p>Farm</br>& Agriculture</p>
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
