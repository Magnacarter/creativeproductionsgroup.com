<?php
/**
 * Template Name: Contact Page
 */

get_header() ?>

<section id="contact-hamburger" class="grid-container">
	<div class="grid-100">
		<h2>Email Us</h2>
		<?php the_field( 'contact_form' ) ?>
	</div>
</section>

<?php get_template_part( 'contacts' ) ?>

<?php get_footer() ?>