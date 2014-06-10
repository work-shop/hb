<?php
/*

    list.php
    ws-template

	accepted parameters :

		$images 		<- 		the output of get_field( name ), typically

*/
?>

<?php

	$images = $GLOBALS['parameters']['images'];

	if ( $images ) :

		?>

		<ul class="list">
		
		<?php foreach ( $images as $image ) : ?>

			<li class="list-element row">

				<img src="<?php echo $image['sizes']['project-slideshow']?>" alt="<?php echo $image['alt']; ?>" />
				<div class="image-annotation"><?php echo $image['description']; ?></div> <!-- is this the correct subfield? -->
			</li>

		<?php endforeach; ?>	

		</ul>

<?php endif; ?>