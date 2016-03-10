<?php

include "dbConnection.php";
include "about-us.php";
$CoordinatorName=$_POST['CoordinatorName'];
$CollegeName=$_POST['Cname'];
$DepartmentName=$_POST['Dname'];
$CoordinatorType=$_POST['Ctype'];
$EventName=$_POST['Ename'];
$Email=$_POST['Email'];
$ContactNo=$_POST['ContactNo'];
$confirm_code=md5(uniqid(rand(100000,999999)));

$trim_code= mb_strimwidth($confirm_code,0,5,"");

$query =mysql_query( "SELECT email FROM stes_coordinator_register WHERE email='$Email' ");
$match= mysql_num_rows($query);

if($match==1){
echo '<script language="javascript">';
echo 'alert("This Email is already registered")';
echo '</script>';
}
else{


// send e-mail to ...
$to=$Email;

// Your subject
$subject="Verification Code";

// From
$header="from: Techtonic Team <your email>";

// Your message
$message=" Use this code as a password for logging in to your account.\r\n";
$message.="$trim_code";

$message.="\n\n You can use this code as password or change it anytime after logging in. \r\n";

// send email
$sentmail = mail($to,$subject,$message,$header);

echo '<script language="javascript">';
echo 'alert("Verification code is sent to your Email")';
echo '</script>';
				
			 

				/* $result=mysql_query("SELECT * FROM stes_events WHERE department_id IN (SELECT department_id FROM stes_departments WHERE college_id IN(SELECT college_id FROM stes_colleges WHERE college_name='$CollegeName'))");
				while($row=mysql_fetch_array($result))  
				{ 
					// echo ($row['event_id']);
					
					if($row['event_name']=='$EventName')
					{
						echo '<script language="javascript">';
						echo 'alert("hi")';
						echo '</script>';

					   $res=$row['event_id'];
					}
				}*/


				 $result=mysql_query("SELECT department_id FROM stes_departments WHERE college_id IN (SELECT college_id FROM stes_colleges WHERE college_name='$CollegeName')");

				while($row=mysql_fetch_array($result))  
				{ 
					$res=$row['department_id'];
 					$result1=mysql_query( "SELECT event_id FROM stes_events WHERE event_name='$EventName' AND department_id='$res' ");
					while($row1=mysql_fetch_array($result1))
					{	
					  $eventid=$row1['event_id']; 
					}
  
				} 
				   $contact=(int)$ContactNo;
			    $insert_records="insert into stes_coordinator_register values(NULL,'$CoordinatorName', '$CollegeName', '$DepartmentName', '$CoordinatorType','$eventid','$Email','$contact','$trim_code')";
   			    $run_query=mysql_query($insert_records);

}
    					
?>