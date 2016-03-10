<?php
include "dbConnection.php";

session_start();
$eventid= $_SESSION['Eventid'];
$coordname=$_POST['coordinatorname'];
$contactno=$_POST['contact'];
$emailid=$_POST['email'];
if(!empty($coordname))
{  $getid=mysql_query("UPDATE stes_coordinator_register SET coordinator_name='$coordname' WHERE event_id='$eventid'"); }

if(!empty($emailid))
{  $getid1=mysql_query("UPDATE stes_coordinator_register SET email='$emailid' WHERE event_id='$eventid'"); }



if(!empty($contactno))
{ $getid2=mysql_query("UPDATE stes_coordinator_register SET contact_no='$contactno' WHERE event_id='$eventid'"); }



include 'Coordinator_code.php';
?>
