$(window).stellar();

$(".menu-icon").click(function () {
	$(this).toggleClass("menu-animation");

	$(".nav-list").toggle("easing", function() {
		$(".nav-list").toggleClass("nav-animation");
		$(".nav-list").removeClass("hidden");
	});
});

$('.mobil').addClass("hidden-sm hidden-md hidden-lg");
$('.computer').addClass('hidden-xs');