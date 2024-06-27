<?php 
session_start();

# Database Connection File
include "db_conn.php";

# Book helper function
include "php/func-book.php";
$books = get_all_books($conn);

# author helper function
include "php/func-author.php";
$authors = get_all_author($conn);

# Category helper function
include "php/func-category.php";
$categories = get_all_categories($conn);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>E-Library</title>

    <!-- bootstrap 5 CDN-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- bootstrap 5 Js bundle CDN-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<nav class="navbar bg-body-tertiary" class="navbar fixed-top bg-body-tertiary>
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="img/header-image.png" alt="Logo" width="45" height="49" class="d-inline-block align-text-top">
      <b>GOVERMENT POLY TECHNIC COLLEGE KANNUR</b>
    </a>
  </div>


  
</nav>

<nav class="navbar navbar-expand-lg navbar-light bg-primary">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="index.php">E-Library</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" 
		         id="navbarSupportedContent">
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		        <li class="nav-item">
		          <a class="nav-link active" 
		             aria-current="page" 
		             href="index.php">Home</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" 
		             href="#">Contact</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" 
		             href="about.php">About</a>
		        </li>
		        <li class="nav-item">
		          <?php if (isset($_SESSION['user_id'])) {?>
		          	<a class="nav-link" 
		             href="admin.php">Admin</a>
		          <?php }else{ ?>
		          <a class="nav-link" 
		             href="login.php">Login</a>
		          <?php } ?>

		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>

<br>

<center>
		<div class="card text-bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">Contact</div>
  <div class="card-body">
    <h5 class="card-title">Email</h5>
    <p class="card-text">kannurgptc@gmail.com</p>
  </div>
</div>
<div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
  <div class="card-header">Contact</div>
  <div class="card-body">
    <h5 class="card-title">Phone</h5>
    <p class="card-text">0497 283 5106</p>
  </div>
</div>


</center>


		<nav class="navbar fixed-bottom  bg-body-tertiary bg-dark">
  <div class="container-fluid" bg-primary>
    <a class="navbar-brand" href="#">Goverment Polytechnic College Kannur</a>
  </div>
</nav>


</body>
</html>