<?php
include "dbConnection.php";
$username=$_POST['username'];
$pwd=$_POST['password'];

//echo $username;
//echo $pwd;

$query =mysql_query( "SELECT email FROM stes_coordinator_register WHERE email='$username' AND password='$pwd' ");
$match= mysql_num_rows($query);
//echo $match;

if($match==0)
{
	echo '<script language="javascript">';
	echo 'alert("Wrong Username & Password combination")';
	echo '</script>';
}

else
{
		include "Coordinator_code.php";

}
?>