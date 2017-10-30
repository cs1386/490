<?php

    //include in every page to end session and logout
	session_start();
	if(session_destroy()){
		header("Location: index.html");
	}

?>