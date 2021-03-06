<!DOCTYPE html>

<html>

<head>

	<meta charset="<?php bloginfo('charset'); ?>">

	<?php if (is_search()) { ?>
		<meta name="robots" content="noindex, nofollow" />
	<?php } ?>

	<title>
	   <?php
		   if (!(is_404()) && (is_single()) || (is_page())) {
	          	bloginfo('name'); echo ' - '; wp_title('');
	          }
	      elseif (is_404()) {
	         	echo 'Oops!';
	         }
	      if (is_home()) {
	         	bloginfo('name'); echo ' - '; bloginfo('description');
	         }
	      else {
	         	bloginfo('name'); echo ' - '; bloginfo('description');
	         }
	   ?>
	</title>

	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="google-site-verification" content="">

	<meta name="author" content="Work-Shop">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!--[if lt IE 9]>
      <script src="<?php bloginfo('template_directory'); ?>/_/js/html5shiv.js"></script>
      <script src="<?php bloginfo('template_directory'); ?>/_/js/respond.js"></script>
    <![endif]-->

	<?php wp_head(); ?>

</head>

<body <?php body_class('before header-closed'); ?>>

	<?php if (is_home()) { ?><div id="background" class="visible-xs visible-sm"  style="background-image:url('<?php 
		
		$statement_background_image = get_field('landing_page_image', 'option');			echo $statement_background_image['sizes']['large']; ?>');"></div> <div id="border" class="hidden-sm hidden-xs"></div><?php } else{ ?> <div id="topbar"></div> <?php } ?>
	
	<div id="viewport" class="loading">
	
		<?php get_template_part("header/header","main"); ?>
		
		<div id="headerfix"></div>
	
		<div id="content" class="clearfix">
