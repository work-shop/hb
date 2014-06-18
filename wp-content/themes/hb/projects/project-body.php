<?php
/*

    project-body.php
    hb

*/
?>


<div class="body" id="project-body">
	<?php if ( $video = get_field('video') ) : ?>
	<div class="video toggle-target">
	<video autoplay loop>
  		<source src="<?php echo $video; ?>" />
		Your browser does not support video. 	
	</video>
	</div>
	<?php endif; ?>

	<?php // include the gallery ?>
	<div class="gallery on toggle-target" >
		<?php 
	
			$GLOBALS['parameters'] = array(
				'images' => get_field( 'gallery' ),
				'block-size' => 'col-sm-2'
			);
	
			get_template_part( 'includes/gallery' );
		?>
	</div>



	<?php // include the grid ?>
	<div class="grid off toggle-target" >
		<?php 
			get_template_part( 'includes/grid' );
		?>
	</div>



	<?php // include the list ?>
	<div class="list off toggle-target" >
		<?php 
			get_template_part( 'includes/list' );
			unset( $GLOBALS['parameters'] );
		?>
	</div>


	<?php ?>
	<div class="info off toggle-target">
		<?php
			get_template_part( 'projects/project', 'info' );
		?>
	</div>


</div>