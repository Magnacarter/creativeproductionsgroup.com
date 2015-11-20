<?php
/**
 * Template Name: Contact Page
 */
get_header() ?>
	<section id="contact-content-wrap">

		<header>
			<?php while ( have_posts() ) : the_post() ?>
				<div class="contact-title one-half first">
					<h2>Consultation Form</h2>
					<h3>Tell us about your project!</h3>
					<button class="consult-btn">Get Started</button>
				</div>

			<div class="contact-header-img one-half">
				<?php the_post_thumbnail() ?>
			</div>

			<div class="clearfix"></div>
		</header>

		<div class="contact-content-title">
			<h1>Taking the first step of getting to know your goals and vision allows us to be able to get the creative gears turning from the get go.</h1>
		</div>

		<div class="contact-content">	
			<?php the_content() ?>
		</div>

		<?php endwhile ?>
		<div class="clearfix"></div>
	</section>


<?php get_footer() ?>