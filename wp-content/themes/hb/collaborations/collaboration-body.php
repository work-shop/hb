<?php
/*

    collaboration-body.php
    hb

*/
?>


<div class="body" id="collaboration-body">
	<?php if ( $video = get_field('video') ) : ?>
	<div class="video toggle-target off">
	<video autoplay loop>
  		<source src="<?php echo $video; ?>" />
		Your browser does not support this type of video. You probably want to consider upgrading to a newer browser. Recent versions ofGoogle Chrome, Safari, and Firefox are all good options.</video>
	</div>
	<?php endif; ?>

	<?php 

		$GLOBALS['parameters'] = array(
			'images' => get_field( 'gallery' ),
			'block-size' => 'col-sm-2'
		);

	?>
	<div class="info toggle-target off">
	<?php get_template_part( 'collaborations/collaboration', 'info' ); ?>
	</div>


	<?php // include the grid ?>
	<div class="grid off toggle-target">
	<?php get_template_part( 'includes/grid' ); ?>
	</div>

	<?php // include the list ?>
	<div class="list off toggle-target">
	<?php get_template_part( 'includes/list' ); ?>
	</div>


	<?php // include the gallery ?>
	<div class="gallery on toggle-target" >
	<?php get_template_part( 'includes/gallery' ); ?>
	</div>

</div>