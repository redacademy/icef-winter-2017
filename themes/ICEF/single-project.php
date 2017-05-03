<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header();

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class ="workHero">
				<div class="yellowBackground">
					<h1>Explore Tekera Resource Centre</h1>
				</div>
				<div class="map">

					<?php
					wp_reset_postdata();
					$projectNumber = 9;
					$prev = get_permalink(get_adjacent_post(false,'',true));
					$next = get_permalink(get_adjacent_post(false,'',false));

					$args = array(
							'posts_per_page' => 9,
							'post_type' => 'project');

					$project_query = new WP_Query( $args );
					if ( $project_query->have_posts() ) :
					while ( $project_query->have_posts() ) : $project_query->the_post();		global $post;
    					$post_slug=$post->post_name; ?>
						<a href="<?php get_template_directory_uri() ?><?php echo $post_slug ?>" class="<?php echo $post_slug ?> yellow-pin">
							<img src="<?php echo get_template_directory_uri();?>/images/svg/map/geotag-yellow.svg" alt="crafting-icon">
							<h2><?php echo $projectNumber ?></h2>
						</a>

					<?php
					$projectNumber--;
					endwhile;
					endif;
					wp_reset_postdata();
					?>

					<span class="our-work-wrapper">
						<img class="our-work purple-pin" src="<?php echo get_template_directory_uri();?>/images/svg/map/geotag.svg" alt="crafting-icon">
						<img class="tekera-primary-school purple-pin" src="<?php echo get_template_directory_uri();?>/images/svg/map/geotag.svg" alt="crafting-icon">
						<img class="co-operative-and-demonstration-farm purple-pin" src="<?php echo get_template_directory_uri();?>/images/svg/map/geotag.svg" alt="crafting-icon">
						<img class="sustainability-projects purple-pin" src="<?php echo get_template_directory_uri();?>/images/svg/map/geotag.svg" alt="crafting-icon">
						<img class="tekera-medical-clinic purple-pin" src="<?php echo get_template_directory_uri();?>/images/svg/map/geotag.svg" alt="crafting-icon">
						<img class="womens-socio-economic-empowerment-group purple-pin" src="<?php echo get_template_directory_uri();?>/images/svg/map/geotag.svg" alt="crafting-icon">
						<img class="community-work-program purple-pin" src="<?php echo get_template_directory_uri();?>/images/svg/map/geotag.svg" alt="crafting-icon">
						<img class="trades-school purple-pin" src="<?php echo get_template_directory_uri();?>/images/svg/map/geotag.svg" alt="crafting-icon">
						<img class="drinking-water purple-pin" src="<?php echo get_template_directory_uri();?>/images/svg/map/geotag.svg" alt="crafting-icon">
					</span>
				</div>

				<div class="openMap">
					<p>close map</p>
					<a href="<?php echo $prev; ?>" class="previous-arrow">
						<img src="<?php echo get_template_directory_uri();?>/images/svg/arrow-left.svg" alt="left-arrow" >
					</a>
					<a href="<?php echo $next; ?>" class="next-arrow">
						<img src="<?php echo get_template_directory_uri();?>/images/svg/arrow-right.svg" alt="right-arrow" >
					</a>
					<img class="map-arrow" src="<?php echo get_template_directory_uri();?>/images/svg/arrow-icon.svg" alt="crafting-icon">
				</div>
			</section>
			<span class="our-work-wrapper">

				<?php while ( have_posts() ) : the_post();
					$class       = CFS()->get( 'project_class_creator' );
					$number      = CFS()->get( 'project_number' );
					$projectName = CFS()->get( 'project_name' );
					$image       = CFS()->get( 'project_image' );
					$fact1       = CFS()->get( 'project_fact_1' );
					$fact2       = CFS()->get( 'project_fact_2' );
					$fact3       = CFS()->get( 'project_fact_3' );
					$quote       = CFS()->get( 'project_quote' );
					$author      = CFS()->get( 'project_quote_author');
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
					<section class="our-work-content <?php echo $class; ?>">
						<div class="section-category">
							<div class="yellow-background-category">
								<div class="yellow-number">
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
						<div class="fact-container">
							<div class="fact">
								<div class="fact-number">
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
									<p class="facts"><?php echo $fact1;?></p>
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
									<p class="facts"><?php echo $fact2;?></p>
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
									<p class="facts"><?php echo $fact3;?></p>
								</div>
							</div>
						</div>
						<div class="quote-background">
							<div class="top-left-quote">
								<p>&ldquo;</p>
							</div>
							<div class="quote-block">
								<p class="work-quote"><?php echo $quote;?></p>
								<p class="quote-author"> - <?php echo $author; ?> </p>
							</div>
							<div class="bottom-right-quote">
								<p>&bdquo;</p>
							</div>
						</div>
						<div class="work-flex">
							<div class="why-flex">
								<div class="why-text">
									<div class="read-intro">
										<h2>Why</h2>
										<?php echo $whyIntro ?>
									</div>
									<div class="read-button">
										<button class="why-read"> Read </button>
									</div>
								</div>
								<div class="why-pic">
										<img src="<?php echo $whyImage ?>">
								</div>
							</div>
							<div class="read-why">
								<div class="read-more-why">
									<?php echo $why ?>
								</div>
								<div class="close-why-button">
									<p> Close</p>
									<img src="<?php echo get_template_directory_uri();?>/images/svg/yellow-cross.svg" 	alt="yellow cross">
								</div>
							</div>
							<div class="story-flex">
								<div class="story-text">
									<div class="read-intro">
										<h2>Story</h2>
										<?php echo $storyIntro ?>
									</div>
									<div class="read-button">
										<button class="story-read"> Read </button>
									</div>
								</div>
								<div class="story-pic">
									<img src="<?php echo $storyImage ?>">
								</div>
							</div>
							<div class="read-story">
								<div class="read-more-story">
									<?php echo $story ?>
								</div>
								<div class="close-story-button">
									<p> Close</p>
									<img src="<?php echo get_template_directory_uri();?>/images/svg/yellow-cross.svg" 	alt="yellow cross">
								</div>
							</div>
							<div class="impact-flex">
								<div class="impact-text">
									<div class="read-intro">
										<h2>Impact</h2>
										<?php echo $impactIntro ?>
									</div>
									<div class="read-button">
										<button class="impact-read"> Read </button>
									</div>
								</div>
								<div class="impact-pic">
									<img src="<?php echo $impactImage?>">
								</div>
							</div>
							<div class="read-impact">
								<div class="read-more-impact">
									<?php echo $impact ?>
								</div>
								<div class="close-impact-button">
									<p> Close</p>
									<img src="<?php echo get_template_directory_uri();?>/images/svg/yellow-cross.svg" 	alt="yellow cross">
								</div>
							</div>
						</div>
					</section>
			<?php endwhile; // End of the loop. ?>
			<!--</section>-->
			</span>


			<section class="purple-nav-circles">
				<div class = "purple-circle-title">
					<h2>Explore More of The TRC's Programs:</h2>
				</div>
				<ul class="purple-circle-grid">
					<li>
						<div class="ch-item">
							<div class="ch-info-wrap">
								<a href='our-work'>
									<div class="ch-info">
										<div class="ch-info-front">
											<div class="trc-circle">
												<p>TRC</p>
											</div>
										</div>
										<div class="ch-info-back">
											<p>Tekera <br>Resource<br> Centre</p>
										</div>
									</div>
								</a>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item">
							<div class="ch-info-wrap">
								<a href='tekera-primary-school'>
									<div class="ch-info">
										<div class="ch-info-front">
											<img src="<?php echo get_template_directory_uri();?>/images/svg/our-work-mobile/apple.svg" 	alt="apple-icon">
										</div>
										<div class="ch-info-back">
											<p>Primary<br> School</p>
										</div>
									</div>
								</a>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item">
							<div class="ch-info-wrap">
								<a href='sustainability-projects'>
									<div class="ch-info">
										<div class="ch-info-front">
											<img src="<?php echo get_template_directory_uri();?>/images/svg/our-work-mobile/farm.svg" 	alt="farm-icon">
										</div>
										<div class="ch-info-back">
											<p>Farm &</br>Agriculture</p>
										</div>
									</div>
								</a>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item">
							<div class="ch-info-wrap">
								<a href='sustainability-projects'>
								<div class="ch-info">
									<div class="ch-info-front">
										<img src="<?php echo get_template_directory_uri();?>/images/svg/our-work-mobile/adult-education.svg" 	alt="crafting-icon">
									</div>
									<div class="ch-info-back">
										<p>Sustainability<br>Projects</p>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item">
							<div class="ch-info-wrap">
								<a href='tekera-medical-clinic'>
									<div class="ch-info">
										<div class="ch-info-front">
											<img src="<?php echo get_template_directory_uri();?>/images/svg/our-work-mobile/medical.svg" 	alt="crafting-icon">
										</div>
										<div class="ch-info-back">
											<p>Medical<br>Clinic</p>
										</div>
									</div>
								</a>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item">
							<div class="ch-info-wrap">
								<a href='womens-socio-economic-empowerment-group'>
									<div class="ch-info">
										<div class="ch-info-front">
											<img src="<?php echo get_template_directory_uri();?>/images/svg/our-work-mobile/crafting.svg" 	alt="crafting-icon">
										</div>
										<div class="ch-info-back">
											<p>Women's<br>Empowerment<br>Group</p>
										</div>
									</div>
								</a>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item">
							<div class="ch-info-wrap">
								<a href='community-work-program'>
									<div class="ch-info">
										<div class="ch-info-front">
											<img src="<?php echo get_template_directory_uri();?>/images/svg/our-work-mobile/rectangle.svg" alt="rectangle-icon">
										</div>
										<div class="ch-info-back">
											<p>Vocational<br> Trades School</p>
										</div>
									</div>
								</a>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item">
							<div class="ch-info-wrap">
								<a href='trades-school'>
									<div class="ch-info">
										<div class="ch-info-front">
											<img src="<?php echo get_template_directory_uri();?>/images/svg/our-work-mobile/people.svg" alt="people-icon">
										</div>
										<div class="ch-info-back">
											<p>Community<br>Work Program</p>
										</div>
									</div>
								</a>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item">
							<div class="ch-info-wrap">
								<a href='drinking-water'>
									<div class="ch-info">
										<div class="ch-info-front">
											<img src="<?php echo get_template_directory_uri();?>/images/svg/our-work-mobile/water.svg" alt="water-icon">
										</div>
										<div class="ch-info-back">
											<p>Drinking<br>Water</p>
										</div>
									</div>
								</a>
							</div>
						</div>
					</li>
				</ul>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
