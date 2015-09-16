<?php
/**
 * Template Name: Archive Videos
 */
get_header() ?>
<section id="archives-page" class="grid-container">

	<div class="project-categories grid-100">
		<ul>
			<?php wp_list_categories( 'title_li=' ) ?>
		</ul>
	</div>

	<?php

	$args = array( 
		'post_type' => 'video' 
		);

	$videos = new WP_Query( $args ); 

	$i = 0;

	?>

	<section id="single_projects" class="grid-container">

	<?php if ( $videos->have_posts() ) : ?>

		<?php while ( $videos->have_posts() ) : $videos->the_post(); $i++ ?>

			<div class="archive-video <?php echo ( $i == 1 ) || ( $i == 4 ) || ( $i == 7 ) || ( $i == 10 ) ? 'one-third first' : 'one-third' ?>">
				<a href="<?php echo esc_url( get_permalink() ) ?>">
					<?php the_post_thumbnail() ?>
					<?php the_excerpt() ?>
				</a>
			</div>

		<?php endwhile; endif;

	wp_reset_postdata() ?>

	</section>

</section>

<?php get_footer() ?>