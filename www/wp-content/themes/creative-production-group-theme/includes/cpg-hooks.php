<?php
/**
 * CPG Hooks
 */

/**
 * Loop for other pages.
 *
 * @return void
 *
 * @action genesis
 */
function cpg_page_content_loop() {
	if( ! is_front_page() ) {
	?>
	<div class="page">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post() ?>
			<div class="page-content">
				Hello world
				<?php the_content() ?>
			</div>
		<?php endwhile; endif ?>
	</div>
	<?php
	}
}
add_action( 'genesis_before_content', 'cpg_page_content_loop' );

/**
 * Customize credits in the footer
 *
 * @filter genesis_footer_creds_text
 */
function sp_footer_creds_text() {
	echo '<div class="creds"><p>';
	echo 'Creative Productions Group Inc. &copy; ';
	echo date('Y');
	echo '</p></div>';
}
add_filter( 'genesis_footer_creds_text', 'sp_footer_creds_text' );

