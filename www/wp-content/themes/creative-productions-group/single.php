<?php
/*
 * Single Posts Page
 */

get_header()
?>
<div class="pop-up">
	<div class="pop-up-bar">
		<a href=""><img src="https://creativeproductionsgroup.com/wp-content/uploads/2015/02/arrow.png"></a>
	</div>
	<div class="pop-up-box">
		<h5><?php the_title() ?></h5>
		<h6><?php the_field( 'project_description' ) ?></h6>
	</div>
</div>

<div class="flexslider grid-container">
	<ul class="slides grid-100">
		<li>
			<img src="<?php the_field( 'slider_image_1' ) ?>" height="520"/>
		</li>
		<li>
			<img src="<?php the_field( 'slider_image_2' ) ?>" height="520"/>
		</li>
		<li>
			<img src="<?php the_field( 'slider_image_3' ) ?>" height="520"/>
		</li>
		<li>
			<img src="<?php the_field( 'slider_image_4' ) ?>" height="520"/>
		</li>
	</ul>
</div>

<div class="flexslider-controls grid-container">
	<ol class="flex-control-nav grid-100">
		<li>&#9632;</li>
		<li>&#9632;</li>
		<li>&#9632;</li>
		<li>&#9632;</li>
	</ol>
</div>
<?php get_footer() ?>