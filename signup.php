<?php
include "dbh.php";


$username=$_POST['username'];
$password=$_POST['password'];


if($username == ''){


		echo "Please enter a username and password <a href='buildacloset.php'>Back to register page!</a>";


} else {

        $query = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
        
        $result = mysql_query($query);


        if($result){
            $smsg = " You are signed up <a href='closetvirtuosoV2.php'> Login!</a> ";
        }else{
        	$emsg = "the query doesnt work house";
        }

}
    

?>
      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>





