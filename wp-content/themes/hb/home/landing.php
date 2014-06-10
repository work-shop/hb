<?php
/*

    landing/landing.php
    hb

	This template gets the appropriate video resource and displays it.

*/
?>

<div id="landing" class="col-sm-8">
	<video autoplay>
  		<source src="<?php echo get_template_directory_uri(); ?>/_/img/home-large.mp4" type="video/mp4">
  		<source src="<?php echo get_template_directory_uri(); ?>/_/img/home-large.ogg" type="video/ogg">
		Your browser does not support the video tag.	
	</video>
</div>