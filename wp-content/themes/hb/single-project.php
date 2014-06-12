<?php 
/*
	single-project.php
	hb

 */
?>

<?php 
	
	$GLOBALS[ 'state' ]->transition( SiteState::Projects );
	
	get_template_part( "includes/header");

	get_template_part( "includes/single", "content-nav");
	get_template_part( "projects/project", "body" );

	get_template_part( "includes/footer");


?>