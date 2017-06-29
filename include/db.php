<?php
$servername = "127.0.0.1";
$username = "root";
$password = "Shabad@97";
$dbname = "tattoo_shop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// else{
// 	echo "Success";
// }

