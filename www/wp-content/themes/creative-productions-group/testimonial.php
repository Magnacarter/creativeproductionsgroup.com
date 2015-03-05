
	<ul class="slides">
	<?php
	$args = array(
			'post_type' => 'testimonial',
		);
	$the_query = new WP_Query( $args ) ?>

	<?php if ( have_posts() ) :

		while ( $the_query->have_posts() ) : $the_query->the_post() ?>

			<li>
				<div class="testimonial_image grid-25">
					<img src="<?php the_field( 'testimonial_image' ) ?>" height="175" width="175"/>
				</div>

				<div class="testimonial grid-40">
					<p><?php the_field( 'testimonial' ) ?></p>
				</div>

				<div class="testimonial_name grid-25">
					<h3><?php the_field( 'name' ) ?></h3>
					<p><?php the_field( 'company' ) ?></p>
				</div>
			</li>

	<?php endwhile; endif;

	wp_reset_postdata() ?>
	</ul>
