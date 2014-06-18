<?php
/*

    collaboration-body.php
    hb

*/
?>


<div class="body" id="collaboration-body">
	<?php if ( $video = get_field('video') ) : ?>
	<div id="video-view-stage">
	<video autoplay loop>
  		<source src="<?php echo $video; ?>" />
		Your browser does not support the video tag.	
	</video>
	</div>
	<?php endif; ?>

	<?php 

		$GLOBALS['parameters'] = array(
			'images' => get_field( 'gallery' ),
			'block-size' => 'col-sm-2'
		);

	?>
	<div id="info-view-stage" class="">
	<?php get_template_part( 'collaborations/collaboration', 'info' ); ?>
	</div>


	<?php // include the grid ?>
	<div id="grid-view-stage" class="grid off toggle-target">
	<?php get_template_part( 'includes/grid' ); ?>
	</div>


	<?php // include the gallery ?>
	<div id="gallery-view-stage" class="gallery on toggle-target" >
	<?php get_template_part( 'includes/gallery' ); ?>
	</div>

</div>