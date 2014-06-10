<?php
/*
    navigation-landing-logo.php
    hb

	This defines a logo asset that is configured for the "Landing" site state.

*/
?>
<div id="landing-logo">
<?php if ( $GLOBALS[ "state" ]->state() === SiteState::Landing ) { ?>


	<img src="<?php echo get_template_directory_uri() . "/_/img/logo.png"; ?>" />


<?php } else { ?>

	<img src="<?php echo get_template_directory_uri() . "/_/img/logo-small.png"; ?>" />

<?php } ?>
</div>