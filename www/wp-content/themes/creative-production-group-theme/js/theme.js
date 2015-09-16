jQuery( document ).ready( function($) {
//Flexslider
	$(window).load(function() {
		$('.flexslider').flexslider({
			slideshowSpeed: 9000,
			controlNav: false,
			directionNav: false,
			animationSpeed: 2000,
			direction: "horizontal",
			animation: "slide", //String: Select your animation type, "fade" or "slide"
			prevText: "", //String: Set the text for the "previous" directionNav item
			nextText: "",
		});
	});

//Scroll to next element of HP via the 'Learn More' button.
	$( '.learn' ).click( function() {
		$( 'html, body' ).animate( {
			//the minus 105 makes it not scroll all the way down to the target.
			scrollTop: $( '#work' ).offset().top - 110
		}, 1000);
	});

//HP video to lightbox via the 'watch video' button.
	var watch = $( '.watch' );
	watch.click( function() {
		$( 'body' ).append( '<div id="wrapper"></div>' );
		$( '#wrapper' ).show();
		$( '#video-container' ).show();
		$( '.x' ).show();
	});
	$( '.x' ).click( function() {
		$( '#wrapper' ).hide();
		$( '#video-container' ).hide();
		$( '.x' ).hide();
	});

});//Document ready end.