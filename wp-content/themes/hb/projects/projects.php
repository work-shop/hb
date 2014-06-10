<?php
/*

    projects.php
    hb

*/
?>


<div id="body" class="projects">

	<?php 
		$query = new WP_Query(
			array(
				"post_type" => "project",
				"post_status" => "publish",
				"posts_per_page" => -1
			)
		);

		$grid_accumulator = '<div id="project-grid" class="row">';
		$list_accumulator = '<div id="project-list">';

		while ( $query->have_posts() ) {

			$query->the_post();

			$grid_accumulator .= '<div class="grid-element col-sm-2">'
							  .  '<a href="'.get_permalink().'">';

			$list_accumulator .= '<div class="list-element" class="row">'
							  .  '<a href="'.get_permalink().'">';

			if ( has_post_thumbnail() ) {
				$grid_accumulator .= get_the_post_thumbnail( );
				$list_accumulator .= '<div class="col-sm-4">'.get_the_post_thumbnail( ).'</div>';
			}
			
			$list_accumulator .= '<div class="col-sm-8">'
							  .  '<h3>'.get_the_title().'</h3>'
							  .  '<p>'.get_field( "description", get_the_ID() ).'</p>'
							  .  '</div>';

			$grid_accumulator .= '</a></div>';
			$list_accumulator .= '</a></div>';

		}

		$grid_accumulator .= "</div>";
		$list_accumulator .= "</div>";

		wp_reset_postdata(); 

		echo $grid_accumulator;
		echo $list_accumulator;

	?>


</div>