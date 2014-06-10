<?php
/*

    project-body.php
    hb

*/
?>

<div id="body" class="single project">



	<?php // include the gallery ?>
	<div id="gallery-view-stage" >
	<?php 

		$GLOBALS['parameters'] = array(
			'images' => get_field( 'gallery' ),
			'block-size' => 'col-sm-2'
		);

		get_template_part( 'includes/gallery' );
	?>
	</div>



	<?php // include the grid ?>
	<div id="grid-view-stage" >
	<?php 
		get_template_part( 'includes/grid' );
	?>
	</div>



	<?php // include the list ?>
	<div id="list-view-stage" >
	<?php 
		get_template_part( 'includes/list' );
		unset( $GLOBALS['parameters'] );
	?>
	</div>


</div>