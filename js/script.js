$(function() {
	$(".service").hover(function() {
		$(this).find(".service__btn").toggleClass("service__btn__hover");
		$(this).find(".service__line").toggleClass("service__line__hover");
	});
	$("#zayavka").click(function() {
		$(".modal-wrap").fadeIn(200);
		$("body").css("overflow", "hidden");
	});
	$(".modal-block__close").click(function() {
		$(".modal-wrap").fadeOut(200);
		$("body").css("overflow", "auto");
	});
	$(".burg").click(function() {
		$(".hidden-menu").slideToggle(300);
		$(".line1").toggleClass("rotate-plus");
		$(".line2").toggleClass("rotate-minus", 300);
		$(".line3").toggleClass("rotate-hide", 300);
	});
});