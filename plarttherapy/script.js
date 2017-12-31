$(document).ready(function() {
	$(".menuicon").click(function() {
		$(".navbar").slideToggle(function() {
			$(this).toggleClass("nav-expand").css("display", "");
		});
	});

	$(".question").click(function() {
		$(this).next(".answer").slideToggle();
	});

	$(".answer").click(function() {
		$(this).slideToggle();
	});

	var heightmain = $(".main-inner").height();
	var heightsidebar = $(".sidebar-inner").height();

	if (heightmain > heightsidebar) {
		$(".border").css("height", heightmain);
	}
	else if (heightmain < heightsidebar) {
		$(".border").css("height", heightsidebar);
	}
});
