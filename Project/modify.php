<!doctype html>
<html> 
    
    <head> 
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
 
        <title>Wrong Way Airline</title>
	
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="icon" href="img/WWlogo.png">
        <link rel="stylesheet" href="css/main.css">
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
		

        <div id="contact" style="height: 1700px;">

        <p>MODIFY</p>
        <form>
            <div id = "edit">
            <label>Select an option to modify </label>
            <select name="search_option" onchange="this.form.submit()">
                <option selected=""></option>
                <option value="1">Flights</option>
                <option value="2">Cargo</option>
                <option value="3">Aircraft</option>
                <option value="4">Aircrew</option>
                <option value="5">Airport</option>
            </select>
            </div>
            <br>
            <?php
              if(isset($_GET['search_option'])){
                  $search_option = $_GET['search_option'];
                  
                  switch($search_option){
                      case('1'):
                         
                          ?>
                          
                            <p style="text-align: left;">Add/Edit/Delete Flight</p>
                            <div id = "edit">

                             <label>Flight Number: </label><input type="text" name="flight_num">
                             </div>
                             <div id="edit">
                             <label>Tail Number:</label><input type="text" name="tail_num">
                             </div>
                             <div id="edit">
                             <label>Air Crew:</label><input type="text" name="crew_id">
                             </div>
                             <div id="edit">
                             <label>From Airport:</label>
                              <select name="origin">
                              <option value="nyc"><p> New York (NYC), USA</option>
                            </select> 
                             </div>
                             <div id="edit">
                             <label>To Airport:</label>
                              <select name="destination">
                              <option value="nyc"><p> New York (NYC), USA</option>
                            </select> 
                             </div>
                             <div id="edit">
                             <label>DepartureTime:</label><input type="text" name="dept_time">
                             </div>
                             <div id="edit">
                             <label>Arrival Time:</label><input type="text" name="arr_time">
                             </div>
                             <div id="edit">
                             <label>Cargo Carried:</label><input type="text" name="cargo_id">
                             </div>

                             <div id="edit">
                             <label>Like To: </label>
                              <select name="task">
                              <option value="add">Add </option>
                              <option value="edit">Edit </option>
                              <option value="delete">Delete </option>
                            </select>
                                 <div id="submit">
                                    <input type="submit" name="edit_flight" value="Submit">	
                                </div>
                             </div>
            <?php
                    // add, edit, delete
                    
                          
                          
                          
                
                    // end add, edit, delete
                      break;
                      
                      case('2'):
                          
                          ?>
                
                          <div id = "edit">
                              <p style="text-align: left;">Add/Edit/Delete Cargo</p>
                              <label>Cargo Id:</label><input type="text" input="text">
                          </div>
                          <div id="weight">
                            <label>Weight:</label><input type="text" input="text">
                          </div>
                          <div id="contents">
                            <label>Contents:</label><input type="text" input="text">
                          </div>
                          <div id="edit">
                            <label>Like To: </label>
                            <select name="task">
                                <option value="add"><p> Add </option>
                                <option value="edit"><p> Edit </option>
                                <option value="delete"><p> Delete </option>
                            </select>
                         </div>
                         <div id="submit">
                             <input type="submit" name="edit_cargo" value="Submit">
                         </div>
            
            <?php
                          
                    // add, edit, delete
                    
                          
                          
                          
                
                    // end add, edit, delete
                      break;
                          
                      case('3'):
                          
                          ?>
                
                          <div id="edit">
                             <p style="text-align: left;">Add/Edit/Delete Aircraft</p>
                             <label>Tail Number: </label><input type="text" input="text">
                          </div>
                          <div id="edit">
                             <label> Aircraft Type: </label><input type="text" input="text">
                          </div>
                          <div id="edit">
                             <label> Fuel Amount:</label><input type="text" input="text">
                          </div> 
                          <div id="edit">
                              <label>Like To: </label>
                              <select name="task">
                                  <option value="add"><p> Add </option>
                                  <option value="edit"><p> Edit </option>
                                  <option value="delete"><p> Delete </option>
                              </select>
                          </div>
                          <div id="submit">
                              <input type="submit" name="edit_aircraft" value="Submit">
                          </div>
            <?php
                    // add, edit, delete
                          
                          
                          
                    
                          
                
                    // end add, edit, delete
                      break;
                          
                      case('4'):
                          
                          ?>
                          <div id="edit">
                             <p style="text-align: left;">Add/Edit/Delete Air Crew</p>
                             <label>Crew Id: </label><input type="text" input="text">
                          </div>
                          <div id="edit">
                              <label> Pilot Name: </label><input type="text" input="text">
                          </div>
                          <div id="edit">
                              <label> Navigator: </label><input type="text" input="text">
                          </div>
                          <div id="edit">
                            <label>Like To: </label>
                            <select name="task">
                                <option value="add"><p> Add </option>
                                <option value="edit"><p> Edit </option>
                                <option value="delete"><p> Delete </option>
                            </select> 
                          </div>
                          <div id="submit">
                              <input type="submit" name="edit_aircrew" value="Submit">	
                          </div>
            
            <?php
                    // add, edit, delete
                    
                          
                
                          
                          
                    // end add, edit, delete                    
                      break;
                          
                      case('5'):
                          
                          ?>
                          <div id="edit">
                              <p style="text-align: left;">Add/Edit/Delete Airport</p>
                              <label>Airport Code: </label><input type="text" input="text">
                          </div>
                          <div id="edit">
                             <label> Airport Name: </label><input type="text" input="text">
                          </div>
                          <div id="edit">
                              <label>Like To: </label>
                              <select name="task">
                                  <option value="add"><p> Add </option>
                                  <option value="edit"><p> Edit </option>
                                  <option value="delete"><p> Delete </option>
                              </select> 
                          </div>
                          <div id="submit">
                              <input type="submit" name="edit_airport" value="Submit">	
                          </div>
            
            <?php
                    // add, edit, delete
                    
                          
                
                          
                          
                    // end add, edit, delete
                      break;
                  }
              }
            ?>
            
            
        </form>
        </div>

                <div id="footer" >
                    <div id="footer-1">
                        <p>Copyright 2017 Wrong Way. All rights reserved.</p>
                    </div>
                </div>	
        
    </body>

</html>