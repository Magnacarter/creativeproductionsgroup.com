<section id="cpg_homepage_widget" class="grid-container">

	<?php
	if ( is_active_sidebar( 'cpg_homepage_widget' ) ) {
		dynamic_sidebar( 'cpg_homepage_widget' );
	} else {
		echo 'Insert staff widgets.';
	}
	?>

</section>