<?php
/*

    collaborations.php
    hb

*/
?>

<div id="body" class="collaborations">

	<?php 
	
		$GLOBALS['parameters'] = array(
			'query' => new WP_Query( array(
					"post_type" => "collaboration",
					"post_status" => "publish",
					"posts_per_page" => -1
			)),
			'post_type' => "collaboration"
		);

		get_template_part( 'includes/archive' );

		wp_reset_postdata(); 
		unset( $GLOBALS['parameters'] );

	?>

</div>