<?php
session_start();



$user = $_POST['username'];
$pass = $_POST['password'];




include("db_connection.php");





$sql = "INSERT INTO users (username, password) VALUES ('$user', '$pass')";

if (mysqli_query($conn, $sql)) {

    $_SESSION['user'] = $user;



    header("Location: select_movie.php");
    exit(); 

} else {



    echo "<br>Error: " . $sql . "<br>" . mysqli_error($conn);

}

mysqli_close($conn);
?>
