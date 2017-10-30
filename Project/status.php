<?php

    /* I
    Include in every page to check if user is logged in.
    Redirects browser to log in page if not.  
    */

    if(!isset($_SESSION)){ 
        session_start(); 
    }

    if(!isset($_SESSION["username"])){
        header("Location: login.html");
        exit();
    }

?>