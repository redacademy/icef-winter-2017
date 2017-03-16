<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info icef-footer">
					<div class = "footer-wrapper">
							<div class ="canada-wrapper">
							<div class = "canada-image">
								<img src="<?php echo get_template_directory_uri();?>/images/svg/canada-footer.svg" alt="Image of Canada"><span class = "footer-text">Canada</span>
							</div>												
							<div class ="canada-info">
								<p><i class="fa fa-envelope" aria-hidden="true"></i>info@icefcanada.org</p>
								<p><i class="fa fa-phone" aria-hidden="true"></i>+778-899-9448</p>
								<p><i class="fa fa-map-marker" aria-hidden="true"></i><span class="address-line">5730 Sherwood Blvd</p>
								<p><span class="address-line2">Delta, BC, V4L2C6</span></p>
							</div> <!-- .canada-info -->
						</div>
						<div class ="uganda-wrapper">
							<div class = "uganda-image">
								<img src="<?php echo get_template_directory_uri();?>/images/svg/uganda-footer.svg" alt="Image of Uganda"><span class = "footer-text">Uganda</span>
							</div>
							<div class = "uganda-info">
								<p><i class="fa fa-phone" aria-hidden="true"></i>+256 0701 589 765</p>
									<p><i class="fa fa-map-marker" aria-hidden="true"></i><span class="address-line">Tekera Resource Centre</p>
									<p><span class="address-line2">P.O. Box 960</span></p>
									<p><span class="address-line2">Masaka, Uganda</span></p>
								</span>
							</div> <!-- .uganda-info" -->
						</div>
					</div> <!-- .footer-wrapper -->
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
