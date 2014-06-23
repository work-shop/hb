<?php
/*

    grid.php
    ws-template

	accepted parameters :

		$images 		<- 		the output of get_field( name ), typically
		$block_size 	<- 		the desired size in the bootstrap naming schema		
*/
?>

<?php
	
	$images = $GLOBALS['parameters']['images'];
	$block_size = $GLOBALS['parameters']['block-size'];

	if ( !isset($block_size) ) $block_size = "col-sm-4";

	if ( $images ) :

		?>

		<div class="row">
					
		<?php foreach ( $images as $i => $image ) : ?>

			<div class="grid-element <?php echo 'col-sm-3 col-xs-3'; ?>" data-index="<?php echo $i; ?>">
				<div class="image-container">
					<img src="<?php echo $image['sizes']['post-thumbnail']?>" alt="<?php echo $image['alt']; ?>" />
				</div>	
			</div>

		<?php endforeach; ?>	

		</div>

<?php endif; ?>



