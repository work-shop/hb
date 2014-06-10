<?php
/*

    projects.php
    hb

*/
?>


<div id="body" class="single project">

	<?php 
		$query = new WP_Query(
			array(
				"post_type" => "projects",
				"post_status" => "publish",
				"posts_per_page" => -1
			)
		);

		$grid_accumulator = '<div id="project-grid" class="row">';
		$list_accumulator = '<div id="project-list">';

		while ( $query->have_posts() ) : $query->the_post();

		$grid_accumulator .= '<div class="grid-element" class="col-sm-2">';
						  .  ''



	?>





	<?php 

		endwhile;
		wp_reset_postdata(); 

	?>


</div>