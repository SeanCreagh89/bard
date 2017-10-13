$(document).ready(function() {
	$("#site_responsive_navigation").click(function() {
		$("#site_responsive_dropdown").slideToggle();
	});

	$("iframe").parent().wrap("<div class='video_wrapper'></div>");

	$("p").filter(function(index) {
		if ($(this).attr("style") === "text-align: center;" && $(this).children("strong")) {
			var child_width = $(this).children().outerWidth(true) + 1;
			$(this).children("strong").wrap("<div class='title_wrapper' style='width: " + child_width + "px;'></div>");
		}
	});

	$(".title_wrapper").filter(function(index) {
		var child_width = $(this).children().outerWidth(true) + 1;
		$(this).css("width", child_width);
	});
});

$(window).resize(function() {
	$("#site_responsive_dropdown").slideUp();
});