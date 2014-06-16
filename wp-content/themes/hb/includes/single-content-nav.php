<?php 
/*
	single-content-nav.php
	hb

 */
?>

<nav id="single-content-nav" class="content-nav">
	<?php
		switch ( $GLOBALS['state']->state() ) {
			case SiteState::Projects:
				?>
					<div class="tools centered">
						<h4><?php the_title(); ?></h4>
						<ul>
							<li><a href="#" data-target=".gallery" class="on toggle gallery-toggle"><span class="icon " data-icon="&#8225;"></span></a></li>
							<li><a href="#" data-target=".list" class="off toggle list-toggle"><span class="icon " data-icon="&Acirc;"></span></a></li>
							<li><a href="#" data-target=".grid" class="off toggle grid-toggle"><span class="icon " data-icon="\"></span></a></li>									
							<li><a href="#" data-target=".info" class="off toggle info-toggle"><span class="icon " data-icon="="></span></a></li>														
						</ul>
					</div>		

				<?php
				break;
			case SiteState::Collaborations:
				?>
					<div class="tools centered">
						<h4><?php the_title(); ?></h4>
						<ul>
							<li><a href="#" data-target=".info" class="off toggle info-toggle"><span class="icon " data-icon="="></span></a></li>								
							<li><a href="#" data-target=".gallery" class="on toggle gallery-toggle"><span class="icon " data-icon="&#8225;"></span></a></li>
							<li><a href="#" data-target=".list" class="off toggle list-toggle"><span class="icon " data-icon="&Acirc;"></span></a></li>
							<li><a href="#" data-target=".grid" class="off toggle grid-toggle"><span class="icon " data-icon="\"></span></a></li>									
												
						</ul>
					</div>		

				<?php
				break;
			}


	?>
</nav>