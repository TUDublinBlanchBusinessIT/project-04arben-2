<?php 

$user = $_POST['username']; 
$pass = $_POST['password']; 

include("db_connection.php");

$sql = "INSERT INTO users (username, password) VALUES ('$user', '$pass')";



if (mysqli_query($conn, $sql)) {
    
    echo "<br>New user created successfully!";

} else {

    echo "<br>Error: " . $sql . "<br>" . mysqli_error($conn);

}

mysqli_close($conn); 
?>
