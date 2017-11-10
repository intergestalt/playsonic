menuOpen = false;

$(function() {
  
	$('html').click(function(e){
		if(menuOpen && !$(e.target).parent().hasClass("active")) {
			$(".menu-container").hide();		
    		menuOpen = false;
    	}
  	});

	$(".menu-icon").click(function(e) {
		e.stopPropagation();
		$(".menu-container").show();	
  		menuOpen = true;
  	});


});


$(window).load(function(){
	console.log("init pjax")
	$(document).pjax('a', '#pjax-container')	
})
