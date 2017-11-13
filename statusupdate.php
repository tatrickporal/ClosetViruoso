<?php
session_start();
include_once "dbh.php";

$shirtsNewStatus = $_POST['shirtsbutton'];
$pantsNewStatus = $_POST['pantsbutton'];
$shoesNewStatus = $_POST['shoesbutton'];

 
if(isset($shirtsNewStatus) && !(isset($pantsNewStatus))){

$resultShirtsCheck = mysql_query("SELECT * FROM shirtsimg WHERE userid = '".$_SESSION['id']."' AND status = '0' ");
$rowShirtsCheck = mysql_fetch_row($resultShirtsCheck);

$shirtsStatusUpdate = "UPDATE shirtsimg SET status = '1' WHERE id = '".$rowShirtsCheck[0]."' ";
$shirtsStatusUpdateQuery = mysql_query($shirtsStatusUpdate);

$shirtsNewStatusUpdate = "UPDATE shirtsimg SET status = '0' WHERE id = '".$shirtsNewStatus."' ";
$shirtsNewStatusUpdateQuery = mysql_query($shirtsNewStatusUpdate);
}

if(isset($pantsNewStatus)){

$resultPantsCheck = mysql_query("SELECT * FROM pantsimg WHERE userid = '".$_SESSION['id']."' AND status = '0' ");
$rowPantsCheck = mysql_fetch_row($resultPantsCheck);

$pantsStatusUpdate = "UPDATE pantsimg SET status = '1' WHERE id = '".$rowPantsCheck[0]."' ";
$pantsStatusUpdateQuery = mysql_query($pantsStatusUpdate);

$pantsNewStatusUpdate = "UPDATE pantsimg SET status = '0' WHERE id = '".$pantsNewStatus."' ";
$pantsNewStatusUpdateQuery = mysql_query($pantsNewStatusUpdate);

}

if(isset($shoesNewStatus)){

$resultShoesCheck = mysql_query("SELECT * FROM shoesimg WHERE userid = '".$_SESSION['id']."' AND status = '0' ");
$rowShoesCheck = mysql_fetch_row($resultShoesCheck);

$shoesStatusUpdate = "UPDATE shoesimg SET status = '1' WHERE id = '".$rowShoesCheck[0]."' ";
$shoesStatusUpdateQuery = mysql_query($shoesStatusUpdate);

$shoesNewStatusUpdate = "UPDATE shoesimg SET status = '0' WHERE id = '".$shoesNewStatus."' ";
$shoesNewStatusUpdateQuery = mysql_query($shoesNewStatusUpdate);


}

      header("Location: closetV2.php");



?>