<?php
session_start();
include_once "dbh.php";
?>

<!DOCTYPE html>
<html>
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
	.well{
		background-color: white;
		border-color: white;
	}
</style>
</head>
<body>
<div class="container-fluid">
		<div class="page-header">
		<a href="closetvirtuosoV2.php">
		<h1 style="font-size: 43px; text-align: center;">
<i class="fa fa-circle" aria-hidden="true" style="color: black;"></i> <i class="fa fa-circle" aria-hidden="true" style="color: black;"></i> <i class="fa fa-circle" aria-hidden="true" style="color: black;"></i>
		</h1>
		</a>
	    </div>

        <div class="row">
            <p class="text-center" style="font-family:Questrial; color: orange; font-size: 16px">
            *Only jpg jpeg png and pdf formats allowed*
            </p>
            
        </div>
    
 <div class="row">
    <div class="col-xs-4 well text-center">
    	<h2 style="font-family: Abril Fatface; color: grey;">
    		Shirts
    	</h2>
    	<br>
    	<form action="upload.php" method="POST" enctype="multipart/form-data">
    		<input class="center-block form-control" type="file" name="shirts">
    		<br>
    		<input class="form-control" type="text" name="shirtbrand" placeholder="Enter the Brand"><br><br>
    		<input class="form-control" type="text" name="shirtcolor" placeholder=" Color?">
    		<br><br>


    </div>	
    <div class="col-xs-4 well text-center">
    	<h2 style="font-family: Abril Fatface; color: grey;">
    		Pants
    	</h2>
    	   <br>
    		<input class="center-block form-control"  type="file" name="pants">
    		<br>
    		<input class="form-control" type="text" name="pantsbrand" placeholder="Enter the Brand">
    		<br><br>
    		<input class="form-control" type="text" name="pantscolor" placeholder=" Color?">
    		<br><br>
    
  	
    </div>
    <div class="col-xs-4 well text-center">
    	<h2 style="font-family: Abril Fatface; color: grey;">
    		Shoes
    	</h2>  
    	<br>
    	    
    		<input class="center-block file file-loading form-control"  type="file" name="shoes">
    		<br>
    		<input class="form-control" type="text" name="shoebrand" placeholder="Enter the Brand">
    		<br><br>
    		<input class="form-control" type="text" name="shoescolor" placeholder=" Color?">
    		<br><br>
    </div>
        <div class="row">
        <div class="col-xs-4"></div>
            <div class="col-xs-4 text-center">
            <button class="btn " type="submit"  name="submit" style="background-color: orange; color: white; font-family: Questrial;">Upload Clothes </button>
            </div>
            <div class="col-xs-4"></div>
        </div>
    </form>
    </div>
 </div>
    


	
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>	
</body>
</html>