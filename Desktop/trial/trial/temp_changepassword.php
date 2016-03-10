<?php
include "dbConnection.php";

session_start();
$eventid= $_SESSION['Eventid'];
$original_password=$_POST['originalpassword'];
$new_password=$_POST['newpassword'];
$retype_new_password=$_POST['retypenewpassword'];
if(strcmp($new_password,$retype_new_password)==0))
{ 
	//if(strcmp($new_password,$original_password)<0) || strcmp($new_password,$original_password)>0))
//	{
	 	$pwd=mysql_query("UPDATE stes_coordinator_register SET password='$new_password' where event_id='$eventid' ");
//	 }
}


include 'Coordinator_code.php';
?>
