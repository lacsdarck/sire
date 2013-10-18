<?php 

	$_SESSION = array();
	session_destroy();	
	setcookie ('PHPSESSID', '', time()-3600,'/', '', 0, 0);
	
	$url = 'http://'. $_SERVER['HTTP_HOST'].'/index.html';

	// Remove any trailing slashes:	

	$url = rtrim($url, '/\\');	
	
	header("Location:$url");
					
?>