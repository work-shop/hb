<?php
/*
    header/navigation.php
    hb

	This template defines the header navigation bar for HB LLC.

*/
?>

<nav id="nav-bar" class="col-sm-8 row">
	<?php
		switch ( $GLOBALS['state']->state() ) {
			case SiteState::Projects:
				?>
					<div>PROJECTS</div>
					<div id="grid_view"></div>
					<div id="list_view"></div>

				<?php
				break;
			case SiteState::Collaborations:
				?>
					<div>COLLABORATIONS</div>
					<div id="grid_view"></div>
					<div id="list_view"></div>

				<?php
				break;
			case SiteState::Current:
				?>
					<div>PROJECTS</div>
					<div id="grid_view"></div>
					<div id="list_view"></div>

				<?php
				break;
			case SiteState::Info:
				?>
					<div>PROJECTS</div>
					<div id="grid_view"></div>
					<div id="list_view"></div>

				<?php
				break;
		}


	?>
</nav>