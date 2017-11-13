<?php
	//Sample Database Connection Syntax for PHP and MySQL.
	
	//Connect To Database
	
	$hostname="localhost:3306";
	$username="virtualcloset";
	$password="virtualcloset";
	$dbname="virtualclosetFINAL";

	
	mysql_connect($hostname,$username,$password);
    $con = mysql_select_db($dbname);

    
    if($con){
    echo("Database ready");
    } else {
    echo("Sorry Bro no connection ");
    }

	
	/*

	if($select)){
       echo("Select says there is a connection ");
	} else {
		echo("Select doesnt work");
	}

	/*
	# Check If Record Exists
	
	$query = "SELECT * FROM $usertable";
	
	$result = mysql_query($query);
	
	if($result){
		while($row = mysql_fetch_array($result)){
			$name = $row["$yourfield"];
			echo "Name: ".$name."<br/>";
		}
	}
	*/
?>