<?php
/**
 * RJS Contact Page Hooks
 */

/**
 * Header for Contact page
 *
 * @return void
 *
 * @add_action genesis_header
 */
function rjs_contact_page_header() {
	if ( is_page( 'contact' ) ) {
	?>
	<div class="portfolio-header">
		<h1><?php echo esc_html( get_the_title() ) ?></h1>
	</div>
	<?php
	}
}
add_action( 'genesis_header', 'rjs_contact_page_header', 2 );

/**
 * Display contact page background image
 *
 * @return void
 *
 * @action wp_head
 */
function rjs_contact_head() {
	if ( is_page( 'contact' ) ) {
	?>
	<style type="text/css">
	.portfolio-header {
		background-image: url(<?php echo esc_url( get_field( 'contact_background_image' ) ) ?> );
	}
	</style>
	<?php
	}
}
add_action( 'wp_head', 'rjs_contact_head' );