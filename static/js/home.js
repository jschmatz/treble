$(document).ready(function() {
	$("#button_search").click(function() {
		$("header").fadeOut(250, function() {
			$("header").attr("class", "top col-lg-16");
			$("header .logo_container").attr("class", "logo_container col-md-8 col-lg-6");
			$("header .form_container").attr("class", "form_container col-md-8 col-lg-6");
			
			$("header").css("top", "-75px");
			$("header").show();
			$("header").animate({top: "0px"}, 250);
		});
	});
});