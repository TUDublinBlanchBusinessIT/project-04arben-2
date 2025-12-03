<?php
$servername = "localhost";
$username = "Arben";
$password = "aribenBo2004";
$dbname = "cinema_db";
$port = 3306;

$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully to the database!";
}

mysqli_close($conn);
?>
