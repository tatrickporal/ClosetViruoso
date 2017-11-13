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
	<title>Closet Directory</title>
<style type="text/css">
    @media screen and (max-width: 600px) /* Mobile */ {
    #header{
    	font-size: 18px;
    }
    #SO{
    	font-size:15px;
    }
    }

    #SO{
    	font-size:25px;
    }
	body{
		background-color: white;
	}
	#picture-well{
	
		border-top:solid black solid 5px;
	}
</style>
</head>
<body>
<div class="container-fluid" >
		<div class="page-header">
		<a href="closetvirtuosoV2.php">
		<h1 style="font-size: 43px; text-align: center;">
<i class="fa fa-circle" aria-hidden="true" style="color: black;"></i> <i class="fa fa-circle" aria-hidden="true" style="color: black;"></i> <i class="fa fa-circle" aria-hidden="true" style="color: black;"></i>
		</h1>
		</a>
	</div>
	<h1 class="text-center" style="color: grey; font-family: Abril Fatface; font-size:40px; border-top:;">
	  <span style="color:black;">
  <?php
      echo  $_SESSION['naam'];  
  ?>
  </span>'s Closet
	</h1>
	<a style="color: white;" href="uploadpage.php">
	<button class="btn center-block" style="font-size:18px;margin-top:25px; font-family:Questrial; color: white; background-color: orange;">Upload Clothes</button>
	</a> 

   <div class="row">
   		<div class="col-xs-4 text-center">
   			<h2 style="color: black; font-family: Abril Fatface; font-size: 25px">
   				Shirts
   			</h2>
   			   			<div class="row">

   			<div class="well center-block text-center" style=" background-color: white; border-top:solid orange 2px; margin-left: 10px; margin-right: 10px; height:100px; overflow: auto; border-left:white solid; border-right:white solid; border-bottom:black solid 1px;">

<?php
  $previousid = 0;
  $resultShirts = mysql_query("SELECT * FROM shirtsimg WHERE userid = '".$_SESSION['id']."' AND id > '".$previousid."'");
  $rowShirts = mysql_fetch_row($resultShirts);
  echo "<form method='post' action='statusupdate.php'><button class='btn' style=' background-color: white; width:140px;  overflow:auto; color: orange; border:solid orange 2px;' name='shirtsbutton' value='".$rowShirts[0]."'>".$rowShirts[4]."</button><br>";

  $previousid = $rowShirts[0];
    while($rowShirts){
      $resultShirts = mysql_query("SELECT * FROM shirtsimg WHERE userid = '".$_SESSION['id']."' AND id > '".$previousid."'");
      $rowShirts = mysql_fetch_row($resultShirts);
      $previousid = $rowShirts[0];
      echo "<button class='btn' style='background-color: white; margin-top:3px; color: orange; white; width:140px;  overflow:auto; border:solid orange 2px;' name='shirtsbutton' value='".$rowShirts[0]."'>".$rowShirts[4]."</button>";
      echo "<br>";
     }
     echo "</form>"
?>
   				
   			</div>
   			</div>
   		</div>
   		<div class="col-xs-4 text-center">
   		   	<h2 style="color: black; font-family: Abril Fatface; font-size: 25px">
   				Pants
   			</h2>
   			<div class="row">

   			<div class="well center-block text-center" style=" background-color: white; border-top:solid orange 2px; margin-left: 10px; margin-right: 10px; height:100px; overflow: auto; border-left:white solid; border-right:white solid; border-bottom:black solid 1px;">
<?php
  $previousid = 0;
  $resultPants = mysql_query("SELECT * FROM pantsimg WHERE userid = '".$_SESSION['id']."' AND id > '".$previousid."'");
  $rowPants = mysql_fetch_row($resultPants);
  echo "<form method='post' action='statusupdate.php'><button class='btn' style=' background-color: white; width:140px;  overflow:auto; color: orange; border:solid orange 2px;' name='pantsbutton' value='".$rowPants[0]."'>".$rowPants[4]."</button><br>";

  $previousid = $rowPants[0];
    while($rowPants){
      $resultPants = mysql_query("SELECT * FROM pantsimg WHERE userid = '".$_SESSION['id']."' AND id > '".$previousid."'");
      $rowPants = mysql_fetch_row($resultPants);
      $previousid = $rowPants[0];
      echo "<button class='btn' style='background-color: white; margin-top:3px; color: orange; white; width:140px;  overflow:auto; border:solid orange 2px;' name='pantsbutton' value='".$rowPants[0]."'>".$rowPants[4]."</button>";
      echo "<br>";
     }
     echo "</form>"
?>
   				
   			</div>
   			</div>
   		</div>   		
   		<div class="col-xs-4 text-center">
   			<h2 style="color: black; font-family: Abril Fatface; font-size: 25px">
   				Shoes
   			</h2>
   			   			<div class="row">

   			<div class="well center-block text-center" style=" background-color: white; border-top:solid orange 2px; margin-left: 10px; margin-right: 10px; height:100px; overflow: auto; border-left:white solid; border-right:white solid; border-bottom:black solid 1px;" >
<?php

  $previousid = 0;
  $resultShoes = mysql_query("SELECT * FROM shoesimg WHERE userid = '".$_SESSION['id']."' AND id > '".$previousid."'");
  $rowShoes = mysql_fetch_row($resultShoes);
  echo "<form method='post' action='statusupdate.php'><button class='btn' style=' background-color: white; width:140px;  overflow:auto; color: orange; border:solid orange 2px;' name='shoesbutton' value='".$rowShoes[0]."'>".$rowShoes[1]."</button><br>";

  $previousid = $rowShoes[0];
    while($rowShoes){
      $resultShoes = mysql_query("SELECT * FROM shoesimg WHERE userid = '".$_SESSION['id']."' AND id > '".$previousid."'");
      $rowShoes = mysql_fetch_row($resultShoes);
      $previousid = $rowShoes[0];
      echo "<button class='btn' style='background-color: white; margin-top:3px; color: orange; white; width:140px;  overflow:auto; border:solid orange 2px;' name='shoesbutton' value='".$rowShoes[0]."'>".$rowShoes[1]."</button>";
      echo "<br>";
     }
     echo "</form>"
?>
   				
   			</div>
   			</div>
   		</div>
   </div>

<div id="picture-well" class="well row" style="background-color: white; ">
 	<h1>
 		
<!-- Shirt icon by Icons8 -->
<img class="icon icons8-Shirt center-block" style="background-color: orange; border-radius: 50%;r;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAD30lEQVRoQ+2Zj5EOQRDF30WACLgIEAEi4CJABIgAESACLgJEgAgQASJABNRva95Wf3PzZ/d26/uu2Knaqtvdnpn3uvv19H53pH9kHK3M44aku5JuS7qWrrjFd0lcHyW9l/Rlrf3XInJZ0gdJEJkzIHJH0q85k0q2axF5KelR2uBU0rvk+dzjECVS9yTdT/avJD2+CERII6Lh8VzSsw4w3j8NNkSFdDv3WBIRtIBnuUitT5JupTQ5bqQLtt8Kc4giF9qZPeYSycHHDfEqnoYMgE4qaN4m8hDHPkaTKehlNqmpRMjt15mYf6QNeQf4J+keXVxKqYJ2AMzABi2Qir/TWkTzRbJhHvdXgwN49nBKdZtCBKB4jZTwwNt4jQE4wCDyBwkg7yKgGBwcAGBAYkeUcQKkGbwjah5EiGg3S3WPSCRB7nIGUJ2ioLH5nN6hDQaViWeRvNPmZrLlHq1gyzMDjY5hPkS7ZFpEWAQwbGRv21uQ4u/oNdLJIveZ8jWlEnZUpesJMB626EmzSNil3M56k0o1ToRw8cxpEfGCgPFBZ++T9+S6R0wRzgfsTMIbAzaSwTkxJb0WNugplmSihROqZ06NCFEg7IwYdu7/pOdxrtPBYHISfh7J+BlixustInYgNkSd6OyMGhGH0ykVJ5WIxI1qJGpkcmDWTf68hUklInjtZ9q1xN6hz99ZrKRcr3dyZNgm789KjsLOWcLaZw7cEhFKKGdGroNW6PNIL7mvEXHBQD95OhYjQqXCS2eME7qSGJcAz+e2iNjJRB/tjiOPiMOXl8Q455BEwEFqudSPos+JuOSWRG4yFuPijrUSxpoGbW7R75TinEjppJ0T+jVSrBfxUiexoxGf2vRCpFhpeJGWzVIyzoqaRlmflKKXG3u+GBGHLDZwOSh/ELVSbykRC7r15Zg3qmNE4sdO8eTMGsH8tF8KPs6P50VsMGs2w5niiPTODhahEXR/1eualxJzCUYvFJXSsJaGFDQgN321vMy/EfZFBALx2ycSsvOHThxAsSW5UmgvYjvvhfZJpNa+7+AG0A6zQgwtcP+4gMm+iHjP2i8zYyYBqFWtYhEgV/1Dwb6IeM9ioxg/swHUOgQdDX8RtvqgpQKP8+M+9nopKuPhCJEWONp5ouKSfAgisRyj4WKn0SOSAz8EEYC39h3ebUTWFEQtXUJ13CJiJ20aWZh6cxy4iX2fLYo7iE3sm9gXivw8DtzEfuHF3sqKKdVjpawalqmdI9U9AOiP+JpR/O/UobrfLsa5X3qHItKN9n9PpOuhlQwmO3qyYQLWy9WV8A/L5P85bq49l8iaQFdd6y+o0mbSOuRxrAAAAABJRU5ErkJggg==" width="50" height="50">

 	</h1>

  <p class="text-center" id ="shirtsimage">
  <?php   
  $resultShirtsCheck = mysql_query("SELECT * FROM shirtsimg WHERE userid = '".$_SESSION['id']."' AND status = '0' ");
  $rowShirtsCheck = mysql_fetch_row($resultShirtsCheck);
  echo " <img height='403px' width='302px' src='data:image;base64,".$rowShirtsCheck[3]."'>";
  ?>
  </p>

 </div>
<div id="picture-well pants"  class="well row" style="background-color: white">
 	<h1>
 	 <!-- Trousers icon by Icons8 -->
<img class="icon icons8-Trousers center-block" style="background-color: orange; border-radius: 50%;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAACiUlEQVRoQ+2a4XEVMQyEv1RAqADSQagAqADoIFQQOgA6gAqgA6ACQgVABdBBoAKYZU4Zj8d3tzqSFxGef73JyD6tVvbKcg7IjXfA49yUzdbvgSfu7APXcLL7lbT/W3PbP9uwA5KdlwUUAbO/YxveVCDZCG+1twNtG/4ve+Qu8A34Chyb4f8O3AGOAP1ux7XtkQfAR+BD4ng+A+4DDwH9LgHkFXAKvARemIzI7jnwGnhWBcg5cDiTJnO4Ih2VVkqva2ck2PgEKMUyI9KrZ2Xne0TpJCA/JxBfMiimg+HzNOcp8HarXm09flVvKa+DgdaJJBZOgDfTJDGkwKjO0rD9sw1ndERMyJH4cBZE2CswYuNWt4Dtn23YAdF+kPP6+I8V77WpdRCspZ1sFBSB0rG8E0YyAdCJpnE7QdfON/uab4pyC2SNvVivHJBQfDk4UvC5QOyBrKXIVsqjDNH8TPlSjpEbA0RH9KOJzkxlXI6RqKWEJVOLlQOiy5YEUWNU5f4zp1bfPnKFtBQjrRhG5KXujiiWAhJiqL2hMXetHaXXHshVCGJ7J9f6mTt9KUYCiBRdQ40GV91LAQkx1O1RQ7dAVxRLAWn7VgKivpcriqWAhBjemxhRk8EVxVJAemcyzmVs/8TJVdpsGd+KYXwjnHNEsQyQVgyjZbTU6+2P/z2QyxbEUYM60+guw0grhtGdH/2tfBnfimH0c6M16ohiGUZGG3t0AJRnpBXDaJXqSc4VxTKMzDniOujaXTB6FYI4EsNeUNdEsQSQpb3giuIeyGUK4tJrrSuKJRhZEj5XFHcGxGFw9K7Yvhc6a9iHkW04fbXt5S45ordF6Ub/rxnqOkpX+rfC0VpOBXAx7zcVReczkkp1rgAAAABJRU5ErkJggg==" width="50" height="50">
 	</h1>

<p class="text-center" id ="pantsimage">

  <?php
  $resultPantsCheck = mysql_query("SELECT * FROM pantsimg WHERE userid = '".$_SESSION['id']."' AND status = '0' ");
  $rowPantsCheck = mysql_fetch_row($resultPantsCheck);
  echo " <img height='403px' width='302px' src='data:image;base64,".$rowPantsCheck[3]."'>";
  ?>

</p>
 	
 </div>
<div id="picture-well shoes"  class="well row" style="background-color: white">
 	<h1 class="text-center">
 		<!-- Men`s Shoe icon by Icons8 -->
<img class="icon icons8-Men`s-Shoe center-block" style="background-color: orange; border-radius: 50%;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAACtUlEQVRoQ+2YjU3cQBSEhwpCB4QKgAogFSRUkKMCoAKggiQVhFQAVBBSQaACoAKgAtCHdk4rx4ft9W7OOu2TLB3n/Xkz8/6ONa2Ira0IDlUgU1OyKlIVKcRADa1CxCYfWxVJpq7QxqpIIWKTj82tyLqkLUm3kp6SvUrYmBvIX0nbkm4kffqfYHICmUn6GZGJIoABVHHLCeRO0kdJx5K+SNoNivD3eWkkMRCHxaUknl8DLv8u6TDkBqGF4fzX8PlU0tmA8wYvNZA9Sb8bu++DMz86Yh0AAMF2GqF0JOlbeAc5B6XyxkDM6JWka0k4sBEBs0pUI8f857AOEjCcbAsh3rP/Q9jLuux5YyA4T0zHzuAACezwWCT3c1iHs4uM3OE9pRmDKJTOZgbyKIkeQJUBVGx8T/LyEP8ohfOwylrU7NMzOIe1Joa9EEcIjzYDeQkn5axii5yDEEKQUIMACsFodZYBBICoAxjyDEMVV8qk/FkWEKtFHgIoLiyoRNjx/OlbGJYNJAZEYSHsCLnYeqllICyGlc1cyTcieykoKOUnBoaf5NQ/zbpZftuq1gifsmwFGGrxGBRhtx9XSwMh0Ug8Xr7XD7J4lniI2wAl3M11PmEbCHKdhHmIz1O2uLmiDGDm//slyS4kMaLweeqGOuQLyrylgxUBJWN4ilEuqf0cDENDpuaU+7zHUcR9s7iTu7uPOdzNjd7QNTWPvcfkQ+BmG5A+Y0o80iAzlYWDGQY9GKIUiQljWeapFuRzP3IAaZ5P/Ud2pmmbOzWADIqu3dcgyqXXxPEd+cwAuz42tN5Tzz8D2rp1XwBd6wBBFJzHjvg3Sddmvx9S4dylCT8eLFas686HRnjiq4vLm8J98qHrkkm8r0AmIUPkRFWkKlKIgRpahYhNPrYqkkxdoY1VkULEJh+7Moq8Al84jDNozEReAAAAAElFTkSuQmCC" width="50" height="50">
 	</h1>
<p class="text-center" id ="shirtsimage">
    <?php
  $resultShoesCheck = mysql_query("SELECT * FROM shoesimg WHERE userid = '".$_SESSION['id']."' AND status = '0' ");
  $rowShoesCheck = mysql_fetch_row($resultShoesCheck);
  echo " <img height='403px' width='302px' src='data:image;base64,".$rowShoesCheck[3]."'>";
  ?>
</p>

 	
 </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>	
</body>
</html>