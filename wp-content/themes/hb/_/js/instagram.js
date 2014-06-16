/*
	instagram.js
	hb
 */

//console.log('loaded');
//console.log( hashtags );

var more = $('#more-button')
var targ = $( '#instafeed' );

var feed = new Instafeed({
	clientId:  				'6533c82d30a5412192e0de0659d3441b',
	get: 					'tagged',
	tagName: 				hashtags.main,
//	template: 				'<div class="element col-sm-2"><a href="{{link}}"><img src="{{image}}" /></a></div>',

	resolution: 			'low_resolution',
	limit: 					60,
	sortBy: 				'most-recent',
	mock: 					true,

	success: function( resp ) {

		console.log( resp );

		function tagsAsClasses( resp ) {
			return resp.tags.reduce( function( prev, curr ) {
				return prev + curr + " ";
			}, "");
		}

		for ( var i = 0; i < resp.data.length; i++ ) {
			var html = '<div class="element col-sm-2 '+ tagsAsClasses( resp.data[ i ] ) + '">'
			         + '<a href="' + resp.data[ i ].link + '">'
			         + '<img src="' + resp.data[ i ].images.low_resolution.url + '" />'
			         + '</a></div>';

			targ.append( html );

		}	
	},

	error: function( err ) {
		targ.append( '<div class="col-sm-12 error"><p>'+err+'</p></div>' );
	},

	after: function() {
		console.log( this );
		if ( !this.hasNext() ) {
			more.attr( 'disabled', 'disabled' );
		}
	}
});

more.on( 'click', function() { feed.next(); });

feed.run();