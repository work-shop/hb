<?php
/*

    projects.php
    hb

*/
?>


<div class="body" id="projects">

	<?php 
	
		$GLOBALS['parameters'] = array(
			'query' => new WP_Query( array(
					"post_type" => "project",
					"post_status" => "publish",
					"posts_per_page" => -1
			)),
			'post_type' => "project"
		);

		get_template_part( 'includes/archive' );

		wp_reset_postdata(); 
		unset( $GLOBALS['parameters'] );

	?>

</div>