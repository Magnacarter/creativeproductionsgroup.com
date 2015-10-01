<?php
/**
 * Template Name: Single project page
 */
get_header() ?>

	<section id="single-project-content">

		<header>
			<div class="tint">
				<?php the_post_thumbnail() ?>
			</div>

			<?php while ( have_posts() ) : the_post() ?>
				<div class="single-project-title">
					<h2><?php the_title() ?></h2>
					<h3><?php the_excerpt() ?></h3>
					<button>Learn More</button>
				</div>
		</header>

		<div class="single-project-content">
			
			<?php the_content() ?>

		</div>

		<?php endwhile ?>

	</section>

<?php get_footer() ?>