<?php
include "dbConnection.php";

session_start();
$ruleresult1=$_SESSION['rule_value'];
$eventid= $_SESSION['Eventid'];
$rule1=$_POST['hidden'];
$rule2=$_SESSION['rule2'];
$rule3=$_SESSION['rule3'];
$rule4=$_SESSION['rule4'];
$rule5=$_SESSION['rule5'];
//$nrule1_value=$_POST['hidden1']; WE WANT HIDDEN FIELD VALUE TO BE RETRIEVED HERE

if($ruleresult1=="deleterule1")
{
	$delete1=mysql_query("UPDATE stes_event_updates SET rule1='' WHERE event_id='$eventid' ");
}

if($ruleresult1=="editrule1")
{
	$edit1=mysql_query("UPDATE stes_event_updates SET rule1='$f' WHERE event_id='$eventid' ");
}

// $getid1=mysql_query("UPDATE stes_event_updates SET rule1='$rule1' WHERE event_id='$eventid'"); 


//  $getid2=mysql_query("UPDATE stes_event_updates SET rule2='$rule2' WHERE event_id='$eventid'"); 


// $getid3=mysql_query("UPDATE stes_event_updates SET rule3='$rule3' WHERE event_id='$eventid'"); 


// $getid4=mysql_query("UPDATE stes_event_updates SET rule4='$rule4' WHERE event_id='$eventid'");

// $getid5=mysql_query("UPDATE stes_event_updates SET rule5='$rule5' WHERE event_id='$eventid'"); 
include 'Coordinator_code.php';
?>
