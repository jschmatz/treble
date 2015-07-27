$(document).ready(function() {
	setupNarrow();

});

function setupNarrow() {
	$(".narrow_toggle").click(function() {
		if($(this).find("span").hasClass("fa-plus-circle")) {
			$(this).find("span").removeClass("fa-plus-circle");
			$(this).find("span").addClass("fa-minus-circle");
			$(".narrow_fields").slideDown();
		}
		else {
			$(this).find("span").removeClass("fa-minus-circle");
			$(this).find("span").addClass("fa-plus-circle");
			$(".narrow_fields").slideUp();
		}
	});
}