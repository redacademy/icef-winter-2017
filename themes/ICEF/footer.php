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
						<div class = "canada-image">
							<img src="<?php echo get_template_directory_uri();?>/images/svg/canada-footer.svg" alt="Image of Canada"><span class = "footer-text">Canada</span>
						</div>							
						<div class ="canada-info">
							<p><span class = "footer-text">Email:</span> info@icefcanada.org</p>
							<p><span class = "footer-text">Phone:</span> +778-899-9448</p>
							<p><span class = "footer-text">Address:</span> 5730 Sherwood Blvd</p>
							<p>Delta, BC, V4L2C6</p>
						</div> <!-- .canada-info -->
						<div class = "uganda-image">
							<img src="<?php echo get_template_directory_uri();?>/images/svg/uganda-footer.svg" alt="Image of Uganda"><span class = "footer-text">Uganda</span>
						</div>
						<div class = "uganda-info">
							<p><span class = "footer-text">Phone:</span> +256 0701 589 765</p>
								<span class = "footer-text">Address:</span> <span class = "address">Tekera Resource Centre
								<p>P.O. Box 960</p>
								<p>Masaka, Uganda</p>
							</span>
						</div> <!-- .uganda-info" -->
					</div> <!-- .footer-wrapper -->
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
