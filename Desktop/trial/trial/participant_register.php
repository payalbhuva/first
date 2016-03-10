<?php 
include "webHeader.php"; 
include "topNavigation.php"; 
?>

      <section>
<script>
function validateForm() {
var invalidemail=0,invalidcontact=0;
    var x = document.forms["myForm"]["Email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
       
       invalidemail=1;
	alert("Invalid email");
	
    }

	var y = document.forms["myForm"]["ContactNo"].value;
	if(isNaN(y))
	{
		invalidcontact=1;
		alert("Invalid contact");
		
	}
if(invalidemail==1 || invalidcontact==1 )
{
	
	return false;
}



}

</script> 




                <!-- CONTACT -->
         <div id="contact">
            <div class="line">
               <h2 class="section-title">Sign Up</h2>
               <div class="margin">
                  <div class="s-12 m-12 l-5">

				


                    <form  name="myForm" class="customform"  onsubmit="return validateForm();" method="POST" action="participant_reg_db.php">
                        
			

                   			<div class="s-12"><input name="Name" placeholder="Name" title="Name" type="text" required/></div>
			
					<div class="s-12">Sinhgad Student?    <input name="Radio1" type="radio" id="yes" value="yes" onclick="ShowSTES()"> Yes <input name="Radio1" type="radio" id="no" value="no" onclick="Showother()" > No </div>


					<div id="dvstes" style="display: none">
  				        <select name="stescollege">
					<option value=" ">Select your college</option>
                      		        <option value="SCOE">SCOE</option>
                      			<option value="NBN">NBN</option>
                      			<option value="SAE">SAE</option>
                      			<option value="SKN">SKN</option>
                      			</select>
					</div>

					

					<div id="dvother" style="display: none" onchange="Showtextbox()">
  				        <select name="nonstescollege" id="dv">
					<option value=" ">Select your college</option>
                      		        <option value="MIT">MIT</option>
                      			<option value="MMCOE">MMCOE</option>
                      			<option value="PVPIT">PVPIT</option>
                      			<option value="COEP">COEP</option>
					<option value="other">Other</option>
                      			</select>
					
					</div>
					<div class="s-12" id="dvinput" style="display: none">
  				        <input type="textbox" name="otherclg" placeholder="Enter Your College Name" />
					</div>
			<script type="text/javascript">
    			function ShowSTES()
			 {
			     document.getElementById("dvinput").style.display = "none";

			     document.getElementById("dvother").style.display = "none";
   			     var chkYes = document.getElementById("yes");
		             document.getElementById("dvstes").style.display = "block";
    		         }
			function Showother()
			 {
			     document.getElementById("dvstes").style.display = "none";
   			     var chkno = document.getElementById("no");
		      
        		     document.getElementById("dvother").style.display = "block";
    		         }

			     function Showtextbox()
			     {
				var x = document.getElementById("dv").selectedIndex;
   				 var y = document.getElementById("dv").options;
   				 if(y[x].value=="other")
        		     	{
					document.getElementById("dvinput").style.display = "block";
					
				}
				 else
				{document.getElementById("dvinput").style.display = "none";}

			
			     }


				

			</script>
					
					
					
					
					
					
  
					  
					<div class="s-12"><select name="Ename">
					<option value=" ">Select Event</option>
                     			 <option value="Bc">BC</option>
                     			 <option value="NFS">NFS</option>
                    		   	 <option value="poker">POKER</option>
                      			 <option value="GIT">GIT</option>
                      			</select>
					</div>  
					  

					<div class="s-12">Where would you like to attend this event?<select name="Eventvenue">
                     			 <option value="SCOE">SCOE Vadgaon campus</option>
                     			 <option value="SKN">SKN</option>
                    		   	 <option value="SAE">SAE Kondhwa campus</option>
                      			 <option value="SITS">SITS Lonavala campus</option>
                      			</select>
					</div>  
					  
					  
					<div class="s-12">Accomodation Required?    <input checked="true" name="Radio2" type="radio" value="yes"> Yes <input name="Radio2" type="radio" value="no"> No </div>  
					  
					<div class="s-12"><input name="Email" placeholder="Email" title="email" type="text" /></div>
					 
					<div class="s-12">Gender    <input checked="true" name="Radio3" type="radio" value="male">Male <input name="Radio3" type="radio" value="female">Female </div>

					<div class="s-12"><input name="ContactNo" placeholder="Contact No" title="Contact" type="text" /></div>
					  
                 

	  
                      <div class="s-12 m-12 l-4"><button class="color-btn" type="submit" >Register Now</button></div>

			
                    </form>
                  </div>                
               </div>
            </div>
         </div>
      </section>

<?php
include "webFooter.php";
?>
