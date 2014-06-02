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

get_header(); 

	get_template_part( "nav/navigation" );
	get_template_part( "body" );

get_footer(); 


?>
