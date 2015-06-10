		<footer>

			<HR WIDTH="100%" COLOR="white" SIZE="1">

			<style type="text/css">
				footer {
					background-image: url(<?php echo esc_url( get_field( 'footer_image', 'option' ) ) ?> );
				}
			</style>

			<div class="footer-section1 grid-container">
					<h1>Let's Get Started...</h1>

					<div class="contact-button">
						<a href="<?php home_url() ?>/contact" class="contact-us">
							<span class="service-text">Contact Us</span>
						</a>
					</div>

					<?php get_template_part( 'contacts' ) ?>
			</div>

			<HR WIDTH="83%" COLOR="white" SIZE="1">

			<div class="footer-section2 grid-container">

				<div class="company-name grid-50">
					<h4><a href="<?php echo home_url( '' ) ?>">Creative Productions Group</a></h4>
				</div>

				<div id="social-links" class="ss-icon grid-30">
					<a href="https://www.facebook.com/pages/Creative-Productions-Group/376576775800136" target="_blank">&#xF610;</a>
					<a href="https://www.twitter.com/cpgcreation" target="_blank">&#xF611;</a>
					<a href="https://www.linkedin.com/pub/steve-marks/4/7b/7bb" target="_blank">&#xF612;</a>
					<a href="https://www.vimeo.com/creativeproductionsgroup" target="_blank">&#xF631;</a>
					<a href="http://instagram.com/cpgcreation" target="_blank">&#xF641;</a>
				</div>
			</div>

			<div class="copy-wrap grid-container">
				<div class="copyright grid-30">
					<h5>&copy;<?php echo date('Y'); ?>Creative Productions</h5>
				</div>

				<div class="stuff-wrap grid-40">
						<h5>Making awesome stuff...consistently for 29 years</h5>
				</div>
			</div>

		</footer>

	<?php wp_footer(); ?>

	</body>

</html>