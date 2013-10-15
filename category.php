<?php
/**
 * The template for displaying an archive page for Categories.
 *
 * @package Quark
 * @since Quark 1.0
 */

get_header(); ?>

	<div class="site-content" role="main">

		<div id="primary">

			<?php if ( have_posts() ) : ?>

				<header class="archive-header">
					<h1 class="archive-title"><?php printf( esc_html__( 'Category Archives: %s', 'quark' ), '<span class="cat-archive">' . single_cat_title( '', false ) . '</span>' ); ?></h1>

					<?php if ( category_description() ) { // Show an optional category description ?>
						<div class="archive-meta"><?php echo category_description(); ?></div>
					<?php } ?>
				</header>

				<?php // Start the Loop ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; ?>

				<?php quark_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<?php get_template_part( 'no-results' ); // Include the template that displays a message that posts cannot be found ?>

			<?php endif; // end have_posts() check ?>

		</div> <!-- /#primary -->
		<?php get_sidebar(); ?>

	</div> <!-- /.site-content -->

<?php get_footer(); ?>
