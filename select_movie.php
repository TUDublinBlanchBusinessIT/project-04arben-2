<?php
session_start();


if (!isset($_SESSION['user'])) {
    header("Location: register.html");
    exit();
}
$user = $_SESSION['user'];
include("db_connection.php");


$sql = "SELECT * FROM movies";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<h3>Welcome, <?php echo $user; ?>!</h3>
<br><br><br>
<h1>Select a Movie</h1>




<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
    MOVIES
  </button>




  <div class="dropdown-menu">
       <a class="dropdown-item" href="#"><?php echo $row['title']; ?></a>

  </div>
</div>
<br>
<h5>!!!Currently we have 1 movie available!!!</h5>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
