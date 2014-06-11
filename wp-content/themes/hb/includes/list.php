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

		<ul class="image-list-large">
		
		<?php foreach ( $images as $image ) : ?>

			<li class="row">
				<div class="image-container">
					<img src="<?php echo $image['sizes']['project-slideshow']?>" alt="<?php echo $image['alt']; ?>" />
				</div>
					
				<h4 class="image-caption"><?php echo $image['description']; ?></h4> <!-- is this the correct subfield? -->
			</li>

		<?php endforeach; ?>	

		</ul>

<?php endif; ?>