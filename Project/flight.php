<?php 
    require('connect.php');

    $query = "SELECT * FROM `airport`";
    $result = mysqli_query($link, $query);
?>

<!doctype html>
<html class="no-js" lang=""> 
    
    <head> 
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
 
        <title>Wrong Way Airline</title>
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="icon" href="img/WWlogo.png">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
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
            <div id="grey">
                <p>Available Flights Search</p>
                
                <form method="get" action="" name="flights">
                    <div id="edit">
                        <label>Origin: </label>
                        <select name="origin" required="">
                            <?php
                                while($row1 = mysqli_fetch_array($result)):;
                            ?>
                            <option value="<?php echo $row1[0];?>"> <?php echo $row1['Airport_Code'], ", ", $row1['Airport_Name'];?>
                            </option>
                            <?php endwhile;?>
                        </select>
                    </div>

                    <div id="edit">
                        <label>Destination: </label>
                        <select name="destination" required="">
                            <?php
                                mysqli_data_seek($result, 0);
                                while($row1 = mysqli_fetch_array($result)):;
                            ?>
                            <option value="<?php echo $row1[0];?>">
                                <?php echo $row1['Airport_Code'], ", ", $row1['Airport_Name'];?>
                            </option>
                            <?php endwhile;?>
                        </select>
                    </div>
                    <div id="submit">
                        <input type="submit" name="submit"
                        value="Search">
                    </div>
                    
                    <?php
                        
                        if(isset($_GET['submit'])){
                            $origin = $_GET['origin'];
                            $destination = $_GET['destination'];
                            if(empty($origin) || empty($destination)){
                                echo "Origin and Destination required.";
                            }
                            else{
                                $sql = "SELECT * FROM airport_flights WHERE Origin='$origin' and Destination='#destination'";
                                $result = mysqli_query($link, $sql);

                                if(mysqli_num_rows($result)==0){
                                    $msg = "No results.";
                                    echo "$msg <br><br>";
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
                                        <th>Origin</th>                
                                        <th>Destination</th>
                                        <th>Flight Number</th>
                                        <th>Departure Time</th>
                                        <th>Arrival Time</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><?php echo $origin ?></td>
                                        <td><?php echo $destination ?></td>
                                        <td><?php echo $Flight_Number ?></td>
                                        <td><?php echo $Dept_Time ?></td>
                                        <td><?php echo $Arr_Time ?></td>
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
                
       </div>
        </div>

        <div id="footer">
                <div id="footer-1">
                    <p>Copyright 2017 Wrong Way. All rights reserved.</p>



        </div>
        </div>	
        
    </body>
</html>
