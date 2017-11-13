<?php
 session_start();
 include_once 'dbh.php';
?>

<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="style.css" rel="stylesheet" type="text/css">
<meta charset="UTF-8">
<meta name = "viewport" content = "width=device-width, initial-scale=1">
<meta  http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Amatic+SC|Questrial" rel="stylesheet">
	<title>Closet Directory</title>
<style type="text/css">
	body{
		background-color: white;
	}
</style>
</head>
<body>
<div class="container-fluid" >
		<div class="page-header">
		<a href="closetvirtuosoV2.html">
		<h1 style="font-size: 43px; text-align: center;">
<i class="fa fa-circle" aria-hidden="true" style="color: black;"></i> <i class="fa fa-circle" aria-hidden="true" style="color: black;"></i> <i class="fa fa-circle" aria-hidden="true" style="color: black;"></i>
		</h1>
		</a>
	</div>
	<h1 class="text-center" style="color: grey; font-family: Abril Fatface; font-size:40px;">
	Welcome, 
  <span style="color:black;">
  <?php

    if($_SESSION["logged_in"] == true){
      $username = $_SESSION['naam'];
      echo " ".$username;

    }
  ?>
  </span>
	</h1>
	<br>
	<br>



 <div class="row">

  <div class="col-md-6 text-center" style="color: white; font-family: Questrial">
    <a href="closetV2.php" style="color: white;">
   <div class="well center-block" style="background-color: orange; height:150px; width:375px;">
  	<p style="margin-top: 40px; font-size: 23px;">
  		View your Closet!
  	</p>
  	</div>
  </div>
  </a>

  <div class="col-md-6 text-center">
  <a href="upload.php" style="color:white;">
  <div class="well center-block" style="background-color: orange; height:150px; width:375px;">

  	<p style="font-size: 23px; color: white; margin-top: 25px;">
  		Upload a photo of your clothes to configure outfits
  	</p>
  	
  </div>
  </a>
  </div>


 </div>
</div>

</body>
</html>