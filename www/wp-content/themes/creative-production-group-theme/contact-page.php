<?php
/**
 * Template Name: Contact Page
 */
get_header() ?>

	<section id="single-project-content">

		<header>
			<div class="tint">
				<?php the_post_thumbnail() ?>
			</div>

			<?php while ( have_posts() ) : the_post() ?>
				<div class="single-project-title">
					<h2>Consutlation Form</h2>
					<h3>Tell us about your project!</h3>
					<button>Get Started</button>
				</div>
		</header>

		<div class="single-project-content">
			
			<?php the_content() ?>

		</div>

		<?php endwhile ?>

	</section>

<?php get_footer() ?>