<?php
/*
	location-date.php
	hb

 */
?>

<?php
	$l = get_field( 'location' );
	$d = get_field( 'date' );



	if ( $l && $d ) {
		echo '<h4 date="location date">'.$l.', '.$d.'</h4>';
	} else if ( $l ) {
		echo '<h4 date="location">'.$l.'</h4>';
	} else if ( $d ) {
		echo '<h4 date="date">'.$d.'</h4>';
	}

?>