<?php

    // check username and password for admin

    include('connect.php');
    session_start();

    $msg = '';
 
	if(isset($_POST['submit2'])){
		if(empty($_POST['username']) || empty($_POST['pass'])){
			$msg = 'All fields required.';
		}
		else{
		
			$username = $_POST['username'];
			$pass = $_POST['pass'];
            $_SESSION['login_user'] = $username;

			$sql = "SELECT * FROM admin WHERE Username='$username' AND Password='$pass'";
			$result = mysqli_query($link, $sql);
			//$row = mysqli_fetch_array($result);
	
			if(mysqli_num_rows($result) != 0){
				$_SESSION["username"] = $username;	// initialize session
                //$msg = "Welcome " . $username . ". ";
				header("Location: admin.html");	// redirect to admin page after log in
			}
			else{
				$msg = "Incorrect username or password.";
			}
		}
	}

?>