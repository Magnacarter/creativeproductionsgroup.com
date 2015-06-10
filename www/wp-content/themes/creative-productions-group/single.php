<?php get_header() ?>

<div id="single-post" class="grid-container">

	<div class="post-content grid-65 tablet-grid-100 mobile-grid-100">

		<?php while ( have_posts() ) : the_post() ?>

			<?php get_template_part( 'loop' ) ?>

		<?php endwhile; ?>

	</div>

	<div class="post-sidebar grid-35 tablet-grid-100 mobile-grid-100">

		<?php get_sidebar( 'homepage' ) ?>

	</div>

</div>

<?php get_footer() ?>