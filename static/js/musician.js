$(document).ready(function() {
	$(window).scroll(function(e){ 
	  $el = $('.fixed_top'); 
	  if ($(this).scrollTop() > 50 && $el.css('position') != 'fixed'){ 
		$('.fixed_top').css({'position': 'fixed', 'top': '0px'}); 
	  }
	  if ($(this).scrollTop() < 50 && $el.css('position') == 'fixed')
	  {
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
});