<?php
/*
    header/navigation.php
    hb

	This template defines the header navigation bar for HB LLC.

*/
?>

<nav class="content-nav">
	<?php
		switch ( $GLOBALS['state']->state() ) {
			case SiteState::Projects:
				?>
					<div class="tools centered">
						<h4>PROJECTS </h4>
						<ul>
							<li><a href="#" class="toggle on" data-target=".archive-grid"><span class="icon " data-icon="\"></span>
</a></li>
							<li><a href="#" class="toggle off" data-target=".archive-list"><span class="icon " data-icon="&Acirc;"></span>
</a></li>
						</ul>
					</div>	

				<?php
				break;
			case SiteState::Collaborations:
				?>
					<div class="tools centered">
						<h4>COLLABORATIONS </h4>
						<ul>
							<li><a href="#" class="toggle off" data-target=".archive-grid"><span class="icon " data-icon="\"></span>
</a></li>
							<li><a href="#" class="toggle on" data-target=".archive-list"><span class="icon " data-icon="&Acirc;"></span>
</a></li>
						</ul>
					</div>	

				<?php
				break;
			case SiteState::Info:
				?>
					<div class="tools centered" id="about-nav">
						<ul>
							<li><a href="#statement" class="jump-about active">Statement</a></li>
							<li><a href="#people" class="jump-about">People</a></li>
							<li><a href="#shop" class="jump-about">Shop</a></li>
							<li><a href="#clients" class="jump-about">Clients</a></li>
							<li><a href="#contact" class="jump-about">Contact</a></li>
						</ul>
					</div>	

				<?php
				break;
			case SiteState::Current:
				?>
					<div class="tools centered">
						<ul>	
							<h4><a href="#" class="filter active" data-target=".element">#<?php the_field( 'main_hashtag', 'option' ); ?></a></h4>				
						<?php if(get_field( 'sub_hashtags', 'option' )){ ?>
							
							<?php 
								$hashtags = get_field( 'sub_hashtags', 'option' );
								foreach ($hashtags as $hashtag ) :
									echo '<li><a href="#" class="filter" data-target=".'.$hashtag['sub_hashtags'].'">#'.$hashtag['sub_hashtags'].'</a></li>';
								endforeach; ?>
							<?php } else{ }?>
						</ul>
					</div>				

				<?php
				break;
		}

	?>
</nav>