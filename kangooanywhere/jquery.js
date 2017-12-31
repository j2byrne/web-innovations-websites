$(document).ready(function() {
  $(".menuButton").click(function() {
		$("#menu").slideToggle(function() {
			$(this).toggleClass("nav-expand").css("display", "");
		});
	});
});
