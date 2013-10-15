<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Quark
 * @since Quark 1.0
 */

get_header(); ?>

	<div class="site-content" role="main">

		<div id="primary">

			<article id="post-0" class="post error404 no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title"><i class="icon-thumbs-down icon-large"></i> <?php esc_html_e( 'Uh Oh! This is somewhat embarrassing!', 'quark' ); ?></h1>
				</header>
				<div class="entry-content">
					<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'quark' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- /.entry-content -->
			</article><!-- /#post -->

		</div> <!-- /#primary -->

	</div> <!-- /.site-content -->

<?php get_footer(); ?>
