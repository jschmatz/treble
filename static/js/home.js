$(document).ready(function() {
	$("#button_search").click(function() {
		$("header").fadeOut(250, function() {
			$("header").attr("class", "top col-lg-16");
			$("header .logo_container").removeClass("col-lg-16").addClass("col-lg-5");
			$("header .form_container").removeClass("col-lg-16").addClass("col-lg-6");
			
			$("header").css("top", "-75px");
			$("header").show();
			$("header").animate({top: "0px"}, 250);
		});
	});
});