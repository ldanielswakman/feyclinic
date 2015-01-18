$(document).ready(function() {


	// touch device detection
	$touch = ( navigator.userAgent.match(/(Android|webOS|iPad|iPhone|iPod|BlackBerry)/i) ? true : false );
	if ($touch) { $('body').addClass('isTouch') }
	var touchEvent = $touch ? 'touchstart' : 'click';


	// adds isLoaded body class for pageload animations
	setTimeout(function() {
		$('body').addClass('isLoaded');
	}, 1000);


	// initiating smooth scroll plugin
	$('a[href^="#"]').smoothScroll( { afterScroll: function() { location.hash = $(this).attr('href'); $(this).blur(); } });


});