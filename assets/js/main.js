menuOpen = false;

$(document).on('pjax:complete ready', function() {
  
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
	$(document).pjax('a', '#pjax-container',{
		fragment: '#pjax-container'
	})	
})

/* ------ move speed effect ------------- */

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