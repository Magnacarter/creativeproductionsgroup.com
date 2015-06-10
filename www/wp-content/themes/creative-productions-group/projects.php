<?php
/**
 * Loop through all the CPG projects
 */
$args = array(
	'post_type' => 'projects',
	);

$projects = new WP_Query( $args ) ?>

<section id="single_projects" class="grid-container">

<?php if ( $projects->have_posts() ) : ?>

	<?php while ( $projects->have_posts() ) : $projects->the_post() ?>

		<div class="single_work grid-33 tablet-grid-50 mobile-grid-100">
			<a href="<?php echo esc_url( get_permalink() ) ?>"><img src="<?php the_field( 'project_image' ) ?>" alt="<?php the_field( 'project_description' ) ?>"/></a>
		</div>

	<?php endwhile; endif;

wp_reset_postdata() ?>


</section>