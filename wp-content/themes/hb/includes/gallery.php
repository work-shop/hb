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

		<div class="gallery">

		<div class="cyclebutton" id="previous">
			<div class="buttonwrap">
				<span class="icon" data-icon="&#167;"></span>
			</div>
		</div>

		<div id="" class="cycle-slideshow"
			data-cycle-auto-height=container
			data-cycle-log="false"
			data-cycle-fx="fade"
			data-cycle-timeout="7000"
			data-cycle-swipe=true
			data-cycle-speed="500"
			data-cycle-prev="#previous"
			data-cycle-next="#s2,#next"
		    data-cycle-pager="#no-template-pager"
		    data-cycle-pager-template=""
		>

	    <?php foreach( $images as $image ): ?>

	        <img src="<?php echo $image['sizes']['project-slideshow']; ?>" alt="<?php echo $image['alt']; ?>" />

	    <?php endforeach; ?>

	    </div><!--close s2-->

		<div class="cyclebutton" id="next">
		<div class="buttonwrap">
			<span class="icon" data-icon="&#8226;"></span>
		</div>
		</div>

		</div>

	    <ul id="no-template-pager" class="cycle-pager row">


	    	<li id="left-button"></li>
	        <?php foreach( $images as $image ): ?>

	            <li class="image-button">
	            	<?php if (!empty($image['description'])) : ?><div class="image-description"><?php echo $image['description']; ?></div><?php endif; ?>
	            	<div class="button"></div>
	            </li>

	        <?php endforeach; ?>
	        <li id="right-button"></li>

	     </ul>

	<?php

	else: ?>

	<div class="gallery-wrapper clearfix">

		<div id="s2">

	    <?php foreach( $images as $image ): ?>

	        <img src="<?php echo $image['sizes']['project-slideshow']; ?>" alt="<?php echo $image['alt']; ?>" />

	    <?php endforeach; ?>

	    </div><!--close s2-->

	</div>

	<?php endif; ?>

<?php endif; ?>
