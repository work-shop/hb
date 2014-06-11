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
					<div class="tools centered">
						<h4>PROJECTS 
							<span class="grid-view toggle icon icon-right on" data-icon="\" data-target=".archive-grid"></span>
							<span class="list-view toggle icon icon-right off" data-icon="&Acirc;" data-target=".archive-list"></span>
						</h4>
					</div>	

				<?php
				break;
			case SiteState::Collaborations:
				?>
					<div class="tools centered">
						<h4>COLLABORATIONS 
							<span class="grid-view toggle icon icon-right off" data-icon="\" data-target=".archive-grid"></span>
							<span class="list-view toggle icon icon-right on" data-icon="&Acirc;" data-target=".archive-list"></span>
						</h4>
					</div>	

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