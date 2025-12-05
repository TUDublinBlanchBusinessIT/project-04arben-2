<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit();

}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Select Movie</title>
</head>
<body>
    <h1>Welcome to Movie Selection</h1>
    <p>Please select a movie from the list below.</p>
</body>
</html>
