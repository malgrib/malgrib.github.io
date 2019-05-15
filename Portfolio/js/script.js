$(function() {
	$(".overlay").hide();
	$(".photo").click(function() {
		$(".overlay").show();
		$(".container").attr("class","container-changed");
	});
	$(".overlay-img").click(function() {
		$(".overlay").hide();
		$(".container-changed").attr("class","container");
	});
});