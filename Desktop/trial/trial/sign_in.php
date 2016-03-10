<?php 
include "webHeader.php"; 
include "topNavigation.php"; 
?>
      <section>
                <!-- CONTACT -->
         <div id="contact">
            <div class="line">
               <h2 class="section-title">Sign In</h2>
               <div class="margin">
                  <div class="s-12 m-12 l-5">
                    <form name="contactus" class="customform" action="login_db.php" method="POST">
                      
                     <div class="s-12"><input name="username" placeholder="Username" title="Username" type="text" /></div>
					
					  <div class="s-12"><input name="password" placeholder="Password" title="password" type=password /></div>
					
                      <div class="s-12 m-12 l-4"><button class="color-btn" type="submit" >Sign In</button></div>
                    </form>
                  </div>                
               </div>
            </div>
         </div>
      </section>
<html>
<script type="text/javascript">
</script>
</html>
<?php 
include "webFooter.php"; ?>