<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$database = 'praktikum';

	$db = new mysqli($host, $user, $pass, $database) ;
	
	if($db->connect_errno != 0){
		die('Error: ' . $db->connect_error);
	}
?>