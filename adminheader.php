<?php
include 'connection.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repairo</title>
    <link rel="icon" type="image/x-icon" href="./Images/logo.png">
    <link rel="stylesheet" href="admin-style.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/lightbox.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="js/lightbox.min.js"></script>
    <script>
      $(document).ready(function(){
      new DataTable('#example');
    });
    </script>
</head>
<body>

<div class="vertical-nav">
    <div class="text-center mb-3">
        <a class="brand" href="index.php"><img src="./Images/logo.png" width="75%"></a>
    </div>
    <ul class="nav-list text-center">
      <li class="list-item"><a href="dashboard.php">Dashboard</a></li>
      <li class="list-item"><a href="dash-contact.php">Contact</a></li>
      <li class="list-item"><a href="dash-feedback.php">Feedback</a></li>
      <li class="list-item"><a href="dash-news.php">Subscribe</a></li>
    </ul>
    <hr class="nav-line" >
    <ul class="nav-list text-center">
      <li class="list-item"><a href="dash-gallery.php">Gallery</a></li>
      <li class="list-item"><a href="dash-video.php">Videos</a></li>
      <li class="list-item"><a href="dash-blogs.php">Blogs</a></li>
    </ul>
</div>


