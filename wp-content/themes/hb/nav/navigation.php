<?php
/*
    navigation.php
    wp-template

	This template defines the navigation for HB LLC.

*/
?>

<nav id="navigation">
	<?php
		$post_types = get_post_types(
			array(
				"public" => true
			)
		);


		foreach ( $post_types as $post_type ) {

			echo '<h2>' . $post_type . '</h2>';

		}

	get_template_part( "nav/navigation", "footer" );

	?>
</nav>
