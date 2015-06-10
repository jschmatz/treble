$(document).ready(function() {
	setupHeader();
});

function setupHeader() {
	$("header").css("top", "-75px");
	$("header").show();
	$("header").animate({top: "0px"}, 250);
}