var hh = 60;
var scrollOffset = 60;
var minSmallOffset = 240;
var cw,ch,bh,dh,ch2;
var headerState = false;
loaded = false;
opening = false;

jQuery(document).ready(function($) {

	view(); 
	
	$('#backtotop').click(function(event) {
	  	event.preventDefault();
		$('body,html').animate({scrollTop:0},2000);
	});


	$('#nav-toggle').click(function(event) {
	  	event.preventDefault();
	  	console.log('#nav-toggle clicked');
		navToggle();
	});
	
	
	$(document).keypress(function(e) {
		if(e.which == 109 || e.which == 77) {
			navToggle();
		}	
	});
	
	$(".jump").click(function(e){
		e.preventDefault();
		var thelink = $(this).attr("href");
		thelink = thelink.toLowerCase();
		goToByScroll(thelink);	

	});
	
	
	$(".jump-about").click(function(e){
		e.preventDefault();
		var thelink = $(this).attr("href");
		thelink = thelink.toLowerCase();
		goToByScrollAbout(thelink);	

	});	
	
	/* transitions 
	 * 
	 * */
	$(".grid .grid-element").click(function(e){
		e.preventDefault();
		//$(this).addClass('large');
		$( ".content-nav .gallery-toggle" ).trigger( "click" );
		$('.flexslider').flexslider( parseInt( $(this).data("index") ) );

	});		

	(function() {
		var targetOpacity = 1;

		$(".header-link a").each(function( i, link) {
			$(".grid-element").each( function( j, element ) {
				if ( i == j ) {
					element 	= $( element );
					link 		= $( link ); 

					link.bind("mouseover", function() {
						element.css("opacity", targetOpacity);
					}).bind( "mouseout", function() {
						element.attr("style", null);
					});

					element.bind( "mouseover", function() {
						link.addClass("bold");
					}).bind( "mouseout", function() {
						link.removeClass("bold");
					});


				}
			});
		});
	})();

	
	


	(function () {
		var target = ".gallery";

		$(".info").click(function(e) {
			console.log(".info callback");

			e.preventDefault();
			
			targets = $('.toggle-target');
			//target=".gallery";

			 $('.content-nav .toggle').removeClass('on').addClass('off');
			 $( target+'-toggle' ).removeClass('off').addClass('on');	  
		 	 $(targets).removeClass('on').addClass('off');
		 	 $(target).removeClass('off').addClass('on');	
			 	 	 
		});	


		$(".content-nav .toggle").click(function(e){
			console.log(".toggle callback");

			e.preventDefault();
			
			if (  $(this).hasClass("info-toggle") ) {
				console.log("info-toggle");
				target = $(".on").data("target");
			} 

			var innertarget = $(this).data("target");
			targets = $('.toggle-target');
		  
		  	if($(this).hasClass('off')){
			 	 $('.content-nav .toggle').removeClass('on').addClass('off')
			 	 $(this).removeClass('off').addClass('on');
			 	 $(targets).removeClass('on').addClass('off');
			 	 $(innertarget).removeClass('off').addClass('on');			 	 
			  }
			  else {
			 }	 
		});	
	})();

});//end document.ready


$(window).load(function() {


});//end window.load



$(window).ready(function() {


});//end window.ready



$(window).resize(function() {

	view();	
	
});//end window.resize


$(window).scroll(function(e) { 

	view(); 
	   

});//end window.scroll


function goToByScroll(locale){
	$('html,body').animate({
		scrollTop: $(locale).offset().top - scrollOffset
	},2000);
}

function goToByScrollAbout(locale){
	$('html,body').animate({
		scrollTop: $(locale).offset().top - 100
	},2000);
}



function navToggle() {
	if(!headerState){
		$('#header').removeClass('closed');
		$('#header').addClass('open');
		$('body').removeClass('header-closed');
		$('body').addClass('header-open');	
		$('#nav-toggle .icon').data('icon','X');			
		headerState = true;
	}
	else if (headerState) {
		$('#header').removeClass('open');
		$('#header').addClass('closed');
		$('body').removeClass('header-open');
		$('body').addClass('header-closed');
		$('#nav-toggle .icon').data('icon','&Egrave;');			
		headerState = false;
									
	}
	
}


function view(){
	
	spy();
	
	ch = $(window).height();
	cw = $(window).width();
		
	viewportWidth = cw*.93;
	viewportHeight = ch*.9;
	viewportTop = (ch-viewportHeight)/2;
	viewportLeft = (cw-viewportWidth)/2;
	headerMargin = viewportLeft/2;	
	contentWidth = viewportWidth - $("#header").width() - headerMargin;
	contentLeft = $("#header").width() + headerMargin;

	$("#viewport").css('width',viewportWidth);	
	$("#viewport").css('height',viewportHeight);
/*
	$(".home #content").css('height',ch-30);	
	$(".home #content").css('width',cw-30);		
*/
	$("#viewport").css('margin-top',viewportTop);
	$("#viewport").css('margin-left',viewportLeft);
	
	$(".block").css('min-height',viewportHeight-50);
	//$(".block-background").css('min-height',viewportHeight);	
	$("#viewport").css('margin-left',viewportLeft);	

	contentHeight = $("#content").height();
	
	if($(window).width() < 768){
		$("#header").css('height','auto');
		$("#content").css('width','auto');
		$("#header").css('height','auto');
		$("#content").css('width','auto');		
		$("#content").css('left','auto');							
		$(".info-container").css('left','auto');	
		$(".info-container").css('top','auto');	
		$(".info-container").css('width','auto');									
		$(".info-container").css('height',ch);								
	}
	else{
		$("#header").css('height',viewportHeight);
		$("#content").css('width',contentWidth);		
		$("#content").css('left',contentLeft);
		$("#topbar").css('height',viewportTop);
		$(".info-container").css('width',contentWidth);									
		$(".info-container").css('height',viewportHeight-(viewportTop));					
		$(".info-container").css('left',contentLeft+viewportLeft);	
		$(".info-container").css('top',viewportTop+50);	
		$("#shop .slides li").css('min-height',viewportHeight);			
		
				
	}
	
	if(!loaded){
		loadElements();
	}
			
}

function flexsliderSetup(){

	$('.flexslider-shop').flexslider({	
	      animation: 'fade',
	      controlsContainer: '.flexslider-controls',
	      slideshowSpeed: 8000,           
		  animationSpeed: 1000,
	      directionNav: false,
	      controlNav: false
	 });	 

	$('.flexslider').flexslider({
	      animation: 'slide',
	      controlsContainer: '.flexslider-controls',
	      slideshowSpeed: 5000,           
		  animationSpeed: 250,
	      directionNav: true
	 });	
	 	 	
}


function spy(){
	var menu = $('#about-nav .jump-about');
	var targets = new Array();
	
	//an array with [i][0] = menu item and [i][1] = scroll item
	menu.each(function(i){
		targets[i] = new Array(2);
		var temp = $(this).attr('href');
		var offset = $(temp).offset();	
		targets[i][0] = $(this);		
		targets[i][1] = offset.top;
	});
	
	for(var j = 0; j < targets.length; j++){
		if(($(window).scrollTop()+250) >= targets[j][1]){
			menu.removeClass('active');
			targets[j][0].addClass('active');
		}
	}	
	
}

function loadElements(){
	loaded = true;
	setTimeout(function(){
		$('.loading').addClass('loaded');
		$('.landing').addClass('landed');
		flexsliderSetup();
		view();
	},1000);		
		
}

