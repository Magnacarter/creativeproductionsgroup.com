<?php
/**
 * Contact Page
 */
get_header() ?>

<section id="contact-page-content" class="grid-container">
	<div class="contact-content grid-100">
		<h2>Email Us</h2>
		<h3>We'd love hearing from you!</h3>
		<?php while ( have_posts() ) : the_post() ?>
			<?php the_content() ?>
		<?php endwhile ?>
	</div>
</section>

<?php get_footer() ?>