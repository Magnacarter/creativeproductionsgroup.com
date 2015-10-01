<?php
/**
 * CPG Hooks
 */

/**
 * Hook in video components
 *
 *
 *
 */
function cpg_video_lightbox() {
	if ( is_front_page() ) {
		?>
			<div class="x">
				<img src="https://creativeproductionsgroup.com/wp-content/uploads/2015/03/x.png" height="35" width="35"></img>
			</div>

			<div id="vimeoWrap">
				<div id="video-container">
					<?php the_field( 'watch_video' ) ?>
				</div>
			</div>
		<?php
	}
}
add_action( 'wp_head', 'cpg_video_lightbox' );

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

