$( document ).ready(function(){
	$('#menubar ul li a').each(function() {
		console.log(this);
		console.log($(this).prop('href'));
		console.log( window.location.href);
		if ($(this).prop('href') == window.location.href) {
		  $(this).addClass('current');
		}
  	});	
})