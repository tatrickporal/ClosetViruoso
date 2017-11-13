<?php
session_start();
include_once "dbh.php";
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

<title>Virtuoso</title>

	<style type="text/css">
    @media screen and (max-width: 400px) /* Mobile */ {
    #header{
    	font-size: 18px;
    }
    }


	body{
		background-color: white;
	}
	.well{
    background-color: rgba(255,255,255,.1);
    }	
    .label{
    	background-color: black;
    	
    }
    .btn:hover{
      background-color: black;
    }
    
	</style>
	</head>
	<body>

<div class="container-fluid">

	<div class="page-header text-center">

		<h1 style="color: grey; font-family: Abril FatFace">
    
	      <i class="fa fa-circle" aria-hidden="true" style="color: black;"></i><a href="closetvirtuosoV2.php" style="color: grey;"> Register </a><i class="fa fa-circle" aria-hidden="true" style="color: black;"></i>

		</h1>


	</div>
    


 <form action="signup.php" method="POST">

<br>

  		</div>
  	 </div>
  	   	 	 <div class="row">
  	   <div class="col-md-2"></div>
  		<div class="col-md-8" style="font-family: Questrial;" >
		<div class="input-group margin-bottom-sm">
  <span class="input-group-addon" style="background-color: orange;"><i class="fa fa-user fa-fw"></i></span>
  <input class="form-control" type="text" name="username" placeholder="Username">
</div>
</div>


<div class="col-md-2"></div>
  	
  	 </div>
     <br>
  	   	 <div class="row">
  		 
  	   <div class="col-md-2"></div>
  		<div class="col-md-8" style="font-family: Questrial;" >
		<div class="input-group margin-bottom-sm">
  <span class="input-group-addon" style="background-color: orange;"><i class="fa fa-key fa-fw"></i></span>
  <input class="form-control" type="password" name="password" placeholder="Password">
</div>

<div class="col-md-2"></div>
  		</div>
  	 </div>
  
  	 <div class="row ">
  	 
  	 	<div class="text-center">
  	 	 <button class="btn btn-lg btn-social-icon" type="submit" style="margin-top: 25px; font-size: 20px; font-family: Questrial; background-color: orange; color:white;">Sign Up!</button>	
  	 	</div>
  	 </div>
 </div>
 </form>






</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>	
</body>
</html>