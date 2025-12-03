<?php

$servername = "localhost";     
$username = "Arben";           
$password = "ArBu_2004wot";    
$dbname = "cinema_db";
$port = 3306;


date_default_timezone_set('Europe/Dublin');


$conn = mysqli_connect($servername, $username, $password, $dbname, $port);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
