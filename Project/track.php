<?php

    include('connect.php');

?>
<!doctype html>
<html class="no-js" lang=""> 
    
    <head> 
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
 
        <title>Wrong Way Airline</title>
	
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="icon" href="img/WWlogo.png">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/table.css">
    </head>
    
    <body>
        
        <div id="wrapper">
        <div id="header">
        <div id="logo">
            <div id = "lg"></div>
            <a href="index.html">
            <div id="name">Wrong Way</div></a>
		</div>
   
		<div id="menu">
            <ul>
                <li><a href="index.html">Home</a></li>
				<li><a href="about.html">About</a></li>
                <li><a href="flight.php">Flights</a></li>
                <li><a href="track.php">Track</a></li>  
				<li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
        </div>
		
	
        <div id="contact">
		<p>We're happy to track your Cargo. Enter your Cargo ID below</p>
		<form method="get" action="" name="track">
        <div id = "form">			
			<div id="edit">
				<input type="text" name="cargo_id" placeholder="Cargo ID">
			</div>
			<div id="submit">
				<input type="submit" name="submit" value="Track">
			</div>
        </div>
            
        <?php
            
            if(isset($_GET['submit'])){
                $cargo_id = $_GET['cargo_id'];
                if(empty($cargo_id)){

                    $msg = 'Cargo ID required.';
                    echo "$msg <br><br>";
                }

                else{
                // query database

                    $sql = "SELECT * FROM Cargo WHERE Cargo_ID='$cargo_id'";
                    $result = mysqli_query($link, $sql);
                    
                    if(mysqli_num_rows($result)==0){
                        echo "No results. <br><br>";
                    }
                    else{
                        $row = mysqli_fetch_array($result);
                        $weight = $row['Weight'];
                        $contents = $row['Contents'];
                        ?>
                        
                        <br>
                        <table>
                        <thead>
                        <tr>
                            <th>Cargo ID</th>                
                            <th>Weight</th>
                            <th>Contents</th>
                            <th>Flight Number</th>
                            <th>Origin</th>
                            <th>Destination</th>
                            <th>Departure Time</th>
                            <th>Arrival Time</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><?php echo $cargo_id ?></td>
                            <td><?php echo $weight ?></td>
                            <td><?php echo $contents ?></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>            
                        </tbody>
                        </table>
                        <br>
                    <?php    
				    }

                }
            }

            ?>
		</form>
        <br><br>
        </div>
        <div id="footer">
            <div id="footer-1">
                <p>Copyright 2017 Wrong Way. All rights reserved.</p>
            </div>
        </div>
        
    </body>
</html>
