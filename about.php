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

	<style>
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
</style>

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
		             href="contact.php">Contact</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" 
		             href="#">About</a>
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

		<h1 style="text-align:center;">Goverment Polytechnic College Kannur</h1> <hr>
  
		<img src="img/banner.jpg" style="width:50%;">


<p>
Govt. Polytechnic College, Kannur is situated at Thottada in Kannur Corporation. Thottada is known as the Educational Head Quarters of the Kannur district. A Lot of educational institutions such as ITI, ITI (women) ,ITI Regional Directorate, THS, SN College, Chinmaya Institute of Technology, National Institute of Handloom and Textile Technology, SN Trust Higher Secondary School, St.Francis EM Shcool etc are located around the Institution. Kannur is a hub of industries of various kinds. Keltron provides opportunities for the students of Electronics. Traco cables newly set up in Pinarayi will be absorbing the Electronics Engineering Students. Rubco factory in Thalassery and Western India Plywoods Baliapatam provides placement for Wood and paper Technology. Thottada has very recently harbored many automobile ventures of various companies, this increases the Demand of persons from Mechanical branch, lot Textile industries are spread over the surroundings of the polytechnic.
</p>
<p>
Kannur Goverment Polytechnic was started in the year 1958 with a view to create ample chances for the educated peoples to technical training and hence to increase the pool of specially trained, employed technicians. In the beginning there were 3 year diploma courses in Civil Engineering, Mechanical Engineering and Electrical Engineering. Kannur is so called the looms and lores hence the 3 year diploma in Textile Technology and Wood & Paper Technology were started later in the year 1982. A new diploma courses on Electronics was started on 1987.

At present there are 6 Diploma courses viz. Civil Engineering, Mechanical Engineering, Govt. Polytechnic College, Kannur is one of the biggest Institution in Kannur District, The College Provides hostel facility for boys.
</p>
<center>
<div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
  <div class="card-header">Website Developed by</div>
  <div class="card-body">
    <h5 class="card-title">Amal Sajeev</h5>
    <p class="card-text">amalsajeev2000@yahoo.in</p>
  </div>
</div>

</center>
<nav class="navbar sticky-bottom  bg-body-tertiary bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Goverment Polytechnic College Kannur</a>
  </div>
</nav>
</body>
</html>