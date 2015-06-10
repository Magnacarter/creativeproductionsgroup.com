<?php
/*
 * Template Name: Archives
 */
get_header() ?>
archives.php
<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>

	<h1><?php the_title() ?></h1>
	<?php the_content() ?>

<?php endwhile; endif ?>

<?php get_footer() ?>

<?php get_footer() ?>