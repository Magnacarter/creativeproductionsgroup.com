<?php
/**
 * Brands
 *
 *
 * Loop through the CPT 'portfolio' and retrieve logos
 */
$args = array(
	'post_type' => 'portfolio',
);

$logos = new WP_Query( $args )

?>
<div class="brand_list grid-container">

	<?php if ( $logos->have_posts() ) : ?>

		<?php while ( $logos->have_posts() ) : $logos->the_post() ?>

			<div class="grid-25 mobile-grid-50 logo"><img src="<?php the_field( 'logo' ) ?>"/></div>

		<?php endwhile;

	endif;

	wp_reset_postdata() ?>

</div>