/* ------- menu functions ------- */

menuOpen = false;

closeMenu = function() {
  $(".menu-container").hide();
  $(".menu-container").hide();
  $(".menu-icon").removeClass("active");    
  $(".main-icon").show();
  menuOpen = false;
}

openMenu = function() {
  $(".menu-container").show();
  $(".menu-icon").addClass("active"); 
  $(".main-icon").hide();
  menuOpen = true;  
}

/* ------ background transitions --------- */

function shuffle(array) {
  var currentIndex = array.length, temporaryValue, randomIndex;

  // While there remain elements to shuffle...
  while (0 !== currentIndex) {

    // Pick a remaining element...
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex -= 1;

    // And swap it with the current element.
    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;
  }

  return array;
}

assembleBackgroundPattern = function() {

  let elements = $("#background svg path").toArray();
  elements = shuffle(elements);

  let index = 0;
  let interval = setInterval(function() {
    if(index < elements.length) {
      console.log("fading in element " + index);
      $(elements[index]).css("opacity", 1)
      var el = $(elements[index]);
      el.one("transitionend", function() {
        el.addClass("appeared");
      });
      index++;
    } else {
      clearInterval(interval);
    }
  }, 100); 

}

/* ------ move speed effect ------------- */

var breakpoint = 500;

$.fn.moveIt = function(){
  var $window = $(window);
  var instances = [];
  
  $(this).each(function(){
    instances.push(new moveItItem($(this)));
    this.style.willChange='transform';
  });

  instances.forEach(function(inst){
    
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


        var page_height = $('#pjax-container').outerHeight() + $('#pjax-container').offset().top //$('body').outerHeight()
        var elem = $(container).find('svg').get(0)

        var bg = $('#background');
        $(bg).height(page_height+50); // add some gap
        
        repeatElem(elem, 10) // repeat 10 times

        /* 

        // try to find out, how many times it needs to repeat. problem: reported svg height is wrong

        var factor = parseFloat($(container).attr('data-scroll-speed'))
        var elem_height = $(elem).outerHeight(true)


        console.log(elem.clientHeight, elem.clientWidth, "elem:"+elem_height, "page:"+page_height)
        if ((elem_height+20) < page_height) {
            var times = Math.ceil( 1.5*page_height / elem_height) - 1;
            console.log(times)
            repeatElem(elem, times)
        } */
    })
}

function adjustBackgroundHeight() {
    var containers = $('.pattern-repeat');
    $(containers).each(function(i,container){

        var page_height = $('#pjax-container').outerHeight() + $('#pjax-container').offset().top //$('body').outerHeight()
        var elem = $(container).find('svg').get(0)

        var bg = $('#background');
        $(bg).height(page_height+50);
        
    })
}

function repeatElem(elem, times) {
	for (var i=0; i< times; i++){
		$(elem).after($(elem).clone())
	}
}

function initAdjustOnImgLoad(){
	$('img:not(.watched)').each(function(i,img){

		$(img).on('load',function(){
		 adjustBackgroundHeight();
		}).addClass("watched");    

	})


}

// Initialization
$(window).on('load',function(){
    setTimeout(function(){
    	repeatPatterns();
    	adjustBackgroundHeight();
    },100);
    initAdjustOnImgLoad();
});

$(window).on('resize',function(){
    setTimeout(adjustBackgroundHeight,100);
});

$(document).on('pjax:end',function(){
 adjustBackgroundHeight();
 initAdjustOnImgLoad();
});

/* ------- main init ------ */

$(window).load(function(){
  $(document).pjax('a', '#pjax-container',{
    fragment: '#pjax-container'
  })  
})

// only on first load
$(function() {
  setTimeout(assembleBackgroundPattern, 500);
});

$(document).on('pjax:complete ready', function() {

  $('html').click(function(e){
    if(menuOpen && !$(e.target).parent().hasClass("active")) {
        closeMenu();  
      }
    });

  $(".menu-icon").click(function(e) {
      e.stopPropagation();
      if(!menuOpen) {
        openMenu();
      } else {
        closeMenu();
      }
    });

});

