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

<div id="background" class="visible-xs"></div>

<div id="viewport">

	<header id="header" class="clearfix loading<?php if (is_home()) { echo ''; } else{ } ?>">							
		<nav class="nav-main hidden">
			<a href="<?php bloginfo('url'); ?>/work" id="work-nav-item">work</a>
			<a href="<?php bloginfo('url'); ?>/collaborations" id="collaborations-nav-item">collaborations</a>						
			<a href="<?php bloginfo('url'); ?>/current" id="current-nav-item">current</a>
			<a href="<?php bloginfo('url'); ?>/about" id="current-nav-item">info</a>					
		</nav>	
		
		<a class="logo" id="logo" href="<?php bloginfo('url'); ?>">
			<img class="hidden-xs" src="<?php bloginfo('template_directory'); ?>/_/img/logo.png" />
			<img class="visible-xs" src="<?php bloginfo('template_directory'); ?>/_/img/logo-small.png" />
		</a>	
			
		<div id="temporary-message">
			<h4 class="temporary">We're rebuilding our website. Stay tuned.</h4>
			
			<h4>
				info@hbarchive.com	
				<p class="small">401.965.8857	</p>
			</h4>
		</div>
			
	</header>
		
	<div id="content" class="clearfix">
