<?php 
$server = "sql206.hstn.me";
$user = "mseet_28198462";
$pass= "Peter2200";
$db ="mseet_28198462_f2h";

//creating connection
$conn = new mysqli($server, $user, $pass, $db);
//checking connection
if ($conn->connect_error) {
	die("Connection failed : " . $conn->connect_error);
}
// echo "successfully Connected";
 ?>