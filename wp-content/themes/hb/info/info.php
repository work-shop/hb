<?php
/*

   	current.php
    hb

*/
?>

<div class="body" id="info-body">
	
	<?php if ( get_field("statement", "option") ) : ?>
	<section id="statement" class="block">
		<div class="block-background" style="background-image:url('<?php echo get_field('statement_background_image', 'option')['sizes']['large']; ?>');"></div>
			
		<div class="row">	
			<div class="col-md-10 col-md-offset-1">
				<?php get_template_part( "header/header", "address" ); ?>
			</div>	
			<div class="col-md-10 col-md-offset-1">
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
			
					echo '<div class="person col-sm-3">';
			
						if ($person['headshot']) {
							echo '<div class="person-headshot">';
							echo '<img src="'.$person['headshot']['sizes']['headshot'].'" />';
							echo '</div>';
						} else {
							echo '<img src="'.get_bloginfo('template_directory').'/_/img/blank.jpg" />';
						}
			
						if ( isset($person['name']) ) {
							if ( isset($person['link']) ) {
								echo '<div class="person-name"><a href="'.$person['link'].'"><h3>'.$person['name'].'</h3></a></div>';
							} else {
								echo '<div class="person-name"><h3>' . $person['name'] . '</h3></div>';
							}
						} 
			
						if ( isset($person['title']) ) : echo '<div class="person-title"><h4>' . $person['title'] . '</h4></div>'; endif;
						if ( isset($person['bio']) ) : echo '<div class="person-bio">' . $person['bio'] . '</div>'; endif;
			
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
	
			echo '<div id="shop-overlay"><h3>'.get_field('shop_statement').'</h3></div>';
		?>
	</section>
	<?php endif; ?>
		
	
	<?php if ( get_field("clients_statement", "option") ) : ?>
	<section id="clients-statement" class="block">
		<p>
		<?php
			echo get_field( "clients_statement", "option" );
		?>
		</p>
		</div>
	</section>
	<?php endif; ?>
	
	<section id="contact" class="block">
		<p>Contact Form Here</p>
	</section>
	
</div>