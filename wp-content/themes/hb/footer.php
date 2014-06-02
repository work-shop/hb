</div>

<footer id="footer" class="bg-brand loading hidden">
	<div class="container">
		<div class="row">
			<div id="footer-right" class="right">
				<a id="backtotop" href="#">back to top <span class="icon" data-icon="&#8220;"></span></a>
				<a class="addthis_button_facebook" addthis:url="<?php the_permalink(); ?>"  addthis:title="Mikyoung Kim Design"><span class="icon social" data-icon="F"></span></a>							
				<a class="addthis_button_twitter" addthis:url="<?php the_permalink(); ?>" addthis:title="Mikyoung Kim Design"><span class="icon social" data-icon="t"></span></a>				 
			</div>			
		
		</div>
		<div class="row footer-nav">
			<?php get_template_part('nav'); ?>										
		</div>
		<div class="row footer-info">
			<div class="col-sm-12">
				<p class="small centered">
					HB LLC • 220 Allens Avenue, Providence RI 02903 • info@hbarchive.com
				</p>
			</div>			
			<div class="col-sm-12">
				<p class="small centered">
					Copyright 2014, HB LLC •
					<a href="<?php bloginfo('url'); ?>/wp-admin" target="_blank" class="hidden">Log In</a>
				</p>
			</div>	
		</div>
	</div>
</footer>

</div><!-- /#viewport -->
	
<?php wp_footer(); ?>

<div id="foot" class="hidden">
		
	<!--
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');	
	  ga('create', 'UA-43897729-1', 'work-shop.ws');
	  ga('send', 'pageview');	
	</script>	
	-->
	
	<script src="<?php bloginfo('template_directory'); ?>/_/js/jquery.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/_/js/flexslider.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>
<!--
	<script src="<?php bloginfo('template_directory'); ?>/_/js/isotope.js"></script>	
	<script src="<?php bloginfo('template_directory'); ?>/_/js/iso.js"></script>		
-->

	<script type="text/javascript">
	     //less.env = "development"; less.watch();
	</script>

</div>
	
</body>

</html>