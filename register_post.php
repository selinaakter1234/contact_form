<?php
//db info
$db_host_name = "localhost";
$db_user_name = "root";
$db_password = "";
$db_name ="cit7";

//db connection
$db_connect = mysqli_connect($db_host_name, $db_user_name,$db_password, $db_name);
//information from form 
echo $first_name = $_POST['first_name']; echo "<br>";
echo $last_name = $_POST['last_name']; echo "<br>";
echo $email = $_POST['email']; echo "<br>";
echo $password = $_POST['password']; echo "<br>";
echo $present_address = $_POST['present_address']; echo "<br>";
echo $permanent_address = $_POST['permanent_address']; echo "<br>";
echo $city = $_POST['city']; echo "<br>";
echo $state = $_POST['state']; echo "<br>";
echo $zip = $_POST['zip']; echo "<br>";

// //insert query
$insert_query = "INSERT INTO users_info (first_name, last_name, email, password, present_address, Permanent_address,city, state ,zip )
 VALUES ('$first_name','$last_name','$email','$password','$present_address','$permanent_address','$city','$state','$zip')";



//SELECT * FROM `users` 
mysqli_query($db_connect, $insert_query);

?>