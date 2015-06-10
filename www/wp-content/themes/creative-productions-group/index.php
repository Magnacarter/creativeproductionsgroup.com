<?php
/*
 * Index
 */
get_header() ?>

	<section id="index-page-content grid-container">

		<div class="general-content grid-100">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>

				<h1><?php the_title() ?></h1>

				<?php the_content() ?>

			<?php endwhile; endif ?>

		</div>

	</section>

<?php get_footer() ?>