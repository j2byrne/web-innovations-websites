$(document).ready(function() {
	$(".menuicon").click(function() {
		$(".navbar").slideToggle(function() {
			$(this).toggleClass("nav-expand").css("display", "");
		});
	});
});