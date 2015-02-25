<section id="cpg_project_widget" class="grid-container">

	<?php
	if ( is_active_sidebar( 'cpg_project_widget' ) ) {
		dynamic_sidebar( 'cpg_project_widget' );
	} else {
		echo 'Insert custom Project Widget and enter a description and image location.';
	}
	?>

</section>