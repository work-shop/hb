<?php
/*

   	current.php
    hb

*/
?>

<div class="body" id="info-body">
	
	<?php if ( get_field("statement", "option") ) : ?>
	<section id="statement" class="block">
		<div class="block-background" style="background-image:url('<?php 
		
		$statement_background_image = get_field('statement_background_image', 'option');			echo $statement_background_image['sizes']['slideshow']; ?>');"></div>
			
		<div class="row">	
			<div class="col-md-10 col-md-offset-1">
				<?php get_template_part( "header/header", "address" ); ?>
			</div>	
			<div class="col-md-10 col-md-offset-1 text">
				<h3><?php the_field( "statement", "option" ); ?></h3>
			</div>
			
		</div>
	</section>
	<?php endif; ?>

	
	<?php  if ( get_field('people', 'option') ) : ?>
	<section id="people" class="block">
		<div class="row">
			<?php
				foreach (get_field('people', 'option') as $person ) {
			
					echo '<div class="person col-sm-6 col-md-4">';
			
						if ($person['headshot']) {
							echo '<div class="person-headshot">';
							echo '<img src="'.$person['headshot']['sizes']['headshot'].'" />';
							echo '</div>';
						} else {
							echo '<img src="'.get_bloginfo('template_directory').'/_/img/blank.jpg" />';
						}
			
						if ( isset($person['name']) && !empty( $person['name'])  ) { echo '<div class="person-name"><h3>' . $person['name'] . '</h3></div>'; }
						if ( isset($person['title']) && !empty( $person['title']) ) : echo '<div class="person-title"><h4>' . $person['title'] . '</h4></div>'; endif;
						if ( isset($person['bio']) && !empty( $person['bio'])  ) : echo '<div class="person-bio">' . $person['bio'] . '</div>'; endif;
						if ( isset($person['link']) && !empty( $person['link']) ) : echo '<div class="person-link"><a href="'.$person['link'].'">'.$person['link'].'</a></div>'; endif;
			
					echo "</div>";

				}
			?>
		</div>
	</section>
	<?php endif; ?>
	
	
	<?php if ( get_field('shop_statement', 'option') ) : ?>
	<section id="shop" class="block">		
		<?php
			if ( get_field('shop_slideshow', 'option') ) {
				echo '<div class="block-background">';
					$GLOBALS['parameters'] = array(
						'images' => get_field( 'shop_slideshow', 'option' )
					);
				
					get_template_part( 'info/gallery' ,'shop' );
					
					unset( $GLOBALS['parameters'] );
				echo '</div>';	
			}
	
			echo '<div id="shop-overlay" class="row"><div class="col-sm-10 col-sm-offset-1 text"><h2>'.get_field('shop_statement','option').'</h2></div></div>';
		?>
	</section>
	<?php endif; ?>


	<?php if ( ($f = get_field("clients_statement", "option")) && !empty($f)) : ?>
	<section id="clients" class="block">
		<div class="block-background" style="background-image:url('<?php 
		$client_background_image = get_field('client_background_image', 'option');
		echo $client_background_image['sizes']['slideshow']; ?>');"></div>	
	
		<div class="row">	
			<div class="col-md-10 col-md-offset-1 text">
				<h3><?php echo $f; ?></h3>
			</div>
		</div>
	</section>
	<?php endif; ?>
	</section>
	
	<section id="contact" class="block">
	
		<div id="contact-form" class="row">
			<h3 class="centered">Send us a message.</h3>
			<div class="col-sm-6 col-sm-offset-3">
		<?php gravity_form( 1, $display_title=false, $display_description=false, $display_inactive=false, $field_values=null, $ajax=true, $tabindex=1000); ?>
			</div>
		</div>
		
	</section>
	
</div>