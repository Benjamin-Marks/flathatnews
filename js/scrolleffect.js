var mn = $(".desktop-menu");
$(window).scroll(function() {
	if( $(this).scrollTop() > 50) {
		mn.addClass("desktop-menu-scrolled");
	}
	else {
		mn.removeClass("desktop-menu-scrolled");
	}
});