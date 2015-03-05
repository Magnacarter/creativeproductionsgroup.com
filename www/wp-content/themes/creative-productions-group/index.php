<?php
/**
 *This is the home page.
 *
 *
 *
 */
get_header() ?>

<div class="x">
	<img src="https://creativeproductionsgroup.com/wp-content/uploads/2015/03/x.png" height="35" width="35"></img>
</div>

<div id="video-container">
	<?php the_field( 'watch_video' ) ?>
</div>

	<header>
		<div id="intro" class="grid-container">
			<div class="grid-100">
				<div class="heading">
					<h1>Creative Productions Group</h1>
				</div>
			</div>

			<div class="grid-45">
				<div class="tagline">
					<span>Making awesome stuff...consistently for 29 years</span>
				</div>
			</div>

			<div class="grid-45">
				<div class="intro-buttons">
					<button class="learn">Learn More</button>
					<button class="watch">Take A Look</button>
				</div>
			</div>

			<div id="mobile-view" class="grid-100">
				<div class="mobile-btn">
					<button class="watch">Take A Look</button>
				</div>
			</div>
		</div>

		<img src="<?php echo esc_url( get_field( 'background_image' ) ) ?>"/>

	</header>

	<section id="work" class="grid-container">
		<div class="grid-100">
			<h2><?php the_field( 'work_header' ) ?></h2>
		</div>
		<div class="grid-33 box">
			<div class="img">
				<img src="<?php the_field( 'image' ) ?>" height="150" width="150"/>
			</div>
			<h3><?php the_field( 'header' ) ?></h3>
			<p><?php the_field( 'description' ) ?></p>
		</div>
		<div class="grid-33 box">
			<div class="img">
				<img src="<?php the_field( 'image2' ) ?>" height="150" width="150"/>
			</div>
			<h3><?php the_field( 'header2' ) ?></h3>
			<p><?php the_field( 'description2' ) ?></p>
		</div>
		<div class="grid-33 box">
			<div class="img">
				<img src="<?php the_field( 'image3' ) ?>" height="150" width="150"/>
			</div>
			<h3><?php the_field( 'header3' ) ?></h3>
			<p><?php the_field( 'description3' ) ?></p>
		</div>
	</section>

	<section id="team" class="grid-container">
		<div class="grid-100">
			<h2><?php the_field( 'staff_header' ) ?></h2>
			<p><?php the_field( 'staff_mission' ) ?></p>
		</div>
	</section>

	<?php get_template_part( 'staff' ) ?>

	<section id="testimonials" class="grid-container flexslider">
		<div class="grid-100">
			<h2>Thanks for saying that...</h2>
		</div>

		<?php get_template_part( 'testimonial' ) ?>
	</section>

	<section id="brands" class="grid-container">
		<div class="grid-100">
			<h2>We have great clients</h2>
		</div>

		<?php get_template_part( 'client-logos' ) ?>
	</section>

	<!--<section id="contact" class="grid-container">
		<div class="grid-100">
			<h2>Email Us</h2>
			<?php the_field( 'contact_form' ) ?>
		</div>
	</section>-->

<?php get_footer() ?>