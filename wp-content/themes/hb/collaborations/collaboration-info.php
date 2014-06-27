<?php
/*

    collaboration-info.php
    hb

*/
?>
<div class="info-container">
	
	<div class="row">
		<h2 class="title col-sm-10 visible-xs"><?php echo get_the_title(); ?></h2> 
	</div>

	<div class="row">
		<h2 class="description col-sm-10"><?php echo get_field('description'); ?></h2>
	</div>	

	<div class="row">	
		<div class="col-sm-10"><?php get_template_part( 'collaborations/collaboration', 'collaborators' ); ?>
		</div>
	</div>	
	
		<div id="close"><a href="#close"><span class="icon" data-icon="&#8217;"></span></a></div>
	
</div>
