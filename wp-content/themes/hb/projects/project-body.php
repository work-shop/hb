<?php
/*

    project-body.php
    hb

*/
?>

<div class="body" class="project">



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


	<?php ?>
	<div id="info-view-stage">
	<?php
		get_template_part( 'projects/project', 'info' );
	?>
	</div>


</div>