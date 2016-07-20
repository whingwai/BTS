<?php
	session_start();
	
	$_SESSION["number"] = 0 ;
	header( 'Location: logout.html' ) ;
	
?>

