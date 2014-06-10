<?php 
	
	$GLOBALS[ 'state' ]->transition( SiteState::Collaborations );
	
	get_template_part( "includes/header");

	get_template_part( "header/header", "main" );
	get_template_part( "includes/single", "content-nav");
	get_template_part( "collaborations/collaboration", "body" );

	get_template_part( "includes/header");


?>