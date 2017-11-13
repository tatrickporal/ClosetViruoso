<?php
session_start();
include_once "dbh.php";

$sid = $_SESSION["id"];

$shirtsError = $_FILES['shirts']['error'];
$shirtsTempName = $_FILES['shirts']['tmp_name'];
$shirtsName = $_FILES['shirts']['name'];
$shirtsExt = explode('.', $shirtsName);
$shirtsActExt = strtolower(end($shirtsExt));
$shirtsFileSize = $_FILES['shirts']['size'];
$shirtsNewName = uniqid('', true).".".$shirtsActExt;
$shirtsBefore64 = file_get_contents($shirtsTempName);
$shirts = base64_encode($shirtsBefore64);

$pantsError = $_FILES['pants']['error'];
$pantsTempName = $_FILES['pants']['tmp_name'];
$pantsName = $_FILES['pants']['name'];
$pantsExt = explode('.', $pantsName);
$pantsActExt = strtolower(end($pantsExt));
$pantsFileSize = $_FILES['pants']['size'];
$pantsNewName = uniqid('', true).".".$pantsActExt;
$pantsBefore64 = file_get_contents($pantsTempName);
$pants = base64_encode($pantsBefore64);

$shoesError = $_FILES['shoes']['error'];
$shoesTempName = $_FILES['shoes']['tmp_name'];
$shoesName = $_FILES['shoes']['name'];
$shoesExt = explode('.', $shoesName);
$shoesActExt = strtolower(end($shoesExt));
$shoesFileSize = $_FILES['shoes']['size'];
$shoesNewName = uniqid('', true).".".$shoesActExt;
$shoesBefore64 = file_get_contents($shoesTempName);
$shoes = base64_encode($shoesBefore64);


$allowed = array('jpg', 'jpeg', 'png', 'pdf');

$number = 1;

echo " ".$_SESSION['id'];


		$shirtsnumber = 0;

if (($shirtsError == 0) && !($pantsError == 0) && !($shoesError == 0)) {
	echo " only shirts are here";
	
	if(in_array($shirtsActExt, $allowed)){
		echo " correct file input";
		
		if($shirtsFileSize < 100000000){
		echo " THISSS   ";
		echo " IM not too sure ";

		$resultShirtsCheck = mysql_query("SELECT * FROM shirtsimg WHERE userid = '".$_SESSION['id']."' AND status = '0' ");
          $rowShirtsCheck = mysql_fetch_row($resultShirtsCheck);
         if($rowShirtsCheck){
         	echo $rowShirtsCheck[0];
			$shirtsStatusUpdate = "UPDATE shirtsimg SET status = '1' WHERE id = '".$rowShirtsCheck[0]."'";
			$resultNewShirts = mysql_query($shirtsStatusUpdate);
		}

	    $queryShirts = "INSERT INTO shirtsimg (userid, status , shirtsimage, shirtsname, shirtscolor) VALUES ('$sid', '0' ,'$shirts', '$shirtsName', '$shirtscolor')";
        $resultShirts = mysql_query($queryShirts);
        if($resultShirts){ 			
        	header("Location:closetV2.php");
        }else{
        	echo "    DOESNTTT WORKK    ";
        }

		} else {
			echo "Inputted file is too large limit 100mb";
		}

	} else {
		echo " wrong file input";
	}
}

if (($shirtsError == 0) && ($pantsError == 0) && !($shoesError == 0) ) {
	echo " only shirts and pants are here";

	if( (in_array($shirtsActExt, $allowed)) && (in_array($pantsActExt, $allowed)) ) {

		echo " correct file input";
		if(($shirtsFileSize < 100000000) && ($pantsFileSize < 100000000)){
			echo " shirts and pants will be uploaded ";

		  $resultShirtsCheck = mysql_query("SELECT * FROM shirtsimg WHERE userid = '".$_SESSION['id']."' AND status = '0' ");
          $rowShirtsCheck = mysql_fetch_row($resultShirtsCheck);
         if($rowShirtsCheck){
         	echo $rowShirtsCheck[0];
			$shirtsStatusUpdate = "UPDATE shirtsimg SET status = '1' WHERE id = '".$rowShirtsCheck[0]."'";
			$resultNewShirts = mysql_query($shirtsStatusUpdate);
		}
		  $resultPantsCheck = mysql_query("SELECT * FROM pantsimg WHERE userid = '".$_SESSION['id']."' AND status = '0' ");
          $rowPantsCheck = mysql_fetch_row($resultPantsCheck);
         if($rowPantsCheck){
         	echo $rowPantsCheck[0];
			$pantsStatusUpdate = "UPDATE pantsimg SET status = '1' WHERE id = '".$rowPantsCheck[0]."'";
			$resultNewPants = mysql_query($pantsStatusUpdate);
		}

		$queryShirts = "INSERT INTO shirtsimg (userid, status , shirtsimage, shirtsname, shirtscolor) VALUES ('$sid', '0' ,'$shirts', '$shirtsName', '$shirtscolor')";

		$queryPants = "INSERT INTO pantsimg (userid, status , pantsimage, pantsname, pantscolor) VALUES ('$sid', '0' ,'$pants', '$pantsName', '$pantscolor')";
        
        $resultShirts = mysql_query($queryShirts);
        $resultPants = mysql_query($queryPants);	

        if($resultShirts && $resultPants){
            header("Location: closetV2.php");
        }else{
        	echo "    DOESNTTT WORKK    ";
        }


		} else {
			echo "Inputted file is too large limit 100mb";
		}
	} else {
		echo " wrong file input";
	}
}

if (($shirtsError == 0) && ($pantsError == 0) && ($shoesError == 0) ) {
	echo " all three";

	if( (in_array($shirtsActExt, $allowed)) && (in_array($pantsActExt, $allowed)) && (in_array($shoesActExt, $allowed)) ) {
		echo " correct file input";

		if(($shirtsFileSize < 100000000) && ($pantsFileSize < 100000000) && ($shoesFileSize < 100000000)){

		  $resultShirtsCheck = mysql_query("SELECT * FROM shirtsimg WHERE userid = '".$_SESSION['id']."' AND status = '0' ");
          $rowShirtsCheck = mysql_fetch_row($resultShirtsCheck);
         if($rowShirtsCheck){
         	echo $rowShirtsCheck[0];
			$shirtsStatusUpdate = "UPDATE shirtsimg SET status = '1' WHERE id = '".$rowShirtsCheck[0]."'";
			$resultNewShirts = mysql_query($shirtsStatusUpdate);
		}
		$queryShirts = "INSERT INTO shirtsimg (userid, status , shirtsimage, shirtsname, shirtscolor) VALUES ('$sid', '0' ,'$shirts', '$shirtsName', '$shirtscolor')";
       $resultShirts = mysql_query($queryShirts);

         $resultPantsCheck = mysql_query("SELECT * FROM pantsimg WHERE userid = '".$_SESSION['id']."' AND status = '0' ");
          $rowPantsCheck = mysql_fetch_row($resultPantsCheck);
         if($rowPantsCheck){
         	echo $rowPantsCheck[0];
			$pantsStatusUpdate = "UPDATE pantsimg SET status = '1' WHERE id = '".$rowPantsCheck[0]."'";
			$resultNewPants = mysql_query($pantsStatusUpdate);
		}
		$queryPants = "INSERT INTO pantsimg (userid, status , pantsimage, pantsname, pantscolor) VALUES ('$sid', '0' ,'$pants', '$pantsName', '$pantscolor')";
		   $resultPants = mysql_query($queryPants);	


		 $resultShoesCheck = mysql_query("SELECT * FROM shoesimg WHERE userid = '".$_SESSION['id']."' AND status = '0' ");
          $rowShoesCheck = mysql_fetch_row($resultShoesCheck);
         if($rowShoesCheck){
         	echo $rowShoesCheck[0];
			$shoesStatusUpdate = "UPDATE shoesimg SET status = '1' WHERE id = '".$rowShoesCheck[0]."'";
			$resultNewShoes = mysql_query($shoesStatusUpdate);
		}
		$queryShoes = "INSERT INTO shoesimg (userid, status , shoesimage, shoesname, shoescolor) VALUES ('$sid', '0' ,'$shoes', '$shoesName', '$shoescolor')";
		   $resultShoes = mysql_query($queryShoes);	





        if($resultShirts && $resultPants && $resultShoes){
            header("Location: closetV2.php");
        }else{
        	echo "    DOESNTTT WORKK    ";
        }

		} else {
			echo "Inputted file is too large limit 100mb";
		}

	} else {
		echo " wrong file input";
	}


}

if (!($shirtsError == 0) && !($pantsError == 0) && !($shoesError == 0) ) {
	echo " none are here please upload something files <a href='uploadpage.php'> Back to upload page</a>";

}

if (!($shirtsError == 0) && !($pantsError == 0) && ($shoesError == 0) ) {
	echo " only shoes are here";


	if((in_array($shoesActExt, $allowed))){
		echo " correct file input";

		if(($shoesFileSize < 100000000)){

		$resultShoesCheck = mysql_query("SELECT * FROM shoesimg WHERE userid = '".$_SESSION['id']."' AND status = '0' ");
          $rowShoesCheck = mysql_fetch_row($resultShoesCheck);
         if($rowShoesCheck){
         	echo $rowShoesCheck[0];
			$shoesStatusUpdate = "UPDATE shoesimg SET status = '1' WHERE id = '".$rowShoesCheck[0]."'";
			$resultNewShoes = mysql_query($shoesStatusUpdate);
		}

		$queryShoes = "INSERT INTO shoesimg (userid, status , shoesimage, shoesname, shoescolor) VALUES ('$sid', '0' ,'$shoes', '$shoesName', '$shoescolor')";


		   $resultShoes = mysql_query($queryShoes);			   

		   if($resultShoes){

		   	header("Location: closetV2.php");

		   }

		} else {
			echo "Inputted file is too large limit 100mb";
		}

	} else {
		echo " wrong file input";
	}


}

if (!($shirtsError == 0) && ($pantsError == 0) && !($shoesError == 0) ) {
	echo " only pants are here";

		if(in_array($pantsActExt, $allowed)){
		echo " correct file input";

		if(($pantsFileSize < 100000000)){
         $resultPantsCheck = mysql_query("SELECT * FROM pantsimg WHERE userid = '".$_SESSION['id']."' AND status = '0' ");
          $rowPantsCheck = mysql_fetch_row($resultPantsCheck);
         if($rowPantsCheck){
         	echo $rowPantsCheck[0];
			$pantsStatusUpdate = "UPDATE pantsimg SET status = '1' WHERE id = '".$rowPantsCheck[0]."'";
			$resultNewPants = mysql_query($pantsStatusUpdate);
		}
		$queryPants = "INSERT INTO pantsimg (userid, status , pantsimage, pantsname, pantscolor) VALUES ('$sid', '0' ,'$pants', '$pantsName', '$pantscolor')";
		   $resultPants = mysql_query($queryPants);	

        if($resultPants){
            header("Location: closetV2.php");
        }else{
        	echo "    DOESNTTT WORKK    ";
        }

		} else {
			echo "Inputted file is too large limit 100mb";
		}

	} else {
		echo " wrong file input";
	}
}

if (!($shirtsError == 0) && ($pantsError == 0) && ($shoesError == 0) ) {
	echo " only pants and shoes are here";

   if( (in_array($pantsActExt, $allowed)) && (in_array($shoesActExt, $allowed)) ){
		echo " correct file input";

		if(($pantsFileSize < 100000000) && ($shoesFileSize < 100000000)){

         $resultPantsCheck = mysql_query("SELECT * FROM pantsimg WHERE userid = '".$_SESSION['id']."' AND status = '0' ");
          $rowPantsCheck = mysql_fetch_row($resultPantsCheck);
         if($rowPantsCheck){
         	echo $rowPantsCheck[0];
			$pantsStatusUpdate = "UPDATE pantsimg SET status = '1' WHERE id = '".$rowPantsCheck[0]."'";
			$resultNewPants = mysql_query($pantsStatusUpdate);
		}

		$resultShoesCheck = mysql_query("SELECT * FROM shoesimg WHERE userid = '".$_SESSION['id']."' AND status = '0' ");
          $rowShoesCheck = mysql_fetch_row($resultShoesCheck);
         if($rowShoesCheck){
         	echo $rowShoesCheck[0];
			$shoesStatusUpdate = "UPDATE shoesimg SET status = '1' WHERE id = '".$rowShoesCheck[0]."'";
			$resultNewShoes = mysql_query($shoesStatusUpdate);
		}
		$queryShoes = "INSERT INTO shoesimg (userid, status , shoesimage, shoesname, shoescolor) VALUES ('$sid', '0' ,'$shoes', '$shoesName', '$shoescolor')";
		   

		$queryPants = "INSERT INTO pantsimg (userid, status , pantsimage, pantsname, pantscolor) VALUES ('$sid', '0' ,'$pants', '$pantsName', '$pantscolor')";

		   $resultPants = mysql_query($queryPants);	
		   $resultShoes = mysql_query($queryShoes);	



        if($resultShoes && $resultPants){
            header("Location: closetV2.php");
                    }else{
        	echo "    DOESNTTT WORKK    ";
        }

		} else {
			echo "Inputted file is too large limit 100mb";
		}

	} else {
		echo " wrong file input";
	}
}

if (($shirtsError == 0) && !($pantsError == 0) && ($shoesError == 0) ) {
	echo " only shirts and shoes are here";

	if(($shirtsFileSize < 100000000) && ($shoesFileSize < 100000000)){

		$resultShoesCheck = mysql_query("SELECT * FROM shoesimg WHERE userid = '".$_SESSION['id']."' AND status = '0' ");
          $rowShoesCheck = mysql_fetch_row($resultShoesCheck);
         if($rowShoesCheck){
         	echo $rowShoesCheck[0];
			$shoesStatusUpdate = "UPDATE shoesimg SET status = '1' WHERE id = '".$rowShoesCheck[0]."'";
			$resultNewShoes = mysql_query($shoesStatusUpdate);
		}

		$resultShirtsCheck = mysql_query("SELECT * FROM shirtsimg WHERE userid = '".$_SESSION['id']."' AND status = '0' ");
          $rowShirtsCheck = mysql_fetch_row($resultShirtsCheck);
         if($rowShirtsCheck){
         	echo $rowShirtsCheck[0];
			$shirtsStatusUpdate = "UPDATE shirtsimg SET status = '1' WHERE id = '".$rowShirtsCheck[0]."'";
			$resultNewShirts = mysql_query($shirtsStatusUpdate);
		}

	    $queryShirts = "INSERT INTO shirtsimg (userid, status , shirtsimage, shirtsname, shirtscolor) VALUES ('$sid', '0' ,'$shirts', '$shirtsName', '$shirtscolor')";

		$queryShoes = "INSERT INTO shoesimg (userid, status , shoesimage, shoesname, shoescolor) VALUES ('$sid', '0' ,'$shoes', '$shoesName', '$shoescolor')";


		   $resultShoes = mysql_query($queryShoes);	
		   $resultShirts = mysql_query($queryShirts);



		if($resultShirts && $resultShoes){
            	header("Location: closetV2.php");
        }else{
        	echo "    DOESNTTT WORKK    ";
        }



		} else {
			echo "Inputted file is too large limit 100mb";
		}


	if( (in_array($shirtsActExt, $allowed)) && (in_array($shoesActExt, $allowed)) ){
		echo " correct file input";

	} else {
		echo " wrong file input";
	}

}



?>



      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
