<div id="client-logo-slider" class="flexslider">
	<ul class="slides">
	<?php
	$args = array(
			'post_type' => 'clients',
		);
	$the_query = new WP_Query( $args ) ?>

	<?php if ( have_posts() ) :

		while ( $the_query->have_posts() ) : $the_query->the_post() ?>

			<li>
				<div class="client-logo grid-25">
					<img src="<?php the_field( 'client_logo_1' ) ?>"/>
				</div>
				<div class="client-logo grid-25">
					<img src="<?php the_field( 'client_logo_2' ) ?>"/>
				</div>
				<div class="client-logo grid-25">
					<img src="<?php the_field( 'client_logo_3' ) ?>"/>
				</div>
				<div class="client-logo grid-25">
					<img src="<?php the_field( 'client_logo_4' ) ?>"/>
				</div>
			</li>

	<?php endwhile; endif;

	wp_reset_postdata() ?>
	</ul>
</div>