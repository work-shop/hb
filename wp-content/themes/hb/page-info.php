<?php
/*
Template Name: Info
*/


/*

    page-work.php
    hb

*/
?>

<?php

	$GLOBALS[ 'state' ]->transition( SiteState::Info );
	
	get_header();

	get_template_part( "nav/navigation" );
	get_template_part( "nav/bar");
	get_template_part( "body" );

	get_footer();

?>