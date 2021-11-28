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
  ">BUPC TES Updates <br>
                   <h5 style=" text-shadow: 5px 5px 20px 4px #202020;margin-top:5px;">
                       <p>
                           <?php
                            date_default_timezone_set('Asia/Manila');
                            echo "<span style='color:red;font-weight:bold;'>Date: </span>" . date('F j, Y g:i:sA  ');
                            ?></p>
                   </h5>
               </div>





       </div>
   </header>

   <!-- Portfolio Grid-->
   <section class="page-section bg-light" id="portfolio">
       <div class="container">

           <div class="text-center">
               <span class="section-heading" style="color:#106eea; font-size:50px; font-weight:600">Facebook </span><span style="font-size:50px;font-weight:400">Announcements</span>
           </div>
           <?php
            $users = mysqli_query($con, "SELECT * FROM dataa ORDER BY user_id DESC");
            while ($row = mysqli_fetch_array($users)) {
            ?>

               <div class="container">
                   <div class="row">

                       <div class="col-sm-2" style="padding:15px;font-size:20px; font-weight:700; color:#106eea;"><?php echo $row['ann_date']; ?></div>

                       <div class="col-sm-10" style="padding:15px 0 0 5px; font-size:18px"><a target="_blank" class="announce" style="text-decoration: none;
             color:#000; font-family: Arial, Helvetica, sans-serif;" href="<?php echo $row['ann_link']; ?>"><?php echo $row['ann_content']; ?></a></div>


                   </div>
               </div>
           <?php } ?>
           <br><br><br>


           <div class="text-center">
               <h2 class="section-heading text-uppercase">Gallery</h2>
           </div>
           <div class="row">
               <div class="col-lg-4 col-sm-6 mb-4">
                   <div class="portfolio-item">
                       <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                           <div class="portfolio-hover">
                               <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                           </div>
                           <img class="img-fluid" src="php/user/assets/img/portfolio/01-thumbnail.jpg" alt="" />
                       </a>
                       <div class="portfolio-caption">
                           <div class="portfolio-caption-heading">#FreeEducationNa with President</div>
                           <div class="portfolio-caption-subheading text-muted">After the orientation with the theme
                               #FreeEducationNa, TES grantees students took a photo together with the Bicol University
                               President.</div>
                       </div>
                   </div>
               </div>
               <div class="col-lg-4 col-sm-6 mb-4">
                   <div class="portfolio-item">
                       <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                           <div class="portfolio-hover">
                               <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                           </div>
                           <img class="img-fluid" src="php/user/assets/img/portfolio/02-thumbnail.jpg" alt="" />
                       </a>
                       <div class="portfolio-caption">
                           <div class="portfolio-caption-heading">BUPC Personnel</div>
                           <div class="portfolio-caption-subheading text-muted">BUPC Personnel had a talk at the
                               registar's office regarding the TES scholarship</div>
                       </div>
                   </div>
               </div>
               <div class="col-lg-4 col-sm-6 mb-4">
                   <div class="portfolio-item">
                       <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                           <div class="portfolio-hover">
                               <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                           </div>
                           <img class="img-fluid" src="php/user/assets/img/portfolio/03-thumbnail.jpg" alt="" />
                       </a>
                       <div class="portfolio-caption">
                           <div class="portfolio-caption-heading">Interview</div>
                           <div class="portfolio-caption-subheading text-muted"></div>
                       </div>
                   </div>
               </div>
               <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                   <div class="portfolio-item">
                       <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                           <div class="portfolio-hover">
                               <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                           </div>
                           <img class="img-fluid" src="php/user/assets/img/portfolio/04-thumbnail.jpg" alt="" />
                       </a>
                       <div class="portfolio-caption">
                           <div class="portfolio-caption-heading">Online Orientation</div>
                           <div class="portfolio-caption-subheading text-muted">An online program was conducted on
                               August 2-5, 2021 by TES together with the TES
                               grantees students of Bicol University Polangui Campus </div>
                       </div>
                   </div>
               </div>
               <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                   <div class="portfolio-item">
                       <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                           <div class="portfolio-hover">
                               <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                           </div>
                           <img class="img-fluid" src="php/user/assets/img/portfolio/05-thumbnail.jpg" alt="" />
                       </a>
                       <div class="portfolio-caption">
                           <div class="portfolio-caption-heading">Online Orientation</div>
                           <div class="portfolio-caption-subheading text-muted">The orientation talks about the TES
                               Program with the theme #KalidadNaEDUKASYONAbotNa!</div>
                       </div>
                   </div>
               </div>
               <div class="col-lg-4 col-sm-6">
                   <div class="portfolio-item">
                       <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                           <div class="portfolio-hover">
                               <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                           </div>
                           <img class="img-fluid" src="php/user/assets/img/portfolio/06-thumbnail.jpg" alt="" />
                       </a>
                       <div class="portfolio-caption">
                           <div class="portfolio-caption-heading">Online Orientation</div>
                           <div class="portfolio-caption-subheading text-muted"></div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>




   <!-- Portfolio Modals-->
   <!-- Modal 1-->
   <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" />
               </div>
               <div class="container">
                   <div class="row justify-content-center">
                       <div class="col-lg-8">
                           <div class="modal-body">
                               <!-- Project Details Go Here-->
                               <h2 class="text-uppercase">#FreeEducationNa with President</h2>
                               <img class="img-fluid d-block mx-auto" src="php/user/assets/img/portfolio/01-full.jpg" alt="" />
                               <p>After the orientation with the theme #FreeEducationNa, TES grantees students took a
                                   photo together with the Bicol University President.</p>
                               <button class="btn btn-primary" data-dismiss="modal" type="button">
                                   <i class="fas fa-times mr-1"></i>
                                   Close
                               </button>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- Modal 2-->
   <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="close-modal" data-dismiss="modal"><img src="php/user/assets/img/close-icon.svg" alt="Close modal" />
               </div>
               <div class="container">
                   <div class="row justify-content-center">
                       <div class="col-lg-8">
                           <div class="modal-body">
                               <!-- Project Details Go Here-->
                               <h2 class="text-uppercase">BUPC Personnel</h2>
                               <img class="img-fluid d-block mx-auto" src="php/user/assets/img/portfolio/02-full.jpg" alt="" />
                               <p>Personnel had a talk at the registar's office regarding the TES scholarship</p>
                               <button class="btn btn-primary" data-dismiss="modal" type="button">
                                   <i class="fas fa-times mr-1"></i>
                                   Close
                               </button>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- Modal 3-->
   <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="close-modal" data-dismiss="modal"><img src="php/user/assets/img/close-icon.svg" alt="Close modal" />
               </div>
               <div class="container">
                   <div class="row justify-content-center">
                       <div class="col-lg-8">
                           <div class="modal-body">
                               <!-- Project Details Go Here-->
                               <h2 class="text-uppercase">Interview</h2>
                               <img class="img-fluid d-block mx-auto" src="php/user/assets/img/portfolio/03-full.jpg" alt="" />
                               <p></p>
                               <button class="btn btn-primary" data-dismiss="modal" type="button">
                                   <i class="fas fa-times mr-1"></i>
                                   Close
                               </button>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- Modal 4-->
   <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="close-modal" data-dismiss="modal"><img src="php/user/assets/img/close-icon.svg" alt="Close modal" />
               </div>
               <div class="container">
                   <div class="row justify-content-center">
                       <div class="col-lg-8">
                           <div class="modal-body">
                               <!-- Project Details Go Here-->
                               <h2 class="text-uppercase">Online Orientation</h2>
                               <img class="img-fluid d-block mx-auto" src="php/user/assets/img/portfolio/04-full.jpg" alt="" />
                               <p>An online program was conducted on August 2-5, 2021 by TES together with the TES
                                   grantees students of Bicol University Polangui Campus </p>
                               <button class="btn btn-primary" data-dismiss="modal" type="button">
                                   <i class="fas fa-times mr-1"></i>
                                   Close
                               </button>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- Modal 5-->
   <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="close-modal" data-dismiss="modal"><img src="php/user/assets/img/close-icon.svg" alt="Close modal" />
               </div>
               <div class="container">
                   <div class="row justify-content-center">
                       <div class="col-lg-8">
                           <div class="modal-body">
                               <!-- Project Details Go Here-->
                               <h2 class="text-uppercase">Online Orientation</h2>
                               <img class="img-fluid d-block mx-auto" src="php/user/assets/img/portfolio/05-full.jpg" alt="" />
                               <p>The orientation talks about the TES Program with the theme
                                   #KalidadNaEDUKASYONAbotNa!</p>
                               <button class="btn btn-primary" data-dismiss="modal" type="button">
                                   <i class="fas fa-times mr-1"></i>
                                   Close
                               </button>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- Modal 6-->
   <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="close-modal" data-dismiss="modal"><img src="php/user/assets/img/close-icon.svg" alt="Close modal" />
               </div>
               <div class="container">
                   <div class="row justify-content-center">
                       <div class="col-lg-8">
                           <div class="modal-body">
                               <!-- Project Details Go Here-->
                               <h2 class="text-uppercase">Online Orientation</h2>
                               <img class="img-fluid d-block mx-auto" src="php/user/assets/img/portfolio/06-full.jpg" alt="" />
                               <p></p>
                               <button class="btn btn-primary" data-dismiss="modal" type="button">
                                   <i class="fas fa-times mr-1"></i>
                                   Close
                               </button>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- Bootstrap core JS-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
   <!-- Third party plugin JS-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
   <!-- Contact form JS-->
   <script src="assets/mail/jqBootstrapValidation.js"></script>
   <script src="assets/mail/contact_me.js"></script>
   <!-- Core theme JS-->
   <script src="js/scripts.js"></script>
   </body>

   </html>