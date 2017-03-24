<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					esc_html(the_archive_title( '<h1 class="page-title">', '</h1>' ));
					esc_html(the_archive_description( '<div class="taxonomy-description">', '</div>' ));
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					esc_html(get_template_part( 'template-parts/content' ));
				?>

			<?php endwhile; ?>

			<?php esc_html(the_posts_navigation()); ?>

		<?php else : ?>

			<?php esc_html(get_template_part( 'template-parts/content', 'none' )); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
