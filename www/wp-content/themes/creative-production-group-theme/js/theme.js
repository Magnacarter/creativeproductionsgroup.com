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

//Scroll to next element of HP via the 'Learn More' button.
	$( '.learn' ).click( function() {
		$( 'html, body' ).animate( {
			//the minus 105 makes it not scroll all the way down to the target.
			scrollTop: $( '#front-page-2' ).offset().top + 55
		}, 1000);
	});

//HP video to lightbox via the 'watch video' button.
	var watch = $( '.watch' );
	var header = $( '.site-header' );
	var iframe = jQuery('#vvq-62-vimeo-1')[0];
	var player = $f( iframe );
	watch.click( function(e) {
		e.preventDefault();		
		header.fadeOut();
		$( '.site-inner' ).append( '<div id="wrapper"></div>' );
		$( '#wrapper' ).show();
		$( '#video-container' ).show();
		player.api('play');
	});
	$( '#video-container' ).click( function() {
		header.fadeIn();
		$( '#wrapper' ).hide();
		$( '#video-container' ).hide();
		player.api('pause');
	});

});//Document ready end.