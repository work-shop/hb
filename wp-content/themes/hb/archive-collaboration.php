<?php
/*

    page-collaborations.php
    hb

*/
?>

<?php

	$GLOBALS[ 'state' ]->transition( SiteState::Collaborations );

	get_template_part( "includes/header" );
	
	get_template_part( "includes/content", "nav");

	get_template_part( "includes/body" );

	get_template_part( "includes/footer" );

?>