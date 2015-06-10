<?php
/**
 * Template Name: Single project page
 */
get_header() ?>

	<?php if ( is_single() ) : ?>

		<div class="pop-up">
			<div class="pop-up-bar">
				<a href=""><img src="<?php the_field( 'pop_up_arrow', 'options' ) ?>"></a>
			</div>
			<div class="pop-up-box">
				<h5><?php the_title() ?></h5>
				<h6><?php the_field( 'project_description' ) ?></h6>
			</div>
		</div>

		<div class="flexslider flex-single-project">
			<ul class="slides">
				<li>
					<img src="<?php the_field( 'slider_image_1' ) ?>"/>
				</li>
				<li>
					<img src="<?php the_field( 'slider_image_2' ) ?>"/>
				</li>
				<li>
					<img src="<?php the_field( 'slider_image_3' ) ?>"/>
				</li>
				<li>
					<img src="<?php the_field( 'slider_image_4' ) ?>"/>
				</li>
			</ul>
		</div>

	<?php endif ?>
<?php get_footer() ?>