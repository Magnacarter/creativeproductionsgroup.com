jQuery( document ).ready( function($) {
//Flexslider
	$( window ).load(function() {
		var $flexslider = $('.flexslider');
			$flexslider.flexslider();
	});

	var $flexslider = $('.flexslider');
		$flexslider.flexslider({
		manualControls: ".flex-control-nav li",
		useCSS: false /* Chrome fix*/
	});

//Fittext for splashpage
	$( '#intro .heading h1' ).fitText( 1, { maxFontSize: '60px' } );
	$( '#intro .tagline' ).fitText( 2.5, { maxFontSize: '30px' } );

//Hamburger navigation
	var hamburger = $( '.hamburger a' );
	var toggle_menu = $( '.toggle_menu' );
	hamburger.click( function( e ) {
		e.preventDefault();
		toggle_menu.slideToggle( 'slow' );
	});

//Scroll to next element of HP via the 'Learn More' button.
	$( '.learn' ).click( function() {
		$( 'html, body' ).animate( {
			//the minus 105 makes it not scroll all the way down to the target.
			scrollTop: $( '#work' ).offset().top - 110
		}, 1000);
	});

//Scroll to next element of HP via the 'Learn More' button.
	$( '#menu-item-18' ).click( function( e ) {
		e.preventDefault();
		$( 'html, body' ).animate( {
			scrollTop: $( '#contact' ).offset().top
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

/*Project lightboxes with description.
var $project = $( '.single_work img' );

	$project.click( function(e) {
		e.preventDefault();
		var img_url = $( this ).attr( 'src' );
		var caption_text = $( this ).attr( 'alt' );
		$( 'body' ).append( '<div id="project_wrap"><div class="grid-100 pro_img"><img height="435" width="780"/></div><div class="caption grid-50"><p></p></div></div>' );
		$( '#project_wrap img' ).attr( 'src', img_url );
		$( '#project_wrap p' ).text( caption_text );
		var project_wrap = $( '#project_wrap' );
		$( '.hamburger_nav' ).fadeOut();
		project_wrap.fadeIn();

		//click overlay to remove lightbox
		project_wrap.click( function() {
			project_wrap.fadeOut();
			$( '.hamburger_nav' ).fadeIn();
		});
	});
*/

//Disable href in brand imgs
	$( '.logo p a' ).click(function() {
		return false;
	});

//Hover elements for team members
var teamMember = $( '.single-worker' );

teamMember.hover(
	function() {
		$( this ).find( '.worker-hover' ).fadeIn(400);
	},
	function() {
		$( this ).find( '.worker-hover' ).hide();
	}
);

//Gives the nav a border when page is scrolled past the background image, works in reverse.
	var url = location.pathname;

	if ( url == '/' ) {
		$( document ).scroll( function(){
			$( 'nav' ).toggleClass( 'scrolled', $(this).scrollTop() > 180 );
		});
	} else if ( url != '/' ) {
		$( 'nav' ).addClass( 'scrolled' );
		$( '.header_logo' ).show();
	}

//Fades the splash page out to give way to the lower page elements, works in reverse.

	var url = location.pathname;
	var flag = $( window ).scrollTop() > 180 ? 1 : 2;

	$( window ).scroll( function () {
		var scrollTop = $( window ).scrollTop();
		var windowWidth = $( window ).width();

		if ( scrollTop > 180 && flag != 1 && windowWidth >= 900 ) {
			$( '.header_logo' ).show();
			flag = 1;
		} else if ( scrollTop <= 180 && flag != 2 && url == '/') {
			$( '.header_logo' ).hide( 'slow' );
			if ( windowWidth <= 668 ) {
				$( '.learn' ).remove();
			} else if ( windowWidth > 668 ) {
				$( '.learn' ).fadeTo( 'slow', '1' );
			}
			$( '.watch' ).fadeTo( 'slow', '1' );
			flag = 2;
		}
	});

//Click to trigger pop-up-box
	$( '.pop-up-bar a' ).toggle(
		function(){
			$( '.pop-up-box' ).hide(300);

			$( '.pop-up' ).animate({
				left: '+=22.4%',
			},500);
		},
		function(){
			$( '.pop-up-box' ).show(300);
			$( '.pop-up' ).animate({
				left: '-=22.4%',
			},500);
	});








});//Document ready end.