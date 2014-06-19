<?php
/*

    collaboration-info.php
    hb

*/
?>
<div class="info-container">
<div class="row">
	<h2 class="description col-sm-10"><?php echo get_field('description'); ?></h2>

	<?php get_template_part( 'collaborations/collaboration', 'collaborators' ); ?>

	<div id="close"><a href="#close"><span class="icon" data-icon="&#8217;"></span></a></div>

</div>
</div>
