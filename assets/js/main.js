menuOpen = false;

closeMenu = function() {
  $(".menu-container").hide();
  $(".menu-container").hide();
  $(".menu-icon").removeClass("active");    
  $(".main-icon").show();
  menuOpen = false;
}

$(document).on('pjax:complete ready', function() {
  
	$('html').click(function(e){
		if(menuOpen && !$(e.target).parent().hasClass("active")) {
  		  closeMenu();	
    	}
  	});

	$(".menu-icon").click(function(e) {
		  e.stopPropagation();
      if(!menuOpen) {
        $(".menu-container").show();
        $(".menu-icon").addClass("active"); 
        $(".main-icon").hide();
        menuOpen = true;
      } else {
        closeMenu();
      }
		  
  	});


});


$(window).load(function(){
	$(document).pjax('a', '#pjax-container',{
		fragment: '#pjax-container'
	})	
})

/* ------ move speed effect ------------- */

var breakpoint = 500;

$.fn.moveIt = function(){
  var $window = $(window);
  var instances = [];
  
  $(this).each(function(){
    instances.push(new moveItItem($(this)));
  });
  
  $(window).on('scroll resize', function(){
    var scrollTop = $window.scrollTop();
    instances.forEach(function(inst){
      inst.update(scrollTop);
    });
  })
}

var moveItItem = function(el){
  this.el = $(el);
  this.speed = parseInt(this.el.attr('data-scroll-speed'));
};

moveItItem.prototype.update = function(scrollTop){
  var translateY = 0;
  var marginBottom = 0;

  if (window.innerWidth >= breakpoint) {
    translateY = -(scrollTop / this.speed);
    marginBottom = -(scrollTop / this.speed);
  }

  this.el.css('transform', 'translateY(' + translateY + 'px)');
  this.el.css('margin-bottom', marginBottom + 'px');
};

// Initialization
$(function(){
  $('[data-scroll-speed]').moveIt();
});

/* --------------- repeat pattern -------------- */

function repeatPatterns() {
	var containers = $('.pattern-repeat');
	$(containers).each(function(i,container){
		var elem = $(container).find('svg').get(0)
		var factor = parseFloat($(container).attr('data-scroll-speed'))
		var elem_height = $(elem).height()
		var page_height = $('body').outerHeight()
		console.log("elem:"+elem_height, "page:"+page_height)
		if ((elem_height+20) < page_height) {
			var times = Math.ceil( 1.5*page_height / elem_height) - 1;
			console.log(times)
			repeatElem(elem, times)			
		} 
	})
}



function repeatElem(elem, times) {
	for (var i=0; i< times; i++){
		$(elem).after($(elem).clone())
	}
}


// Initialization
$(function(){
  repeatPatterns();
});
