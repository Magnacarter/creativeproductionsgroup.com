<?php
/**
 * Template Name: About Page
 */

get_header() ?>

<div class="about grid-container">

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post() ?>

			<h2><?php the_title() ?></h2>

			<section class="grid-50">

				<p><?php the_field( 'description' ) ?></p>

			</section>

		<?php endwhile; ?>

	<?php endif; ?>

</div>

<?php get_footer() ?>