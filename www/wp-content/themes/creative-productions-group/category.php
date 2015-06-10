<?php
get_header() ?>

<section id="projects-page">

	<div class="project-categories grid-100">
		<ul>
			<?php wp_list_categories( 'title_li=' ) ?>
		</ul>
	</div>

		<?php

		$category = get_category(get_query_var('cat') );

		$args = array(
			'post_type' => 'projects',
			'tax_query' => array(
				array(
					'taxonomy' => 'category',
					'field'    => 'slug',
					'terms'    => $category,
				),
			),
		);

		$projects = new WP_Query( $args ) ?>

		<section id="single_projects" class="grid-container">

		<?php if ( $projects->have_posts() ) : ?>

		<?php $i = 0 ?>

			<?php while ( $projects->have_posts() ) : $projects->the_post(); $i++ ?>

				<div class="single_work grid-33 tablet-grid-50 mobile-grid-100">
					<a href="<?php echo esc_url( get_permalink() ) ?>"><img src="<?php the_field( 'project_image' ) ?>" alt="<?php the_field( 'project_description' ) ?>"/></a>
				</div>

			<?php if ( 0 === $i % 3 || $i === $projects->found_posts ) : ?>
				<div class="clear"></div>
			<?php endif; ?>

			<?php endwhile; endif;

		wp_reset_postdata() ?>

		</section>

</section>

<?php get_footer() ?>