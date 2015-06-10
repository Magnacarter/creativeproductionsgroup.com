<?php
/**
 * Template Name: Blog
 */
get_header() ?>

<section id="blog-page" class="grid-container">

	<div class="blog-content grid-65">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>

		<div class="blog-post grid-100">
			<h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
			<HR WIDTH="100%" COLOR="#ee6930" SIZE="1">
			<p><?php the_excerpt() ?></p>
			<div class="read-more-button">
				<a href="<?php the_permalink() ?>"><span>Read More</span></a>
			</div>
		</div>

	<?php endwhile; endif ?>

	</div>

	<div class="sidebar grid-30">
		<?php get_sidebar( 'homepage' ) ?>
	</div>

</section>

<?php get_footer() ?>