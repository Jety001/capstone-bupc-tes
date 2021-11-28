   <!-- Masthead-->
   <header class="masthead" style="padding-top: 120px;">
       <div class="container" style="align-items:center;">
           <font color="black">

               <div class="masthead-heading" style="font-size: 3.25rem;
  font-weight: 700;
  padding:10px;
  background-color: rgba(224, 221, 221, 0.8);
  line-height: 3.25rem;
  margin-bottom: 2rem;
  text-align:center;
  box-shadow: 5px 5px 20px 4px #202020;
  border-radius:10px;
  font-family: Montserrat;
  margin-bottom:-150px;
  ">BUPC TES | Contact <br>
                   <h6 style="margin-top:5px;">
                       <p>
                       You can contact us through the given details below.</p>
                   </h6>
               </div>
       </div>
   </header>

   <!-- Body -->

   <section>
       <div class="container">
           <div class="row">
               <div class="col-lg-6 ">
                   <iframe style=" box-shadow: 5px 5px 5px 4px #7d7e7e;
  border-radius:5px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3882.8679519953735!2d123.48249791434691!3d13.296188111271276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a1a0f8e33fed49%3A0x50cbb3fd2083cc1!2sBicol%20University%2C%20Polangui%20Campus!5e0!3m2!1sen!2sph!4v1635061178748!5m2!1sen!2sph" width="100%" height="384" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
               </div>

               <div class="col-lg-6">
                   <h5 class="">
                       <br><br>
                       ADDRESS:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#021d41">Polangui,
                           Albay</font>
                       <br><br>
                       FB PAGE:
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       <a href="https://web.facebook.com/BUPCOSA" target="_blank">
                           <font color="#021d41">BUPC OSA</font>
                       </a>
                       <br><br>
                       EMAIL ADDRESS: &nbsp;&nbsp; <a href="https://mail.google.com" target="_blank">
                           <font color="#021d41">ben.saminiano@bicol-u.edu.ph</font>
                       </a>

                       <br><br>

                       <form action="php/visitor/dblink.php" method="post" role="form" class="php-email-form">
                           <div class="form-row">
                               <div class="col form-group">
                                   <input readonly style=" box-shadow: 5px 5px 5px 4px #dfdfdf;
  border-radius:1px;" type="text" name="name" class="form-control" value="<?php echo $_SESSION['user_name'] ?>" id="name" placeholder="<?php echo $_SESSION['user_name'] ?>" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                   <div class="validate"></div>
                               </div>
                               <div class="col form-group">
                                   <input readonly style=" box-shadow: 5px 5px 5px 4px #dfdfdf;
  border-radius:1px;" type="email" class="form-control" name="email" value="<?php echo $_SESSION['user_username'] ?>" id="email" placeholder="<?php echo $_SESSION['user_username'] ?>" data-rule="email" data-msg="Please enter a valid email" />
                                   <div class="validate"></div>
                               </div>
                           </div>
                           <div class="form-group">
                               <input autocomplete="off" style=" box-shadow: 5px 5px 5px 4px #dfdfdf;
  border-radius:1px;" type="text" class="form-control" name="subject" id="subject" placeholder="Subject of your concern..." data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                               <div class="validate"></div>
                           </div>
                           <div class="form-group">
                               <textarea style=" box-shadow: 5px 5px 5px 4px #dfdfdf;
  border-radius:1px;" class="form-control" name="body" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                               <div class="validate"></div>
                           </div>

                          <button class="btn btn-info text-center" type="submit" name="submit">Send Message</button>
                       </form>

                   </h5>
               </div>

           </div>
       </div>
   </section>
   <!-- 
<div class="col-lg-6">
         
         <font color="black">
             <h4 class="mob">
                 ADDRESS:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#021d41">Polangui,
                     Albay</font>
                 <br><br>
                 FB PAGE:
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <a href="https://web.facebook.com/BUPCOSA" target="_blank">
                     <font color="#021d41">BUPC OSA</font>
                 </a>
                 <br><br>
                 EMAIL ADDRESS: &nbsp;&nbsp; <a href="https://mail.google.com" target="_blank">
                     <font color="#021d41">ben.saminiano@bicol-u.edu.ph</font>
                 </a>

             </h4>
         </font>

</div> -->