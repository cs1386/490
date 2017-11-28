<?php
/*
  Database login details
 */
 
	define("HOST", "sql1.njit.edu");
	define("USER", "lt59");
	define("PASSWORD", "7QqPE65F");
	define("DATABASE", "lt59");
	 
	$link = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	

?>
