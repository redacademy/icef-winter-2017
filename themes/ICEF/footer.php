<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<div class = "footer-wrapper">
					<div class = "canada-image">
						<img src="<?php echo get_template_directory_uri();?>/images/svg/canada-footer.svg" alt="Image of Canada">Canada</div>
					<div class ="canada-info">
						Email: info@icefcanada.org 
						Phone: +778-899-9448
						Address: 5730 Sherwood Blvd
								Delta, BC, V4L2C6
					</div>
					<div class = "uganda-image">
						<img src="<?php echo get_template_directory_uri();?>/images/svg/uganda-footer.svg" alt="Image of Uganda">Uganda</div>
					<div class = "uganda-info">
						Phone: +256 0701 589 765
						Address:Tekera Resource Centre 
						P.O. Box 960
						Masaka, Uganda
					</div>
					</div> <!-- .footer-wrapper -->
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
