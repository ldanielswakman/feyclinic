$(document).ready(function() {


	// touch device detection
	$touch = ( navigator.userAgent.match(/(Android|webOS|iPad|iPhone|iPod|BlackBerry)/i) ? true : false );
	if ($touch) { $('body').addClass('isTouch') }
	var touchEvent = $touch ? 'touchstart' : 'click';

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


// parallax functionality
function scrollActions() {
	scroll = $(window).scrollTop();
	windowH = $(window).height();

	$('.slide').each(function() {
		var st = $(this).offset().top;
		var po = $(this).attr('data-prlx-offset');
		if (!$touch) {
			prlx_offset = (po) ? po : 0 ;
			$(this).css('background-position','center ' + ((scroll - st)/1.2 - prlx_offset) + 'px');
		}
	});
}

$(window).scroll(function() { scrollActions(); });
$(window).resize(function() { scrollActions(); });
$(document).bind("scrollstart", function() { scrollActions(); });
$(document).bind("scrollstop", function() { scrollActions(); });