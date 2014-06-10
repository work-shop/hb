<?php
/*

    body.php
    ws-template

*/
?>

<?php

switch ( $GLOBALS['state']->state() ) {
	case SiteState::Landing:
		get_template_part( "home/landing" );
		break;
	case SiteState::Projects:
		get_template_part( "projects/projects" );
		break;
	case SiteState::Collaborations:
		get_template_part( "collaborations/collaborations" );
		break;
	case SiteState::Current:
		get_template_part( "current/current" );
		break;
	case SiteState::Info:
		get_template_part( "info/info" );
		break;
	default:
		echo "BROKEN";

}

?>