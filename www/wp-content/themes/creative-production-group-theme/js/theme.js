jQuery( document ).ready( function($) {
//Flexslider
	$(window).load(function() {
		$('.flexslider').flexslider({
			slideshowSpeed: 9000,
			controlNav: false,
			directionNav: false,
			animationSpeed: 2000,
			direction: "horizontal",
			animation: "fade", //String: Select your animation type, "fade" or "slide"
		});
	});
});//Document ready end.