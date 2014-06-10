<?php
/*

    page-work.php
    hb

*/
?>

<?php

	$GLOBALS[ 'state' ]->transition( SiteState::Current );
	
	get_template_part( "includes/header");

	get_template_part( "header/header", "main" );

	get_template_part( "includes/content", "nav");
	
	get_template_part( "includes/body" );

	get_template_part( "includes/footer");

?>