<?php

include "dbConnection.php";

$InstituteName=$_POST['InstituteName'];
$Username=$_POST['Username'];
$Email=$_POST['Email'];
$ContactNo=$_POST['ContactNo'];



$query =mysql_query( "SELECT email FROM stes_institute_register WHERE email='$Email' ");
$match= mysql_num_rows($query);

if($match==1){
echo '<script language="javascript">';
echo 'alert("Your institution is already registered!")';
echo '</script>';
}
else{


				$contact=(int)$ContactNo;
				echo $contact;
			    $insert_records="insert into stes_institute_register values(NULL,'$InstituteName', '$Username', '$Email', '$contact')";
   			    $run_query=mysql_query($insert_records);

}
    					
?>