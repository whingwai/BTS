<?php
	session_start();
	
	$sessionNum = $_SESSION["number"] ;
	
	if (empty($sessionNum) || $sessionNum != 1 ) {
		header( 'Location: error.html' ) ;
	} else {
		header( 'Location: movie.html' ) ;
	}
?>

