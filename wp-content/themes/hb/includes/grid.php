<?php
/*

    grid.php
    ws-template

	accepted parameters :

		$images 		<- 		the output of get_field( name ), typically
		$block_size 	<- 		the desired size in the bootstrap schema		
*/
?>

<?php
	
	$images = $GLOBALS['parameters']['images'];
	$block_size = $GLOBALS['parameters']['block-size'];

	if ( !isset($block_size) ) $block_size = "col-sm-2";

	if ( $images ) :

		?>

		<div class="grid row">
		
		<?php foreach ( $images as $image ) : ?>

			<div class="grid-element <?php echo $block_size; ?>">
				<img src="<?php echo $image['sizes']['post-thumbnail']?>" alt="<?php echo $image['alt']; ?>" />
			</div>

		<?php endforeach; ?>	

		</div>

<?php endif; ?>



