<?php
/*
    navigation-footer.php
    hb

	This template defines static footer_content, based on site's state

*/
?>

<div id="nav-footer-box" class="">

<?php if ( $GLOBALS['state']->state() === SiteState::Landing ) { ?>
	
	<?php get_template_part( "header/header", "address" ); ?>
	<?php get_template_part( "header/header", "logo"); ?>

<?php } else { ?>

	<?php get_template_part( "header/header", "logo"); ?>

<?php } ?>

</div>