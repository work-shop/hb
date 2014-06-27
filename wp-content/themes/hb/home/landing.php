<?php
/*

    landing/landing.php
    hb

	This template gets the appropriate video resource and displays it.

*/
?>

<div id="landing" class="hidden-xs hidden-sm">
	<?php if ( get_field('video','option') ) { ?>
		<video autoplay loop <?php if(get_field('video_poster','option')): ?>poster="<?php the_field('video_poster','option'); endif; ?>">
	  		<source src="<?php the_field('video','option'); ?>" type="video/mp4">
			Your browser does not support this type of video. You probably want to consider upgrading to a newer browser. Recent versions of Google Chrome, Safari, and Firefox are all good options.  	
		</video>
	<?php } else{ ?>
	
	<?php } ?>	
</div>