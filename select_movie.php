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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>


<br><br><br>
<h1>Select a Movie</h1>




<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
    Select a Movie
  </button>




  <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Movie 1</a>
      <a class="dropdown-item" href="#">Movie 2</a>
      <a class="dropdown-item" href="#">Movie 3</a>
      <a class="dropdown-item" href="#">Movie 4</a>
  </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
