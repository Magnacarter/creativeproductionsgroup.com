<?php
/**
 * CPG Hooks
 */

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

