<section id="cpg_sidebar" class="grid-container">

	<?php
	if ( is_active_sidebar( 'cpg_sidebar' ) ) {
		dynamic_sidebar( 'cpg_sidebar' );
	} else {
		echo 'Insert Blog Widgets.';
	}
	?>

</section>