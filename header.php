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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bacasime+Antique&family=Chela+One&family=Roboto+Condensed:ital,wght@0,400;0,700;1,300&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
  

<div class="container-fluid above-nav"></div>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top  ">
        <div class="container">
        <a class="navbar-brand " href="index.php"><span class="text-danger">Rep</span>airo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mt-2">
                  <a class="nav-link nav-top" href="index.php#">HOME</a>
                </li>
                <li class="nav-item mt-2">
                  <a class="nav-link nav-top" href="index.php#about">ABOUT</a>
                </li>
                <li class="nav-item mt-2">
                  <a class="nav-link nav-top" href="index.php#services">SERVICES</a>
                </li>
                <li class="nav-item mt-2">
                  <a class="nav-link nav-top" href="index.php#testimonial">TESTIMONIAL</a>
                </li>
                <li class="nav-item mt-2">
                  <a class="nav-link nav-top" href="blogs.php">BLOGS</a>
                </li>
                <li class="nav-item mt-1">
                <div class="buttons-container">
                <a href="contact.php" class="button contact-feedback"></a>
                  </div>
                </li>
            </ul>
          </div>
        </div>
      </nav>