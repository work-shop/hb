 <?php
/*
	gallery.php
	ws-template

	This file defines a slideshow based gallery.

	NB. In order for this template to work,
	before including it, define a variable called "$images", filled to the content of
	an ACF galler field.

	EG.

	$images = get_field( 'my_gallery' );


*/
?>

<?php

	
	 // useful
	$images = $GLOBALS['parameters']['images'];

	if( $images ) :

		if( count( $images ) > 1 ) :
		// useful
		?>

		<div class="flexslider flexslider-shop clearfix">
		
			<ul class="slides">

			    <?php foreach( $images as $image ): ?>
		
			        <li>
			        	<img src="<?php echo $image['sizes']['project-slideshow']; ?>" alt="<?php echo $image['alt']; ?>" />
			        	<h4 class="flex-caption"></h4>
			        </li>
		
			    <?php endforeach; ?>
			    
			</ul> 

		</div>

	    
	<?php endif; ?>

<?php endif; ?>
