
<?php
session_start();
include_once "dbh.php";
?>


 <!DOCTYPE html>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css">
<meta charset="UTF-8">
<meta name = "viewport" content = "width=device-width, initial-scale=1">
<meta  http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Amatic+SC|Questrial" rel="stylesheet">
	<title>
		ClosetVirtuso
	</title>
	<style type="text/css">
		body{
		background-color:white ;

	    }
	    .page-header{
	    	font-family:"Abril Fatface" ;
	    	color:grey;
	    	text-align: center;
	    }
	   

	</style>
</head>
<body>






<div class="container-fluid">
	<div class="page-header">
		<h1 style="font-size: 35px;">
<i class="fa fa-circle" aria-hidden="true" style="color: black;"></i> ClosetVirtuoso <i class="fa fa-circle" aria-hidden="true" style="color: black;"></i>
		</h1>
	</div>

	<div class="row">
	<div class="col-xs-2"></div>
	<div class="well col-md-8" id="description" style="background-color: white; border:solid white 4px;">
	<div class="row">
	<div class="col-md-2"></div>
	<p class="col-md-8 text-center" style="font-family:Questrial; color: orange; font-size: 20px">
		Your Closet Organized
	</p>
		

    
  
    </div>
	
<br>
<br>




	<div class="row">
		<div class=" text-center">
		  <h2 style="color:black;
		  font-family: Abril Fatface">
		 Login 
		  </h2>
			<form action="usercheck.php" method="POST"  style="font-family: Questrial;">
		 	<input class="form-control" type="text" name="usernamecheck" placeholder="Enter Username">
            <br>
		 	<input class="form-control" type="Password" name="passwordcheck" placeholder="Enter Password" >
		 	<br>
		 	<div class="row">
		 	<div class="col-md-2"></div>
		 	<div class="col-md-8">

		 	 <button class="btn" type="submit" style="background-color: orange; color: white;" name="login">View your virtual closet!</button>	
		 	</form>


		 	 
		 	<a href="buildacloset.php" style="color: orange; text-align: center;">     Not a user yet?</a> 
		 			 
		 	</div>
		 	<div class="col-md-2"></div>
		 		
		 </form>
		</div>
		

<br>
<br>
<br>
	

</div>
</body>
</html>