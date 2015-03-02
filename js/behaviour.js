$( document ).ready(function(){
	/*$('#menubar ul li a').each(function() {
		console.log(this);
		console.log($(this).prop('href'));
		console.log( window.location.href);
		if ($(this).prop('href') == window.location.href) {
		  $(this).addClass('current');
		}
  	});*/
	$("p.read_more").click(displayInfo);
	function displayInfo(){
		var type = $(this).attr("name");
		var element = $(".hidden[name=" + type + "]");
		if(element.css('display')=='none'){
			element.show("fast", "swing");
		}else{
			element.hide("fast", "swing");
		}
	}
})