<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<div class="common-full-width-fixed-content-row lp-container" style="text-align:center">
					<div class="error-common-outer">
				
						<h1 class="not_found page_margin_top_section">404</h1>
						<h2 class="not_found-sub page_margin_top_section err4">Error 404</h2>
						<p class="error-p" style="text-align: center;">Looks like the page you are looking for does not exists.</p>

						<a href="<?php echo site_url(); ?>" class="lnk-lightblue">GO TO HOME</a>
					</div>
				</div>
			</section><!-- .error-404 -->

		</main><!-- .site-main -->

		<?php //get_sidebar( 'content-bottom' ); ?>

	</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
