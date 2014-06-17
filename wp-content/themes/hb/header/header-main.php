<?php
/*
    nav/navigation.php
    wp-template

	This template defines the navigation for HB LLC.

*/
?>

<header id="header" class="">
	<ul id="nav">
		<li><a href="<?php echo get_bloginfo( 'url' ).'/projects'; ?>" class="<?php if ( $GLOBALS[ "state" ]->state() === SiteState::Projects && !is_single() ): echo 'active bold'; endif;  ?>"> <?php echo "PROJECTS"; ?> </a>

		<?php
			if ( $GLOBALS[ "state" ]->state() === SiteState::Projects ) {
				if ( is_single() ) $title = get_the_title();

				$query = new WP_Query(
					array(
						"post_type" => "project",
						"post_status" => "publish",
						'posts_per_page' => -1
					)
				);

				echo "<ul>";
				$i = 0;
				while ( $query->have_posts() ) {

					$query->the_post();

					if ( is_single() && get_the_title() === $title ) {
						echo '<li><a href="'.get_the_permalink().'" class="active bold">'.get_the_title().'</a></li>';
					} else if ( is_single() ) {
						echo '<li><a href="'.get_the_permalink().'">'.get_the_title().'</a></li>';
					} else {
						echo '<li class="header-link"><a href="'.get_the_permalink().'" data-index="'.$i.'">'.get_the_title().'</a></li>';
					}
					$i++;
				}
				echo "</ul>"; 

				wp_reset_postdata();
			}
		?>

		</li>

		<li><a href="<?php echo get_bloginfo( 'url' ).'/collaborations'; ?>" class="<?php if ( $GLOBALS[ "state" ]->state() === SiteState::Collaborations && !is_single() ): echo 'active bold'; endif;  ?>"> <?php echo "COLLABORATIONS"; ?> </a>
		<?php
			if ( $GLOBALS[ "state" ]->state() === SiteState::Collaborations ) {
				if ( is_single() ) $title = get_the_title();
				
				$query = new WP_Query(
					array(
						"post_type" => "collaboration",
						"post_status" => "publish",
						'posts_per_page' => -1
					)
				);

				echo "<ul>";
				$i = 0;
				while ( $query->have_posts() ) {

					$query->the_post();

					if ( is_single() && get_the_title() === $title ) {
						echo '<li class="header-link"><a href="'.get_the_permalink().'" class="active bold" data-index="'.$i.'">'.get_the_title().'</a></li>';
					} else {
						echo '<li class="header-link"><a href="'.get_the_permalink().'" data-index="'.$i.'">'.get_the_title().'</a></li>';
					}
					$i++;
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

		get_template_part( "header/header", "footer" );

	?>
</header>
