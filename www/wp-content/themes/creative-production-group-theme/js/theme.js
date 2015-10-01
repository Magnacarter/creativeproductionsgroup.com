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
		froogaloop = $f( '#cpg-video' );
		froogaloop.api('play');
		$( '.site-inner' ).append( '<div id="wrapper"></div>' );
		$( '#wrapper' ).show();
		$( '#video-container' ).show();
		$( '.x' ).show();
	});
	$( '.x' ).click( function() {
		$( '#wrapper' ).hide();
		$( '#video-container' ).hide();
		$( '.x' ).hide();
		vimeoWrap = $('#vimeoWrap');
   		vimeoWrap.html( vimeoWrap.html() );
	});

});//Document ready end.