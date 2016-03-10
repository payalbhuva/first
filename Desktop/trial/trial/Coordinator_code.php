<?php
include "dbConnection.php";
?>
<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Responsive One Page website template</title>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/responsee.css">
            <link rel="stylesheet" href="css/nac.css">
      <!-- CUSTOM STYLE -->
      <link rel="stylesheet" href="template-style.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
      <script type="text/javascript" src="js/modernizr.js"></script>
      <script type="text/javascript" src="js/responsee.js"></script>
      <script type="text/javascript" src="js/template-scripts.js"></script> 
      <script type="text/javascript" src="view_registrations.js"></script>
      <!--[if lt IE 9]>
	      <script src="html5.js"></script>
        <script src="css3-mediaqueries.js"></script>
          <script src="html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
      <![endif]-->
      
     
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<?php
	$getid=mysql_query("SELECT event_id FROM stes_coordinator_register where email='$username'");
			while($row=mysql_fetch_array($getid))  
			{
				$eventid=$row['event_id'];
			}	

?>      
<script>

function regByDate()
{

var display=document.getElementById("m");
display.innerHTML="<?php
$result=mysql_query("SELECT * FROM stes_participant_register WHERE event_id='$eventid' AND date_of_registration BETWEEN '2016/06/03' AND '2016/06/08' ");

				echo "<table width='500'  border='10' bordercolor='red'><tr><th>Form No</th><th>Participant Name</th><th>Sinhgad Student</th><th>Participant College Name</th><th>Accomodation</th><th>Email</th><th>Gender</th><th>Contact No</th><th>Date of Registration</th><th>Fees Paid</th></tr>";
				while($row=mysql_fetch_array($result))  
				{ 
					
   				     echo "<tr><td>".$row['form_no']."</td><td>".$row['participant_name']."</td><td>".$row['category']."</td><td>".$row['participant_college_name']."</td><td>".$row['accomodation']."</td><td>".$row['email']."</td><td>".$row['gender']."</td><td>".$row['contact_no']."</td><td>".$row['date_of_registration']."</td><td>".$row['fees_paid']."</td></tr>";
    
				}
				    echo "</table>";			


?>";

}



function regByCollege()
{

var display=document.getElementById("m");
display.innerHTML="<?php
$result=mysql_query("SELECT * FROM stes_participant_register WHERE event_id='$eventid' AND participant_college_name like '%SCOE%' ");
$result1=mysql_query("SELECT * FROM stes_participant_register WHERE event_id='$eventid' AND participant_college_name like '%SKN%' ");
				echo "SCOE";
				echo "<table width='500'  border='10' bordercolor='red'><tr><th>Form No</th><th>Participant Name</th><th>Sinhgad Student</th><th>Participant College Name</th><th>Accomodation</th><th>Email</th><th>Gender</th><th>Contact No</th><th>Date of Registration</th><th>Fees Paid</th></tr>";
				while($row=mysql_fetch_array($result))  
				{ 
					
   				     echo "<tr><td>".$row['form_no']."</td><td>".$row['participant_name']."</td><td>".$row['category']."</td><td>".$row['participant_college_name']."</td><td>".$row['accomodation']."</td><td>".$row['email']."</td><td>".$row['gender']."</td><td>".$row['contact_no']."</td><td>".$row['date_of_registration']."</td><td>".$row['fees_paid']."</td></tr>";
    
				}
				    echo "</table>";



				echo "SKN";
				echo "<table width='500'  border='10' bordercolor='red'><tr><th>Form No</th><th>Participant Name</th><th>Sinhgad Student</th><th>Participant College Name</th><th>Accomodation</th><th>Email</th><th>Gender</th><th>Contact No</th><th>Date of Registration</th><th>Fees Paid</th></tr>";
				while($row1=mysql_fetch_array($result1))  
				{ 
					
   				     echo "<tr><td>".$row1['form_no']."</td><td>".$row1['participant_name']."</td><td>".$row1['category']."</td><td>".$row1['participant_college_name']."</td><td>".$row1['accomodation']."</td><td>".$row1['email']."</td><td>".$row1['gender']."</td><td>".$row1['contact_no']."</td><td>".$row1['date_of_registration']."</td><td>".$row1['fees_paid']."</td></tr>";
    
				}
				    echo "</table>";



?>";

}


function abc()
{
	var p="heyyyy";
	window.location = "temp_edit_rules.php?manali=" + p;
}

function allReg()
{

var display=document.getElementById("m");
display.innerHTML="<?php
$result=mysql_query("SELECT * FROM stes_participant_register WHERE event_id='$eventid' ");
				echo "<table><tr><th>Form No</th><th>Participant Name</th><th>Sinhgad Student</th><th>Participant College Name</th><th>Accomodation</th><th>Email</th><th>Gender</th><th>Contact No</th><th>Date of Registration</th><th>Fees Paid</th></tr>";
				while($row=mysql_fetch_array($result))  
				{ 
					
   				     echo "<tr><td>".$row['form_no']."</td><td>".$row['participant_name']."</td><td>".$row['category']."</td><td>".$row['participant_college_name']."</td><td>".$row['accomodation']."</td><td>".$row['email']."</td><td>".$row['gender']."</td><td>".$row['contact_no']."</td><td>".$row['date_of_registration']."</td><td>".$row['fees_paid']."</td></tr>";
    
				}
				    echo "</table>";




?>";

}

function changerule()
{
	document.getElementById("n").innerHTML = "manali";	
}

function sidenav()
{
 document.getElementById("m").innerHTML = "payal";
}



function editprofile()
{

var displayprof=document.getElementById("m");
displayprof.innerHTML ="<form action='temp_edit_profile.php' method='POST' id='form_id'><br>Name <input type='text' name='coordinatorname' ><br>Email <input type='text' name='email'><br>Contact no <input type='text' name='contact'><br><input type='submit' value='submit'></form>";
}

function changePassword()
{
	document.getElementById("m").innerHTML = "<form id='form_id1'  action='temp_changepassword.php' method='POST' ><br><input name='originalpassword' placeholder='Original Password' title='Original Password' type='text' required/><br><input name='newpassword' placeholder='New Password' title='New Password' type='text' required/><br><input name='retypenewpassword' placeholder='Retype New Password' title='Retype New Password' type='text' required/><br><button id='passwordButton' type='submit'>Change</button>";
	
}

function displaylist()
{
var display=document.getElementById("m");
display.innerHTML="<div class='aside-nav s-12 l-10a'><ul class='aside-submenu'><li><a href='javascript:funa();'>About</a></li><li><a href='javascript:updaterules();'>Rules</a></li><li><a href='javascript:funs();'>Structure</a></li><li><a href='javascript:funj();'>Judging Criteria</a></li><li><a href='javascript:funp();'>Prize Money</a></li><li><a href='javascript:funw();'>Winners</a></li></ul></div>";
}


function createtextbox()
{
var display=document.getElementById("n");
	display.innerHTML="<?php
			   echo "<br><form action='temp_edit_rules.php' method='POST' name='editrules'><input type='text' name='newrule' placeholder='Add New Rule'><button id='add' type='submit'>+</button>";
			  ?>";
}


	

function enable1()
{
document.getElementById("rule1ena").disabled =false;
var nrule1=document.getElementById("rule1ena").value;

	//document.getElementById("o").innerHTML=nrule1; 
document.getElementById("o").innerHTML=" <?php
			$result=mysql_query("SELECT * FROM stes_event_updates WHERE event_id='$eventid'");
			   $row=mysql_fetch_array($result);
			   
			   $rule2=$row['rule2'];
			   $rule3=$row['rule3'];
			   $rule4=$row['rule4'];
		           $rule5=$row['rule5'];
				
			 session_start();
			$_SESSION['Eventid'] = $eventid;
			$_SESSION['rule2'] = $rule2;	
			$_SESSION['rule3'] = $rule3;
			$_SESSION['rule4'] = $rule4;
			$_SESSION['rule5'] = $rule5;
	
	$rule_value=editrule1;
	
	$_SESSION['rule_value'] = $rule_value;
							//  ****WE WANT SET 'VALUE' OF variable nrule1 TO VALUE FIELD OF HIDDEN INPUTBOX BELOW ****

	echo "<form method='POST' action='temp_edit_rules.php'><input type='hidden' name='hidden1' id='hd1' value=''> <button id='saverules' type='submit'>Save Changes</button></form>"; 
?> ";

}
function enable2()
{

	document.getElementById("rule2ena").disabled =false;

	
}
function enable3()
{

	document.getElementById("rule3ena").disabled =false;

	
}
function enable4()
{

	document.getElementById("rule4ena").disabled =false;

	
}
function enable5()
{

	document.getElementById("rule5ena").disabled =false;

	
}


function updaterules()
{

	var display=document.getElementById("n");
	display.innerHTML="<?php
	$result=mysql_query("SELECT * FROM stes_event_updates WHERE event_id='$eventid'");
	$row=mysql_fetch_array($result);
	if(empty($row['rule1']) && empty($row['rule2']) && empty($row['rule3']) && empty($row['rule4']) && empty($row['rule5']))
	{
		echo "No rules have been added..";
		echo "<button id='addrules' type='submit' onclick='createtextbox();' >Add Rules</button>";
		
	}
	else
	{
		
			   $result=mysql_query("SELECT * FROM stes_event_updates WHERE event_id='$eventid'");
			   $row=mysql_fetch_array($result);
			   $rule1=$row['rule1'];
			   $rule2=$row['rule2'];
			   $rule3=$row['rule3'];
			   $rule4=$row['rule4'];
		           $rule5=$row['rule5'];		
			   echo "<br><ol><li> <input type='text' name='rule1' value='$rule1' id='rule1ena' disabled><a  id='edit1' href='javascript:enable1();' ><font color='red'>Edit</font></a><a href='javascript:deleterule1();' id='delete1'><font color='Blue'>Delete</font></a></li>";
			   echo	"<li><input type='text' name='rule2' value='$rule2' id='rule2ena' disabled><a id='edit2' href='javascript:enable2();' ><font color='red'>Edit</font></a><a href='javascript:deleterule();' id='delete2'><font color='Blue'>Delete</font></a></li>";
			   echo	"<li> <input type='text' name='rule3' value='$rule3' id='rule3ena' disabled><a id='edit3' href='javascript:enable();' ><font color='red'>Edit</font></a><a href='javascript:deleterule();' id='delete3'><font color='Blue'>Delete</font></a></li>";
		 	  echo "<li><input type='text' name='rule4' value='$rule4'  id='rule4ena' disabled><a id='edit4' href='javascript:enable();' ><font color='red'>Edit</font></a><a href='javascript:deleterule();' id='delete4'><font color='Blue'>Delete</font></a></li>";
			   echo "<li> <input type='text' name='rule5' value='$rule5'  id='rule5ena' disabled><a id='edit5' href='javascript:enable();' ><font color='red'>Edit</font></a><a href='javascript:deleterule();' id='delete5'><font color='Blue'>Delete</font></a></li></ol>"; 
			
			  echo "<button id='addrules' type='submit' onclick='createtextbox();' >Add Rules</button>";
			
 			 
	}						 	


?>";

}


</script>	
   </head>
   <body class="size-1140">
   
<header>

<nav>
         
             		<div class="s-12 l-2" >
             		
             		<p class="logo"><strong>TECHTONIC</strong>event</p>
             		</div> 

 					<div class="dropdown left">
 					<button class="dropbtn">Volunteers</button>
 					</div>           
            
            				<div class="dropdown ">
 					<button class="dropbtn">Registrations</button>
					<div class="dropdown-content" >
 					<a href="javascript:regByDate();">View by Date</a>
 					<a href="javascript:regByCollege();">View by College</a>
 					<a href="javascript:allReg();">View All</a>
 					</div>
 					</div> 
              				
 					
 					<div class="dropdown">
 					<button class="dropbtn">Event Updates</button>
 					<div class="dropdown-content">
 					<a href="javascript:displaylist();">Upload event details</a>
 					<a href="javascript:changerule();">Send Updates</a>
 					</div>
 					</div>
 
 					<div class="dropdown">
 					<button class="dropbtn">Event Accounts
 					
 					</button>
 					<div class="dropdown-content">
 					<a href="#">View</a>
 					<a href="#">Update</a>
 					</div>
 					</div>
 					
 					<div class="dropdown">
 					<button class="dropbtn">Messages
 					<i class="fa fa-envelope-o" style="font-size:24px"></i>
 					</button>
 					</div> 
              
              		<div class="dropdown">
 					<button class="dropbtn">My Account
 					<i class="fa fa-user" style="font-size:24px"></i>
 					 </button>
 					<div class="dropdown-content">
 					<a href="javascript:editprofile();">Edit Profile</a>
 					<a href="javascript:changePassword();">Change Password</a>
 					<a href="#">Sign out</a>
 					</div>
 					</div>
				

          </nav>
<div id="m">

</div>

<div id="n">

</div>
<div id="o">

</div>
      </header>
       
</body>
</html>