var hh = 60;
var scrollOffset = 60;
var minSmallOffset = 240;
var cw,ch,bh,dh,ch2;
var headerState = false;
loaded = false;
opening = false;

jQuery(document).ready(function($) {

	view(); 


	$('.flexslider-project .flex-previous').click(function() {
	    $('.flexslider-project').flexslider('prev')
	    return false;		
	});		
	
	$('.flexslider-project .flex-next').click(function() {
	    $('.flexslider-project').flexslider('next')
	    return false;		
	});	

	
	$('.flexslider-full .flex-previous').click(function() {
	    $('.flexslider-full').flexslider('prev')
	    return false;		
	});		
	
	$('.flexslider-full .flex-next').click(function() {
	    $('.flexslider-full').flexslider('next')
	    return false;		
	});		
	
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
		scrollTop: $(locale).offset().top - 0
	},2000);
}



function navToggle() {
	if(!headerState){
		$('#header').removeClass('closed');
		$('#header').addClass('open');
		$('body').removeClass('header-closed');
		$('body').addClass('header-open');	
		headerState = true
		
	}
	else if (headerState) {
		$('#header').removeClass('open');
		$('#header').addClass('closed');
		$('body').removeClass('header-open');
		$('body').addClass('header-closed');
		headerState = false;
									
	}
	
}


function view(){
	
	//spy();
	
	ch = $(window).height();
	cw = $(window).width();
	
	headerMargin = 20;
	
	viewportWidth = cw*.93;
	viewportHeight = ch*.9;
	viewportTop = (ch-viewportHeight)/2;
	viewportLeft = (cw-viewportWidth)/2;
	
	
	contentWidth = viewportWidth - $("#header").width() - headerMargin;

	$(".block.min").css('height',ch);	

	$("#viewport").css('width',viewportWidth);	
	$("#viewport").css('max-height',viewportHeight);
	$("#viewport").css('margin-top',viewportTop);
	$("#viewport").css('margin-left',viewportLeft);

	contentHeight = $("#content").height();
	
	if($(window).width() < 768){
		$("#header").css('height','auto');
		$("#content").css('width','100%');
	}
	else{
		$("#header").css('height',contentHeight);
		$("#content").css('width',contentWidth);		
	}
	
	        
	if($(window).scrollTop() >= scrollOffset && $("body").hasClass('before')){
		$("body").removeClass('before');
		$("body").addClass('after');		
	} 
	else if($(window).scrollTop() < scrollOffset && $("body").hasClass('after')){
		$("body").removeClass('after');
		$("body").addClass('before');		 		 		
	} 
	
	if(!loaded){
		loadElements();
	}
			
}

function flexsliderSetup(){
	
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

