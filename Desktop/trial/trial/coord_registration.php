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
                    <form  name="myForm" class="customform"  onsubmit="return validateForm();" method="POST" action="coord_reg_db.php">
                      
                     <div class="s-12"><input name="CoordinatorName" placeholder="Co-ordinator name" title="Coordinator name" type="text" required/></div>
			
			
					
					<div class="s-12"><select name="Cname">
                      <option value="SCOE">SCOE</option>
                      <option value="SKN">SKN</option>
                      <option value="SAE">SAE</option>
                      <option value="SITS">SITS</option>
                      </select>
					</div>
					
					
					
					
					<div class="s-12"><select name="Dname">
                      <option value="mech">MECH</option>
                      <option value="it">IT</option>
                      <option value="comp">COMP</option>
                      <option value="entc">ENTC</option>
                      </select>
					</div>
					  
					<div class="s-12"><select name="Ctype">
                      <option value="student_coordinator">Student Coordinator</option>
                      <option value="teacher_coordinator">Teacher Coordinator</option>
                      <option value="department_coordinator">Dept Coordinator</option>
					  <option value="college_coordinator">College Coordinator</option>
                      <option value="institute_coordinator">Institute Coordinator</option>
                      <option value="sponsorship_coordinator">Sponsorship Coordinator</option>
                      </select>
                      </div>
                      
					<div class="s-12"><select name="Ename">
                      <option value="BC">BC</option>
                      <option value="NFS">NFS</option>
                      <option value="POKER">POKER</option>
                      <option value="GIT">GIT</option>
                      </select>
					</div>  
					  
					  
					  
					  
					  
					  <div class="s-12"><input name="Email" placeholder="Email id" title="e-mail" type="text" /></div>
					  <div class="s-12"><input name="ContactNo" placeholder="Contact No" title="Contact" type="text" /></div>
					  
                 

	  
                      <div class="s-12 m-12 l-4"><button class="color-btn" type="submit" >Submit Button</button></div>
                    </form>
                  </div>                
               </div>
            </div>
         </div>
      </section>

<?php
include "webFooter.php";
?>
