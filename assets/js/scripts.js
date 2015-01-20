$(document).ready(function() {


	// touch device detection
	$touch = ( navigator.userAgent.match(/(Android|webOS|iPad|iPhone|iPod|BlackBerry)/i) ? true : false );
	if ($touch) { $('body').addClass('isTouch') }
	var touchEvent = $touch ? 'touchstart' : 'click';


	// adds isLoaded body class for pageload animations
	setTimeout(function() {
		$('body').addClass('isLoaded');
	}, 1000);


	// makes footer tucked under main
	$('.footer-spacer').css('height', $('footer').outerHeight() );
	$('footer').addClass('tuckedUnder');


	// initiating smooth scroll plugin
	$('a[href^="#"]').smoothScroll( { afterScroll: function() { location.hash = $(this).attr('href'); $(this).blur(); } });


	// menu toggle
	$('nav #navtoggle, nav #mask').bind(touchEvent, (function(e) {
		$('nav').toggleClass('isExpanded');
		e.preventDefault();
	}));


});