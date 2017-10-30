<?php

    include('status.php');
    include('connect.php');

    $msg = '';  // error msg

    if(isset($_POST['submit'])){
        
        // check if search criteria is not empty then assign
        if(!empty($_POST['tail_num'])){
            $tail_num = $_POST['tail_num'];    
        }
        if(!empty($_POST['crew_id'])){
            $crew_id = $_POST['crew_id'];    
        }
        if(!empty($_POST['origin'])){
            $tail_num = $_POST['origin'];    
        }
        if(!empty($_POST['destination'])){
            $tail_num = $_POST['destination'];    
        }
        
        // search query
        
        
        
        
        
        
    }

?>


