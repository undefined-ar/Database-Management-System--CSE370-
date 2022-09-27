<?php
// first of all, we need to connect to the database
require_once('dbconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])&& isset($_POST['phone'])&& isset($_POST['date'])&& isset($_POST['number_of_guest'])&& isset($_POST['food_service'])){
    // write the query to check if this username and password exists in our database
    $u = $_POST['username'];
    $p = $_POST['password'];
    $e = $_POST['email'];
    $m = $_POST['phone'];
    $d = $_POST['date'];
    $n = $_POST['number_of_guest'];
    $f = $_POST['food_service'];
    $d = date_create($d);
    $d = date_format($d,"Y-m-d");

    $sql = " INSERT INTO booking (username,password,email,phone,date,number_of_guest,food_service)  VALUES( '$u', '$p', '$e', '$m', '$d', '$n', '$f' ) ";

    //Execute the query
    $result = mysqli_query($conn, $sql);

    //check if this insertion is happening in the database
    if(mysqli_affected_rows($conn)){
        echo "Hey! Your message have been sent";
        //header("Location: show_students.php");
    }

}


?>
