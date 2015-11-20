<?php
/**
 * Template Name: Contact Page
 */
get_header() ?>
	<section id="contact-content-wrap">

		<header>
			<?php while ( have_posts() ) : the_post() ?>
				<div class="contact-title one-half first">
					<h2>Consutlation Form</h2>
					<h3>Tell us about your project!</h3>
					<button>Get Started</button>
				</div>

			<div class="contact-header-img one-half">
				<?php the_post_thumbnail() ?>
			</div>

			<div class="clearfix"></div>
		</header>

		<div class="contact-content">
			
			<?php the_content() ?>

		</div>

		<?php endwhile ?>

	</section>


<?php get_footer() ?>