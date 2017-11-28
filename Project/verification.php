<?php
    
    require('connect.php');

    $msg = '';

    if(isset($_POST['register'])){
        
        $username = mysqli_real_escape_string($link, $_POST['username']);
        $f_name = mysqli_real_escape_string($link, $_POST['f_name']);
        $l_name = mysqli_real_escape_string($link, $_POST['l_name']);
        $pass = mysqli_real_escape_string($link, $_POST['pass']);
        $email = mysqli_real_escape_string($link, $_POST['email']);
        $confirm_pass = mysqli_real_escape_string($link, $_POST['confirm_pass']);
        
        
        if((empty($username)) || (empty($f_name)) || (empty($l_name)) || (empty($email)) || (empty($pass)) ||(empty($confirm_pass))){
            
            $msg = "All fields required.";
        }
            
        else if($pass !== $confirm_pass){
            $msg = 'Passwords do no match.';
        }
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $msg = "Invalid Email.";
        }        
        /*else if (strlen($pass) <= 6){
            $msg = "Password must be longer then 6 characters.";
        }*/
        
        // if no error
        if(!isset($msg)){
            
            $query1 = "SELECT * FROM Customer WHERE Username = '$username'";
            $result1 = mysqli_query($link, $query);
            
            if(mysqli_num_rows($result1) > 0){
                $msg = "User exists.";
            }
            else {
                $query2 = "INSERT INTO customer (Username, Password, First_Name, Last_Name, Email) VALUES ('$username', '$pass', '$f_name', '$l_name', '$email')";

                if(mysqli_query($link, query)){
                    $msg = "Sign up successful.";
                }
                else{
                    $msg = "Sign up unsuccessful.";
                }
            }
        }
    }

    mysqli_close($link)

?>