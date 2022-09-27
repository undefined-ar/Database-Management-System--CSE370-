<?php
// first of all, we need to connect to the database
require_once('dbconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['username']) && isset($_POST['NID']) && isset($_POST['pass'])){
	// write the query to check if this username and password exists in our database
	$u = $_POST['username'];
	$n = $_POST['NID'];
	$p = $_POST['pass'];
	$q= "select * from user where NID= '$n'";
						$query = mysqli_query($conn,$q);
						
                        
	//Execute the query 
	
    //check if this insertion is happening in the database
	if(mysqli_num_rows($query) == false)
                {
                    $sql = " INSERT INTO user VALUES( '$u', '$n', '$p' ) ";
                        mysqli_query($conn,$sql);
                                   
                                                  
                    echo '<script type="text/javascript">alert("User signup completed.. go to login page to login")</script>';
                }
                else
                {
                    echo '<script type="text/javascript">alert("This NID Already exists.. Please try another NID!")</script>';
                }

        }
        else
        {
            
		}

?>