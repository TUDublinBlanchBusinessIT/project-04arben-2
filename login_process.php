<?php
session_start();



$user = $_POST['username'];
$pass = $_POST['password'];




include("db_connection.php");


$sql = "INSERT INTO users (username, password) VALUES ('$user', '$pass')";




if (mysqli_query($conn, $sql)) {

    $_SESSION['user'] = $user;

    echo "<br>New user created successfully! You are now logged in as " . $user;

} else {

    echo "<br>Error: " . $sql . "<br>" . mysqli_error($conn);

}

mysqli_close($conn);
?>
