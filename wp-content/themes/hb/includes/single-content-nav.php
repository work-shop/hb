<?php 
/*
	single-content-nav.php
	hb

 */
?>

<nav id="nav-bar" class="col-sm-8 row">
	<?php
		switch ( $GLOBALS['state']->state() ) {
			case SiteState::Projects:
				?>
					<div class="nav-bar-item" id="post-title"><?php echo get_the_title(); ?></div>
					<div class="nav-bar-item" id="gallery-view"></div>
					<div class="nav-bar-item" id="grid-view"></div>
					<div class="nav-bar-item" id="list-view"></div>
					<div class="nav-bar-item" id="info-view"></div>

				<?php
				break;
			case SiteState::Collaborations:
				?>
					<div class="nav-bar-item" id="post-title"><?php echo get_the_title(); ?></div>
					<div class="nav-bar-item" id="info-view"></div>
					<div class="nav-bar-item" id="grid-view"></div>
					<div class="nav-bar-item" id="gallery-view"></div>

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

					<?php // populate hashtags via JS here ?>

				<?php
				break;
		}


	?>
</nav>