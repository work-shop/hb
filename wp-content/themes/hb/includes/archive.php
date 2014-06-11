<?php

$query = $GLOBALS['parameters']['query'];
$post_type = $GLOBALS['parameters']['post_type'];

if ( isset($query) && isset($post_type) ) :

	$grid_accumulator = '<div id="'.$post_type.'-grid" class="row archive-grid">';
	$list_accumulator = '<div id="'.$post_type.'-list" class="archive-list">';

	while ( $query->have_posts() ) {

		$query->the_post();

		$grid_accumulator .= '<div class="grid-element col-sm-4">'
						  .  '<a href="'.get_permalink().'">';

		$list_accumulator .= '<div class="list-element" class="row">'
						  .  '<a href="'.get_permalink().'">';

		if ( has_post_thumbnail() ) {
			$grid_accumulator .= get_the_post_thumbnail( );
			$list_accumulator .= '<div class="col-sm-4">'.get_the_post_thumbnail( ).'</div>';
		}
		
		$list_accumulator .= '<div class="col-sm-6">'
						  .  '<h3>'.get_the_title().'</h3>'
						  .  '<p>'.get_field( "description", get_the_ID() ).'</p>'
						  .  '</div>';

		$grid_accumulator .= '</a></div>';
		$list_accumulator .= '</a></div>';

	}

	$grid_accumulator .= "</div>";
	$list_accumulator .= "</div>";

	echo $grid_accumulator;
	echo $list_accumulator;

endif;

?>