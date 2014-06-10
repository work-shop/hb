<?php
/*
    index.php
    ws-template

*/
?>

<?php 
	// transition the site into its landing-page state
	$GLOBALS['state']->transition( SiteState::Landing ); 
?>

<?php

	get_template_part( "includes/header" );

	get_template_part( "includes/body" );

	get_template_part( "includes/footer" );

?>
