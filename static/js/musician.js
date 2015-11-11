$(document).ready(function() {
	$(window).scroll(function(e){ 
	  $el = $('.fixed_top'); 
	  if ($(this).scrollTop() > 50 && $el.css('position') != 'fixed'){ 
        $('.fixed_top').addClass("is_fixed");
		$('.fixed_top').css({'position': 'fixed', 'top': '0px'}); 
	  }
	  if ($(this).scrollTop() < 50 && $el.css('position') == 'fixed')
	  {
        $('.fixed_top').removeClass("is_fixed");
		$('.fixed_top').css({'position': 'absolute', 'top': '50px'}); 
	  } 
	  
	  $el2 = $('.musician_left'); 
	  if ($(this).scrollTop() > 50 && $el2.css('position') != 'fixed'){ 
		$('.musician_left').css({'position': 'fixed', 'top': '100px'}); 
	  }
	  if ($(this).scrollTop() < 50 && $el2.css('position') == 'fixed')
	  {
		$('.musician_left').css({'position': 'absolute', 'top': '100px'}); 
	  } 
	});
	
	$("#rep_list_all_link").on("click", function() {
		if($("#rep_list_all").hasClass("open")) {
			$("#rep_list_all").slideUp();
			$("#rep_list_all").removeClass("open");
			$(this).html("Show Full List (+" + $(this).data("addsongs") + " More Songs");
		}
		else {
			$("#rep_list_all").slideDown();
			$("#rep_list_all").addClass("open");
			$(this).html("Hide Full List");
		}
	});
});