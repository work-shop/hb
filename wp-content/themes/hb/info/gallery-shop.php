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
		
			<ul class="slides clearfix">

			    <?php foreach( $images as $image ): ?>
		
			        <li class="background" style="background-image: url('<?php echo $image['sizes']['project-slideshow']; ?>')">
			        </li>
		
			    <?php endforeach; ?>
			    
			</ul> 

		</div>

	    
	<?php endif; ?>

<?php endif; ?>
