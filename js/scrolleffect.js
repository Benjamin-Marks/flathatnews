jQuery(document).ready(function() {
	
	var navOffset = jQuery(".desktop-menu").offset().top;

	jQuery(window).scroll(function() {
		var scrollPos = jQuery(window).scrollTop();
		jQuery(".status").html(scrollPos);
		
		if (scrollPos >= navOffset) {
			jQuery(".desktop-menu").addClass("fixed");
		} else {
			jQuery(".desktop-menu").removeClass("fixed");
		}
		
	});

});
$(window).bind('scroll', function () {
    if ($(window).scrollTop() > 50) {
        $('.desktop-menu').addClass('fixed');
    } else {
        $('.desktop-menu').removeClass('fixed');
    }
});