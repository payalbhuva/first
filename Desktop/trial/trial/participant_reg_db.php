<?php

include "dbConnection.php";
$participant_name=$_POST['Name'];
$sinhgad_student=$_POST['Radio1'];
$stes=$_POST['stescollege'];
$nonstes=$_POST['nonstescollege'];
$otherclg=$_POST['otherclg'];
$event_name=$_POST['Ename'];
$event_venue=$_POST['Eventvenue'];
$accomodation=$_POST['Radio2'];
$email=$_POST['Email'];
$gender=$_POST['Radio3'];
$contact=$_POST['ContactNo'];

 $result=mysql_query("SELECT department_id FROM stes_departments WHERE college_id IN (SELECT college_id FROM stes_colleges WHERE college_name='$event_venue')");

while($row=mysql_fetch_array($result))  
{ 
	$res=$row['department_id'];
 	$result1=mysql_query( "SELECT event_id FROM stes_events WHERE event_name='$event_name' AND department_id='$res' ");
	while($row1=mysql_fetch_array($result1))
	{	
	  $eventid=$row1['event_id']; 
	}
  
} 

/*$result=mysql_query( "SELECT event_id FROM stes_events WHERE event_name='$event_name' "); 
while($row=mysql_fetch_array($result))  
{ 
  echo ($row['event_id']); 
  
}  	
*/

		if($sinhgad_student=='yes')
		{
			//echo '<script language="javascript">';
			//echo 'alert("hi")';
			//echo '</script>';
			 $insert_records="insert into stes_participant_register values(NULL,'$participant_name', '$sinhgad_student', '$stes', '$eventid','$accomodation','$email','$gender','$contact','2016-06-09',NULL,NULL)";
  			 $run_query=mysql_query($insert_records);

		}
		else
		{
			if($nonstes=='other')
			{
			$insert_records="insert into stes_participant_register values(NULL,'$participant_name', '$sinhgad_student', '$otherclg', '$eventid','$accomodation','$email','$gender','$contact','2016-06-09',NULL,1)";
  			$run_query=mysql_query($insert_records);
			}
			else
			{
			$insert_records="insert into stes_participant_register values(NULL,'$participant_name', '$sinhgad_student', '$nonstes', '$eventid','$accomodation','$email','$gender','$contact','2016-06-09',NULL,1)";
  			$run_query=mysql_query($insert_records);
			}
		}	

    					
?>