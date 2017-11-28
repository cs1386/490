<?php
        
        include('status.php');

        $flight_num = $_POST['flight_num'];
        $tail_num = $_POST['tail_num'];
        $crew = $_POST['crew'];
        $origin = $_POST['origin'];
        $destination = $_POST['destination'];
        $dept_time = $_POST['dept_time'];
        $arr_time = $_POST['arr_time'];

    	if(isset($_POST['submit'])){ echo "<p>hello</p>";
            
            if(empty($flight_num) || empty($tail_num) || empty($crew) || empty($origin) || empty($destination) || empty($dept_time) || empty($arr_time)){
                
                $msg = 'All fields required.';
                echo $msg;
            }
        
            else{
                // query database

                }
            }



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
                        <li><a href="modify.php">Modify</a></li>
                        <li><a href="advancedsearch.html">Advanced Search</a></li> 
                        <li><a href="advancedflights.html">Advanced Flights</a></li>
                        <li><a href="logout.php">Logout</a></li>					      
                    </ul>
            </div>
        </div>


        <div id="contact">

            <p>FLIGHT DETAILS</p>
            
            <form>               
                <table>
                <thead>
                <tr>
                    <th>Flight Number</th>
                    <th>Tail Number</th>
                    <th>Air Crew</th>
                    <th>Origin</th>
                    <th>Destination</th>
                    <th>Departure Time</th>
                    <th>Arrival Time</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?php echo $flight_num ?></td>
                    <td><?php echo $tail_num ?></td>
                    <td><?php echo $crew ?></td>
                    <td><?php echo $origin ?></td>
                    <td><?php echo $destination ?></td>
                    <td><?php echo $dept_time ?></td>
                    <td><?php echo $arr_time ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                </tbody>
                </table>               
            </form>        

        </div>

        <div id="footer">
            <div id="footer-1"><p>Copyright 2017 Wrong Way. All rights reserved.</p></div>
        </div>
        
    </body>
    
</html>
