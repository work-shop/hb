<?php
/*

    collaboration-body.php
    hb

*/
?>

<div class="body" id="collaboration">

	<?php 

		$GLOBALS['parameters'] = array(
			'images' => get_field( 'gallery' ),
			'block-size' => 'col-sm-2'
		);

	?>
	<div id="info-view-stage">
	<?php get_template_part( 'collaborations/collaboration', 'info' ); ?>
	</div>


	<?php // include the grid ?>
	<div id="grid-view-stage" >
	<?php get_template_part( 'includes/grid' ); ?>
	</div>


	<?php // include the gallery ?>
	<div id="gallery-view-stage" >
	<?php get_template_part( 'includes/gallery' ); ?>
	</div>

</div>