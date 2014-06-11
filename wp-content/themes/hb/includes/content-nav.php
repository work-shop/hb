<?php
/*
    header/navigation.php
    hb

	This template defines the header navigation bar for HB LLC.

*/
?>

<nav id="content-nav" class="content-nav">
	<?php
		switch ( $GLOBALS['state']->state() ) {
			case SiteState::Projects:
				?>
					<div>PROJECTS</div>
					<div id="grid-view"></div>
					<div id="list-view"></div>

				<?php
				break;
			case SiteState::Collaborations:
				?>
					<div>COLLABORATIONS</div>
					<div id="grid-view"></div>
					<div id="list-view"></div>

				<?php
				break;
			case SiteState::Current:
				?>
					<div class="nav-bar-item" id="post-title"></div>
					<div class="nav-bar-item" id="grid-view"></div>
					<div class="nav-bar-item" id="list-view"></div>

				<?php
				break;
			case SiteState::Info:
				?>

					<div class="nav-bar-item" id="all-button"></div>
					
					<div class="nav-bar-item" id="sub-tags">
						<?php // populate hashtags via JS here ?>
					</div>

				<?php
				break;
		}


	?>
</nav>