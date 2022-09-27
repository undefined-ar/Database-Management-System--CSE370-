<?php 

require_once('dbconnect.php');


if(isset($_POST['username']) && isset($_POST['password'])){
	// write the query to check if this username and password exists in our database
	$u = $_POST['username'];
	$p = $_POST['password'];
	$sql = "SELECT * FROM userlogin WHERE username = '$u' AND password = '$p'";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if it returns an empty set
	if(mysqli_num_rows($result) !=0 ){
	
		//echo "LET HIM ENTER";
		header("Location: home2.php");
	}
	
		else{
			header("Location: home.php");
	}	
}

?>