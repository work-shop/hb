<?php
/*
    header-landing-logo.php
    hb

	This defines a logo asset that is configured for the "Landing" site state.

*/
?>
<div id="logo" class="hidden-xs">
	<a href="<?php bloginfo('url'); ?>">
	<?php if ( $GLOBALS[ "state" ]->state() === SiteState::Landing ) { ?>
	
		<img src="<?php echo get_template_directory_uri() . "/_/img/logo-large.png"; ?>" alt="HB Logo" />
	
	
	<?php } else { ?>
	
		<img src="<?php echo get_template_directory_uri() . "/_/img/logo.png"; ?>" alt="HB Logo"/>
	
	<?php } ?>
	</a>
</div>
