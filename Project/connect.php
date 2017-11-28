<?php
/*
  Database login details
 */
 
	define("HOST", "localhost");
	define("USER", "root");
	define("PASSWORD", "");
	define("DATABASE", "490");
	 
	$link = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	else
		echo "db success<br>";

?>