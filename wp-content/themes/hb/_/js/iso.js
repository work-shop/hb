
$(function(){

    var $container = $('#instafeed');

	$container.on("insta-ready", function() {
		$container.isotope({
			 layoutMode: 'masonry',
			 //resizable: false, // disable normal resizing
			  // set columnWidth to a percentage of container width
			 masonry: { columnWidth: 125 }
		});				  


/*
	$(window).smartresize(function(){
	  $container.isotope({
	    // update columnWidth to a percentage of container width
	    masonry: { columnWidth: $container.width() / 4 }
	  });
	});
*/

	  $.Isotope.prototype._masonryResizeChanged = function() {
		 return true;
	};

  $.Isotope.prototype._masonryReset = function() {
    // layout-specific props
    this.masonry = {};
    this._getSegments();
    var i = this.masonry.cols;
    this.masonry.colYs = [];
    while (i--) {
      this.masonry.colYs.push( 0 );
    }


  };

$optionLinks = $('.option-set .filter');

$optionLinks.bind("mouseover", function() {
	var d = $( this );
	$("#instafeed div").not( d.attr("data-option-value") )
					   .css( 'opacity', 0.2 );

}).bind("mouseout", function() {

	var d = $( this );
	$("#instafeed div").not( d.attr("data-option-value") ) 
					   .css( 'opacity', 1 );


});


$optionLinks.click(function(){
	var $this = $(this);
	console.log('clicked');

	// don't proceed if already selected
	if ( $this.hasClass('selected') ) {
	  return false;
	}

	var $optionSet = $this.parents('.option-set');
	$optionSet.find('.selected').removeClass('selected');
	$this.addClass('selected');

	var container = $( "#instafeed" );

	container.isotope({ filter: $(this).attr("data-option-value") });

		pos = container.offset();

	     $('body,html').animate({
		     scrollTop: pos.top - 100
		}, 1000);		

	// make option object dynamically, i.e. { filter: '.my-filter-class' }
	var options = {},
	    key = $optionSet.attr('data-option-key'),
	    value = $this.attr('data-option-value');
	// parse 'false' as false boolean
	value = value === 'false' ? false : value;
	options[ key ] = value;

	if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
	  // changes in layout modes need extra logic
	  changeLayoutMode( $this, options )
	} else {
	  // otherwise, apply new options
	  $container.isotope( options );
	}

	return false;
});

	})

});