<?php

$query = $GLOBALS['parameters']['query'];
$post_type = $GLOBALS['parameters']['post_type'];

if ( isset($query) && isset($post_type) ) :

	$grid_accumulator = '<div id="'.$post_type.'-grid" class="row archive-grid toggle-target';
		if ( $GLOBALS[ "state" ]->state() === SiteState::Projects ) {
			$grid_accumulator .= ' visible">';
		} else{
			$grid_accumulator .= ' hidden">';
		}
	
	$list_accumulator = '<div id="'.$post_type.'-list" class="archive-list toggle-target';
		if ( $GLOBALS[ "state" ]->state() === SiteState::Collaborations ) {
			$list_accumulator .= ' visible">';
		} else{
			$list_accumulator .= ' hidden">';
		}	
	

	while ( $query->have_posts() ) {

		$query->the_post();

		$grid_accumulator .= '<div class="grid-element col-sm-3">'
						  .  '<a href="'.get_permalink().'">'
						  .  '<div class="image-container">';						  

		$list_accumulator .= '<div class="list-element row">'
						  .  '<a href="'.get_permalink().'">'
						  .  '<div class="image-container">';

		if ( has_post_thumbnail() ) {
			$grid_accumulator .= get_the_post_thumbnail( );
			$list_accumulator .= '<div class="col-sm-3 image">'.get_the_post_thumbnail( ).'</div></div>';
		}
		
		$list_accumulator .= '<div class="col-sm-5 text">'
						  .  '<h3>'.get_the_title().'</h3>'
						  .  '<p>'.get_field( "excerpt", get_the_ID() ).'</p>'
						  .  '</div>';

		$grid_accumulator .= '</div></a></div>';
		$list_accumulator .= '</a></div>';

	}

	$grid_accumulator .= "</div>";
	$list_accumulator .= "</div>";

	echo $grid_accumulator;
	echo $list_accumulator;

endif;

?>