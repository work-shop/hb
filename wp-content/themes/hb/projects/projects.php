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
				"posts_per_page" => -1
			)
		);
	?>


	<?php wp_reset_postdata(); ?>


</div>