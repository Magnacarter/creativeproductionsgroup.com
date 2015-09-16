<?php
/**
 * RJS About Page Hooks
 */

/**
 * Header for about page
 *
 * @return void
 *
 * @add_action genesis_header
 */
function rjs_about_page_header() {
	if ( is_page( 'about' ) ) {
	?>
	<div class="about-header">
		<h1><?php echo esc_html( get_the_title() ) ?></h1>
	</div>
	<?php
	}
}
add_action( 'genesis_header', 'rjs_about_page_header', 2 );

/**
 * Display about page background image
 *
 * @return void
 *
 * @action wp_head
 */
function rjs_about_head() {
	if ( is_page( 'about' ) ) {
	?>
	<style type="text/css">
	.about-header {
		background-image: url(<?php echo esc_url( get_field( 'about_background_image' ) ) ?> );
	}
	</style>
	<?php
	}
}
add_action( 'wp_head', 'rjs_about_head' );
