<?php

$serverName = 'localhost';
$username = 'root';
$password = '';
$dbname = "tasks";
//Create connection
$conn = new mysqli($serverName,$username,$password,$dbname);

//Check connection
// if ($conn->connect_error) {
//     die ("Connection failed:" . $conn->connect_error);
// }else{
//     echo "Connected successfully";
// }

?>