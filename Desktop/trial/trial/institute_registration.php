<?php 
include "webHeader.php"; 
include "topNavigation.php"; 
?>

      <section>
<script>
function validateForm() {
var invalidemail=0,invalidcontact=0;
    var x = document.forms["instituteForm"]["Email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
       
       invalidemail=1;
	alert("Invalid email");
	
    }

	var y = document.forms["instituteForm"]["ContactNo"].value;
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

                <!-- INSTITUTE REGISTRATION -->
         <div id="contact">
            <div class="line">
               <h2 class="section-title">Institute Sign Up</h2>
               <div class="margin">
                  <div class="s-12 m-12 l-5">
                    <form  name="instituteForm" class="customform"  onsubmit="return validateForm();" method="POST" action="institute_reg_db.php">
                      
                     <div class="s-12"><input name="InstituteName" placeholder="Institute Name" title="Institute Name" type="text" required/></div>
      		     <div class="s-12"><input name="Username" placeholder="Username" title="Username" type="text" /></div>
		     <div class="s-12"><input name="Email" placeholder="Email" title="Email" type="text" /></div>
                     <div class="s-12"><input name="ContactNo" placeholder="Contact No" title="ContactNo" type="text" /></div> 					  
                 

	  
                      <div class="s-12 m-12 l-4"><button class="color-btn" type="submit" >Register</button></div>
                    </form>
                  </div>                
               </div>
            </div>
         </div>
      </section>

<?php
include "webFooter.php";
?>
