<?php
/*
Template Name: Collaborations
*/


/*

    page-collaborations.php
    hb

*/
?>

<?php

	$GLOBALS[ 'state' ]->transition( SiteState::Collaborations );

	get_header();

	get_template_part( "nav/navigation" );
	get_template_part( "nav/bar");
	get_template_part( "body" );

	get_footer();

?>