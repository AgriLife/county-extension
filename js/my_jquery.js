jQuery(document).ready(function($) {

	// remove all height attributes from images for flexibility	
	$('img').removeAttr('height');
	
	$(function() {
		$( "#tabs" ).tabs();
	});

});
