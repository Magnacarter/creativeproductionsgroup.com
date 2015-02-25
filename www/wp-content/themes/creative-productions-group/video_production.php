<?php
/**
 * Template Name: Video Production
 */

get_header() ?>

<div class="grid-container video_production">

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post() ?>

		<h2><?php the_title() ?></h2>

			<section class="grid-100">



			</section>

		<?php endwhile; ?>

	<?php endif; ?>

</div>

<?php get_footer() ?>