<?php
	session_start();
	include_once "dbh.php";
	 	
  $Button = $_POST['login'];



$username = stripslashes($_POST["usernamecheck"]); 
$username = mysql_real_escape_string($_POST["usernamecheck"]);

$password = stripslashes($_POST["passwordcheck"]); 
$password = mysql_real_escape_string($_POST["passwordcheck"]); 



if(isset($Button)){


if( ($username == '') || ($password == '')){

    echo ", Please enter login information <a href='closetvirtuosoV2.php'>Back to Home!</a>";

  

} else {
  if(isset($_POST["usernamecheck"], $_POST["passwordcheck"])) 
        {     

        $username = $_POST["usernamecheck"]; 
        $password = $_POST["passwordcheck"]; 
  
       
       $result1 = mysql_query("SELECT * FROM user WHERE username = '".$username."'");
       $row = mysql_fetch_row($result1); 
       
       if($row[1] == $username && $row[2] == $password){
     	  $_SESSION["logged_in"] = true; 
        $_SESSION["naam"] = $username; 
        $_SESSION["id"] = $row[0];
        header("Location: closetV2.php");
       } else {
       	echo " There is no user with that username or password in the database <a href='closetvirtuosoV2.php'> Back to login page</a>";
        
       } 

		}
 }

}




?>