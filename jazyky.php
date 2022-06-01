<?php
	$lang = $_GET['lang'];
	
	if( $lang != "sk" && $lang !="en" )
		$lang = "sk";
	
	include ( $lang.'.php');
?>