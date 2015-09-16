<?php
/**
 * Template Name: Single video page
 */
get_header() ?>

hello world
	<section id="single-video-content">

	<div class="flexslider">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>

			<?php if ( have_rows( 'single_video_slides' ) ) : ?>

				<ul class="slides">

					<?php while( have_rows( 'single_video_slides' ) ) : the_row();

						// vars
						$video_slide = get_sub_field( 'video_slide' );
						$video_link = get_sub_field( 'video_link' );

					?>

						<li class="slide">

							<a href="<?php echo esc_url( $video_link ) ?>" target="_blank"><img src="<?php echo esc_url( $video_slide ) ?>"/></a>

						</li>

					<?php endwhile ?>

				</ul>

			<?php endif ?>

		<div class="single-video-title">
			<h2><?php the_title() ?></h2>
		</div>

		<?php endwhile; endif ?>

	</div>

	</section>

<?php get_footer() ?>