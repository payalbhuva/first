<?php 
include "webHeader.php"; 
include "topNavigation.php"; 
?>
      <section>
                <!-- CONTACT -->
         <div id="contact">
            <div class="line">
               <h2 class="section-title">Contact Us</h2>
               <div class="margin">
                  <div class="s-12 m-12 l-3 hide-m hide-s margin-bottom right-align">
                    <img src="img/contact.jpg" alt="">
                  </div>
                  <div class="s-12 m-12 l-4 margin-bottom right-align">
                     <h3>Volunteers Contact</h3>
                     <address>
                        <p><strong>Adress:</strong> B-15, Karve Road</p>
                        <p><strong>Country:</strong> India</p>
                        <p><strong>E-mail:</strong> test@test.com</p>
                     </address>
                  </div>
                  <div class="s-12 m-12 l-5">
                    <h3>contact form</h3>
                    <form class="customform" action="coord_reg_db.php" method="POST">
                      <div class="s-12"><input name="yourName" placeholder="Your name" title="Your name" type="text" /></div>
					  <div class="s-12"><input name="yourEmail" placeholder="Your e-mail" title="Your e-mail" type="text" /></div>
					  <div class="s-12"><input name="yourSubject" placeholder="Your subject" title="Your subject" type="text" /></div>
                      <div class="s-12"><textarea name="yourMessage" placeholder="Your message" rows="5"></textarea></div>
                      <div class="s-12 m-12 l-4">
			<button value="submit">Submit</button>
		 </div>
                    </form>
                  </div>                
               </div>
            </div>
         </div>
      </section>
<?php include "webFooter.php"; ?>