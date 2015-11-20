<?php
/**
 * CPG Hooks
 */

/**
 * Hook in video components
 *
 *
 *
 */
function cpg_video_lightbox() {
	if ( is_front_page() ) {
		?>
			<div class="x">
				<img src="https://creativeproductionsgroup.com/wp-content/uploads/2015/03/x.png" height="35" width="35"></img>
			</div>

			<div id="vimeoWrap">
				<div id="video-container">
					<?php the_field( 'watch_video' ) ?>
				</div>
			</div>
		<?php
	}
}
add_action( 'wp_head', 'cpg_video_lightbox' );

/**
 * Workers section
 *
 * @add_action genesis_after_content
 *
 * @return void
 */
function cpg_worker_section() {
	if( is_front_page() ) {
		?>
		<style type="text/css">
			.one-fourth {
				width: 25%;
			}

			@media only screen and ( max-width: 1005px ) {
				.one-fourth {
					width: 50%;
				}
			}

			@media only screen and ( max-width: 539px ) {
				.one-fourth {
					width: 100%;
				}
			}
		</style>
			<div class="clearfix"></div>
			<section id="worker-section-wrap">
				<div class="worker-section-title">
					<h2>Meet some of our creative team</h2>
					<h4>Dedicated | Talented | Focused | Happy</h4>
				</div>

				<?php 
				$args = array(
					'post_type' => 'worker'
					);
				$worker = new WP_Query( $args );
				?>

				<?php if( $worker->have_posts() ) : while( $worker->have_posts() ) : $worker->the_post() ?>
					<div class="single-worker one-fourth">
						<div class="single-worker-img">
							<img src="<?php the_field( 'staff_photo' ) ?>">

								<div class="worker-content">
									<h3><?php the_title() ?></h3>
									<p><?php the_field( 'worker_position' ) ?></p>
									<a target="_blank" href="<?php the_field( 'linkedin_url' ) ?>"><img src="<?php the_field( 'li_icon' ) ?>"></a>
								</div>
						</div>
					</div>
				<?php endwhile; endif; wp_reset_postdata() ?>
			</section>
			<div class="clearfix"></div>
		<?php
	}
}
add_action( 'genesis_after_content', 'cpg_worker_section' );

/**
 *
 *
 *
 */
function cpg_contact_styles() {
	if( is_page( 'contact' ) ) {
		?>
		<style type="text/css">
			.site-inner {
				max-width: none;
				margin-top: 0;
			}
		</style>
		<?php
	}
}
add_action( 'genesis_before_header', 'cpg_contact_styles' );

/**
 * Customize credits in the footer
 *
 * @filter genesis_footer_creds_text
 */
function sp_footer_creds_text() {
	echo '<div class="creds"><p>';
	echo 'Creative Productions Group Inc. &copy; ';
	echo date('Y');
	echo '</p></div>';
}
add_filter( 'genesis_footer_creds_text', 'sp_footer_creds_text' );

