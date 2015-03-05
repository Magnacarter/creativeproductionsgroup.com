<?php
/**
 * Template part for staff
 */

$args = array(
	'post_type' => 'workers',
);

$workers = new WP_Query( $args );

if ( $workers->have_posts() ) : ?>

	<?php while ( $workers->have_posts() ) : $workers->the_post() ?>

<section id="staff-boxes">
		<div class="single-worker grid-20 tablet-grid-50 mobile-grid-50">
			<img src="<?php the_field( 'staff_photo' ) ?>"/>

			<div class="worker-hover grid-20 tablet-grid-50 mobile-grid-50">
				<h2><?php the_field( 'worker_name' ) ?></h2>
				<h3><?php the_field( 'worker_position' ) ?></h3>
				<a href="<?php the_field( 'linkedin_url' ) ?>"><img src="<?php the_field( 'li_icon' ) ?>"/></a>
			</div>
		</div>
	<?php endwhile; endif;

	wp_reset_postdata() ?>
</section>