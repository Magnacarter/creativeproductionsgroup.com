<?php
/**
 * RJS Portfolio Page Hooks
 */

/**
 * Header for portfolio page
 *
 * @return void
 *
 * @add_action genesis_header
 */
function rjs_portfolio_page_header() {
	if ( is_page( 'portfolio' ) ) {
	?>
	<div class="portfolio-header">
		<h1><?php echo esc_html( get_the_title() ) ?></h1>
	</div>
	<?php
	}
}
add_action( 'genesis_header', 'rjs_portfolio_page_header', 2 );

/**
 * Display portfolio page background image
 *
 * @return void
 *
 * @action wp_head
 */
function rjs_portfolio_head() {
	if ( is_page( 'portfolio' ) ) {
	?>
	<style type="text/css">
	.portfolio-header {
		background-image: url(<?php echo esc_url( get_field( 'portfolio_background_image' ) ) ?> );
	}
	</style>
	<?php
	}
}
add_action( 'wp_head', 'rjs_portfolio_head' );

/**
 * Projects
 *
 * @return void
 *
 * @add_action genesis_before_content
 */
function rjs_portfolio() {
	if ( is_page( 'portfolio' ) ) {
		get_template_part( 'projects' );
	}
}
add_action( 'genesis_before_content', 'rjs_portfolio' );