<?php
/**
 * Template Name: Archive Projects
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
		'post_type' => 'project'
		);

	$projects = new WP_Query( $args ); 

	$i = 0;

	?>

	<section id="single-projects" class="grid-container">

	<?php if ( $projects->have_posts() ) : ?>

		<?php while ( $projects->have_posts() ) : $projects->the_post(); $i++ ?>

			<div class="archive-project <?php echo ( $i == 1 ) || ( $i == 4 ) || ( $i == 7 ) || ( $i == 10 ) ? 'one-third first' : 'one-third' ?>">

				<div class="archive-project-image">
					<h4><?php the_title() ?><h4>
					<?php the_post_thumbnail() ?>

					<div class="archive-project-content">

						<a href="<?php echo esc_url( get_permalink() ) ?>">
							<?php the_excerpt() ?>
						</a>

					</div>

				</div>

			</div>

		<?php endwhile; endif;

	wp_reset_postdata() ?>

	</section>

</section>

<?php get_footer() ?>