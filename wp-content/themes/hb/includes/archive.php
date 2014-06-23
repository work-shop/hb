<?php

$query = $GLOBALS['parameters']['query'];
$post_type = $GLOBALS['parameters']['post_type'];

if ( isset($query) && isset($post_type) ) :

	$grid_accumulator = '<div id="'.$post_type.'-grid" class="row archive-grid toggle-target';
		if ( $GLOBALS[ "state" ]->state() === SiteState::Projects ) {
			$grid_accumulator .= ' on">';
		} else{
			$grid_accumulator .= ' off">';
		}
	
	$list_accumulator = '<div id="'.$post_type.'-list" class="archive-list toggle-target';
		if ( $GLOBALS[ "state" ]->state() === SiteState::Collaborations ) {
			$list_accumulator .= ' on">';
		} else{
			$list_accumulator .= ' off">';
		}	
	
	$i = 0;
	while ( $query->have_posts() ) {

		$query->the_post();

		$grid_accumulator .= '<div class="grid-element col-sm-5 col-md-4 col-lg-3" data-index="'.$i.'">'
						  .  '<a href="'.get_permalink().'">'
						  .  '<div class="image-container">';						  

		$list_accumulator .= '<div class="list-element row" data-index="'.$i.'">'
						  .  '<a href="'.get_permalink().'">'
						  .  '<div class="image-container">';

		if ( has_post_thumbnail() ) {
			$grid_accumulator .= get_the_post_thumbnail( );
			$list_accumulator .= '<div class="col-sm-3 image">'.get_the_post_thumbnail( ).'</div></div>';
		}
		
		$list_accumulator .= '<div class="col-sm-7 col-md-7 col-lg-5 text">'
						  .  '<h3>'.get_the_title().'</h3>';

					  	  $l = get_field( 'location' );
					  	  $d = get_field( 'date' );

					  	  if ( $l && $d ) {
							  $list_accumulator .= '<h4 class="date location">'.$l.', '.$d.'</h4>';
						  } else if ( $l ) {
							  $list_accumulator .= '<h4 class="location">'.$l.'</h4>';
						  } else if ( $d ) {
							  $list_accumulator .= '<h4 class="date">'.$d.'</h4>';
						  }

		$list_accumulator .= '<p>'.get_field( "excerpt", get_the_ID() ).'</p>'
						  .  '</div>';

		$grid_accumulator .= '</div></a></div>';
		$list_accumulator .= '</a></div>';

		$i++;

	}

	$grid_accumulator .= "</div>";
	$list_accumulator .= "</div>";

	echo $grid_accumulator;
	echo $list_accumulator;

endif;

?>