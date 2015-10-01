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
	watch.click( function() {
		var froogaloop = $f( '#vimeoWrap' );
		froogaloop.api( 'play' );
		var header = $( '.site-header' );
		header.fadeOut();
		$( '.site-inner' ).append( '<div id="wrapper"></div>' );
		$( '#wrapper' ).show();
		$( '#video-container' ).show();
	});
	$( '#video-container' ).click( function() {
		var header = $( '.site-header' );
		$( '#wrapper' ).hide();
		$( '#video-container' ).hide();
		$( '.x' ).hide();
		vimeoWrap = $( '#vimeoWrap' );
   		vimeoWrap.html( vimeoWrap.html() );
   		header.fadeIn();
	});

});//Document ready end.