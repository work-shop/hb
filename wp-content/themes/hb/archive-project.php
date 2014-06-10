

<!-- Some stuff -->

<?php
	
	$GLOBALS[ 'state' ]->transition( SiteState::Work );
	
	get_template_part( "includes/header");

	get_template_part( "header/header", "main" );
	get_template_part( "includes/content", "nav");
	get_template_part( "includes/body" );

	get_template_part( "includes/header");

?>