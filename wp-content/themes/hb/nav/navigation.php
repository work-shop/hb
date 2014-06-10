<?php
/*
    nav/navigation.php
    wp-template

	This template defines the navigation for HB LLC.

*/
?>

<nav id="navigation">
	<ul>
		<li><a href="<?php echo get_bloginfo( 'url' ).'/projects'; ?>"> <?php echo "PROJECTS"; ?> </a>

		<?php
			if ( $GLOBALS[ "state" ]->state() === SiteState::Work ) {
				$query = new WP_Query(
					array(
						"post_type" => "project",
						"post_status" => "publish",
						'posts_per_page' => -1
					)
				);

				echo "<ul>";
				while ( $query->have_posts() ) {
					$query->the_post();
					echo '<li><a href="'.get_the_permalink().'">'.get_the_title().'</a></li>';
				}
				echo "</ul>"; 

				wp_reset_postdata();
			}
		?>

		</li>

		<li><a href="<?php echo get_bloginfo( 'url' ).'/collaborations'; ?>"> <?php echo "COLLABORATIONS"; ?> </a>
		<?php
			if ( $GLOBALS[ "state" ]->state() === SiteState::Collaborations ) {
				$query = new WP_Query(
					array(
						"post_type" => "project",
						"post_status" => "publish",
						'posts_per_page' => -1
					)
				);

				echo "<ul>";
				while ( $query->have_posts() ) {
					$query->the_post();
					echo '<li><a href="'.get_the_permalink().'">'.get_the_title().'</a></li>';
				}
				echo "</ul>"; 

				wp_reset_postdata();
			}
		?>
		</li>

		<li><a href="<?php echo get_bloginfo( 'url' ).'/current'; ?>"> <?php echo "CURRENT"; ?> </a></li>
		<li><a href="<?php echo get_bloginfo( 'url' ).'/info'; ?>"> <?php echo "INFO"; ?> </a></li>
	</ul>

	<?php

		get_template_part( "nav/navigation", "footer" );

	?>
</nav>