<?php 
/*
	current.php
	hb

 */
?>

<div id="instafeed" class="row"></div>
<div id="more-button"></div>

<?php
echo '<script type="text/javascript" lang="javascript">';

	$refl = 'var hashtags = {'
	   . 	'main: "' . get_field('main_hashtag', 'options') . '", '
	   .    'subs: [';

	foreach ( ($all = get_field('sub_hashtags', 'options')) as $i => $subhashtag ) {
		$refl .= '"'.$subhashtag['sub_hashtags'].'"';
		if ( $i < count( $all ) - 1 ) $refl .= ", ";
	}

	$refl .= ']';
	$refl .= '};';

	echo $refl;

echo '</script>';
?>

<script type="text/javascript" lang="javascript" src="<?php echo get_template_directory_uri().'/_/js/instagram.js'; ?>"></script>