<?php
	
	$GLOBALS[ 'state' ]->transition( SiteState::Projects );
	
	get_template_part( "includes/header");

	get_template_part( "includes/content", "nav");
	get_template_part( "includes/body" );

	get_template_part( "includes/footer");

?>