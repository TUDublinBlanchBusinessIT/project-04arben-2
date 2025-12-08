<?php
include("db_connection.php"); 
$formUser = $_POST['username'];
$formPass = $_POST['password'];

$sql = "SELECT username, password FROM users WHERE username='$formUser'";
$result = mysqli_query($conn, $sql);


if ($result->num_rows > 0) {
    $row = mysqli_fetch_array($result);
    if (($formUser == $row['username']) && ($formPass == $row['password'])) {
        session_start();
        $_SESSION['username'] = $formUser;
        header("Location: select_movie.php");
        exit();
    }
    else {
        echo "Username and password do not match!";
    }

} 
else {
    echo "There are no users matching that name!";
}
?>
