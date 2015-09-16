<?php
/**
 * RJS Service Page Hooks
 */

/**
 * Header for service page
 *
 * @return void
 *
 * @add_action genesis_header
 */
function rjs_service_page_header() {
	if ( is_page( 'services' ) ) {
	?>
	<div class="portfolio-header">
		<h1><?php echo esc_html( get_the_title() ) ?></h1>
	</div>
	<?php
	}
}
add_action( 'genesis_header', 'rjs_service_page_header', 2 );

/**
 * Display service page background image
 *
 * @return void
 *
 * @action wp_head
 */
function rjs_service_head() {
	if ( is_page( 'services' ) ) {
	?>
	<style type="text/css">
	.portfolio-header {
		background-image: url(<?php echo esc_url( get_field( 'service_background_image' ) ) ?> );
	}
	</style>
	<?php
	}
}
add_action( 'wp_head', 'rjs_service_head' );

/**
 * Projects
 *
 * @return void
 *
 * @add_action genesis_before_content
 */
function rjs_service() {
	if ( is_page( 'services' ) ) {
		?>
		<section id="service-intro">
			<div class="service-headline">
				<h2>Design &amp; development</h2>
				<h2>for WordPress websites</h2>
			</div>

			<div class="service-intro-content1 one-half first">
				<h3>Tailored</h3>
				<h4>Tailored designs adapt to a particular</h4>
				<h4>taste, purpose or need.</h4>
			</div>

			<div class="service-intro-content-mobile one-half first">
				<h3>Tailored</h3>
				<h4>Tailored designs adapt to a particular taste, purpose or need.</h4>
			</div>

				<div class="sic1-list-mobile one-fourth first">
					<ul>
						<li>typography guide</li>
						<li>color scheme guide</li>
						<li>customized fonts</li>
						<li>customized colors</li>
					</ul>
				</div>

				<div class="sic2-list-mobile one-fourth">
					<ul>
						<li>premium plugins</li>
						<li>social media</li>
						<li>newsletter</li>
						<li>contact form</li>
					</ul>
				</div>

			<div class="service-intro-content2 one-half">
				<h3>Custom</h3>
				<h4>Custom WordPress themes cator to the highest</h4>
				<h4>level of brand development</h4>
			</div>

			<div class="service-intro-content2-mobile one-half">
				<h3>Custom</h3>
				<h4>Custom WordPress themes cator to the highest level of brand development</h4>
			</div>

			<div class="list-wrap">

				<div class="sic1-list2 one-fourth first">
					<ul>
						<li>typography guide</li>
						<li>color scheme guide</li>
						<li>customized fonts</li>
						<li>customized colors</li>
					</ul>
				</div>

				<div class="sic2-list2 one-fourth">
					<div class="divider">
						<img src="http://rachaeljane.com/wp-content/uploads/2015/03/divider.png">
					</div>
					<ul>
						<li>premium plugins</li>
						<li>social media</li>
						<li>newsletter</li>
						<li>contact form</li>
					</ul>
				</div>

				<div class="sic2-list1 one-fourth">
					<ul>
						<li>style guide guide</li>
						<li>typography guide</li>
						<li>color scheme guide</li>
						<li>wireframes</li>
					</ul>
				</div>

				<div class="sic2-list3 one-fourth">
					<div class="divider2">
						<img src="http://rachaeljane.com/wp-content/uploads/2015/03/divider.png">
					</div>
					<ul>
						<li>Photoshop designs</li>
						<li>custom WP theme</li>
						<li>video tutorials</li>
						<li>post launch support</li>
					</ul>
				</div>
			</div>

			<div class="button-wrap">
				<div class="service-page-buttons one-fourth first">
					<a href="<?php home_url() ?>/portfolio" class="service-content-buttons">
						<span class="service-page-slide-text">I'm Proud of Them</span>
						<span class="service-page-text">View Examples</span>
					</a>
				</div>

				<div id="extra2" class="service-page-buttons2 one-fourth">
					<a href="<?php home_url() ?>/contact" class="service-content-buttons">
						<span class="service-page-slide-text2">Let's Do This</span>
						<span class="service-page-text2">Get Started</span>
					</a>
				</div>

				<div id="extra" class="service-page-buttons one-fourth">
					<a href="<?php home_url() ?>/portfolio" class="service-content-buttons">
						<span class="service-page-slide-text">I'm Proud of Them</span>
						<span class="service-page-text">View Examples</span>
					</a>
				</div>

				<div class="service-page-buttons2 one-fourth">
					<a href="<?php home_url() ?>/contact" class="service-content1-buttons">
						<span class="service-page-slide-text2">Let's Do This</span>
						<span class="service-page-text2">Get Started</span>
					</a>
				</div>

				<div id="adaptive1" class="service-page-buttons">
					<a href="<?php home_url() ?>/portfolio" class="service-content-buttons">
						<span class="service-page-slide-text">I'm Proud of Them</span>
						<span class="service-page-text">View Examples</span>
					</a>
				</div>

				<div id="adaptive2" class="service-page-buttons2">
					<a href="<?php home_url() ?>/contact" class="service-content1-buttons">
						<span class="service-page-slide-text2">Let's Do This</span>
						<span class="service-page-text2">Get Started</span>
					</a>
				</div>
			</div>
		</section>
		<?php
	}
}
add_action( 'genesis_before_content', 'rjs_service' );

/**
 * Mid image section of service page
 *
 * @return void
 *
 * @add_action genesis_before_footer
 */
function rjs_service_mid_bg_section() {
	if ( is_page( 'services' ) ) {
	?>
	<div class="service-mid"></div>
		<style type="text/css">
		.service-mid {
			background-image: url( "http://rachaeljane.com/wp-content/uploads/2015/02/service-mid-img.jpg" );
		}
		</style>

	<section id="creative-section" class="site-inner">
			<div class="service-headline">
				<h2>The creative and</h2>
				<h2>collaborative Process</h2>
			</div>
			<div class="creative-intro">
				<h4>Like snowflakes all projects are unique so that means the</h4>
				<h4>creative process must align with that uniqueness.</h4>
				<h4>However, each project is approched with the same</h4>
				<h4>formulated method of project planning.</h4>
			</div>

			<div class="creative-intro-mobile">
				<h4>Like snowflakes all projects are unique so that means the creative process must align with that uniqueness. However, each project is approched with the same formulated method of project planning.</h4>
			</div>

			<div class="service-icon-wrap">
				<div class="service-icon1 one-fourth first">
					<h4>Discovery, research and sketching</h4>
					<img src="http://rachaeljane.com/wp-content/uploads/2015/02/icon-pic1.jpg"/>
				</div>
				<div class="service-icon2 one-fourth">
					<h4>Typography, color and style guide</h4>
					<img src="http://rachaeljane.com/wp-content/uploads/2015/02/icon-pic2.jpg"/>
				</div>
				<div class="service-icon3 one-fourth">
					<h4>Wireframing</h4>
					<img src="http://rachaeljane.com/wp-content/uploads/2015/02/icon-pic3.jpg"/>
				</div>
				<div class="service-icon4 one-fourth">
					<h4>Design</h4>
					<img src="http://rachaeljane.com/wp-content/uploads/2015/02/icon-pic4.jpg"/>
				</div>
			</div>
	</section>
	<?php
	}
}
add_action( 'genesis_before_footer', 'rjs_service_mid_bg_section', 1 );