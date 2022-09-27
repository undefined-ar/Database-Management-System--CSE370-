<?php
// first of all, we need to connect to the database
require_once('dbconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['username']) && isset($_POST['pass'])){
	// write the query to check if this username and password exists in our database
	$u = $_POST['username'];
	$p = $_POST['pass'];
	$sql = "SELECT * FROM user WHERE username = '$u' AND password = '$p' ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if it returns an empty set
	if(mysqli_num_rows($result) !=0 ){
	
		header("Location: home2.php");
	}
	else{
		header("Location: home.php");
	}
	
}



?>

