jQuery(document).ready(function() {
	
	var navOffset = jQuery("desktop-menu").offset().top;
	alert(navOffset);

	jQuery(window).scroll(function() {
		var scrollPosition = jQuery(window).scrollTop();
		
		if (scrollPos >= navOffset) {
			jQuery("desktop-menu").addClass("fixed");
		} else {
			jQuery("desktop-menu").removeClass("fixed");
		}
		
	});

});