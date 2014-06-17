<?php
/*

    landing/landing.php
    hb

	This template gets the appropriate video resource and displays it.

*/
?>

<div id="landing" class="hidden-xs">
	<video autoplay loop>
  		<source src="<?php echo get_template_directory_uri(); ?>/_/img/home-large.mp4" type="video/mp4">
  		<source src="<?php echo get_template_directory_uri(); ?>/_/img/home-large.ogg" type="video/ogg">
		Your browser does not support this type of video. You probably want to consider upgrading to a newer browser. Recent versions ofGoogle Chrome, Safari, and Firefox are all good options.  	
	</video>
</div>