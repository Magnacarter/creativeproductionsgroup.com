<?php
/**
 * Contacts Section
 *
 */
$args = array(
	'post_type' => 'contacts',
	);

$query = new WP_Query( $args ) ?>

<section id="single-contacts" class="grid-container">

<?php if ( $query->have_posts() ) :
	while ( $query->have_posts() ) : $query->the_post() ?>

			<div class="single-contact-info grid-100">
				<ul>
					<li><h2><?php the_field( 'contact_name' ) ?></h2></li>
					<li><p><?php the_field( 'contact_postion' ) ?></p></li>
				</ul>
				<h3><?php the_field( 'contact_number' ) ?></h3>
				<a href="mailto:<?php the_field( 'contact_email' ) ?>?subject=Mail from Our Site"><p><?php the_field( 'contact_email' ) ?></p>
			</div>

	<?php endwhile; endif;

wp_reset_postdata() ?>

</section>
