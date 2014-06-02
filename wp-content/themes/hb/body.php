<?php
/*

    body.php
    ws-template

*/
?>

<?php

switch ( $GLOBALS['state']->state() ) {
	case SiteState::Landing:
		get_template_part( "landing/landing" );
		break;
	case SiteState::Work:
		get_template_part( "work/work" );
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
	default;
		echo "BROKEN";

}

?>