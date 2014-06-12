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
						<h4>PROJECTS </h4>
						<ul>
							<li><a href="#" class="toggle on" data-target=".archive-grid"><span class="icon icon-right" data-icon="\"></span>
</a></li>
							<li><a href="#" class="toggle off" data-target=".archive-list"><span class="icon icon-right" data-icon="&Acirc;"></span>
</a></li>
						</ul>
					</div>	

				<?php
				break;
			case SiteState::Collaborations:
				?>
					<div class="tools centered">
						<h4>PROJECTS </h4>
						<ul>
							<li><a href="#" class="toggle off" data-target=".archive-grid"><span class="icon icon-right" data-icon="\"></span>
</a></li>
							<li><a href="#" class="toggle on" data-target=".archive-list"><span class="icon icon-right" data-icon="&Acirc;"></span>
</a></li>
						</ul>
					</div>	

				<?php
				break;
			case SiteState::Info:
				?>
					<div class="tools centered">
						<ul>
							<li><a href="#statemenet" class="jump active">Statement</a></li>
							<li><a href="#people" class="jump">People</a></li>
							<li><a href="#shop" class="jump">Shop</a></li>
							<li><a href="#clients" class="jump">Clients</a></li>
							<li><a href="#contact" class="jump">Contact</a></li>
						</ul>
					</div>	

				<?php
				break;
			case SiteState::Current:
				?>
					<div class="tools centered">
						<ul>
							<li><a href="#" class="filter active" data-target=".element">All</a></li>
							<li><a href="#" class="filter">Hashtag </a></li>
							<li><a href="#" class="filter">Hashtag </a></li>

						</ul>
					</div>				

				<?php
				break;
		}

	?>
</nav>