<?php
/*
 * Template Name: Archives
 */
get_header() ?>

<section id="projects-page" class="grid-container">

	<div class="project-categories grid-100">
		<ul>
			<?php wp_list_categories( 'title_li=' ) ?>
		</ul>
	</div>

		<?php get_template_part( 'projects' ) ?>

</section>

<?php get_footer() ?>