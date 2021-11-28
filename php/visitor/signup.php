

 <!DOCTYPE html>
 <html>


 <head>
     <style type="text/css">
     @media only screen and (max-width: 600px) {
         .img {

             left: 1%;
             width: 50%;
             height: 60;
             position: absolute;
             top: 0;
             opacity: 0.5;
             z-index: 1;

         }

         .c {
             z-index: 3;
             position: absolute;
         }

         .buts {
             bottom: 20%;
             margin-bottom: 15%;
             position: absolute;
             left: 3%;
             right: 3%;
         }

         .homss {
             z-index: 5;
             position: absolute;

         }

     }
     </style>
     <title>SIGN UP</title>
     <link rel="stylesheet" type="text/css" href="../../css/signup1.css">
     <link rel="icon"=href="logo tes.png">
     <ul style="margin-left:60px;">
         <!-- <li><h2> <a href="bioV.php" target="_self">ABOUT ME</a></h2></li> -->
         <li>
             <h2> <a href="indexV.php" target="_self" class="homss">HOME</a></h2>
         </li>
     </ul>
 </head>

 <body>
     <p id="create" class="c" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:30px;">Create your account</p>
     <form method="POST" id="signup_form" action="dblink.php" class="buts">
         <input id="info" type="text" name="Name" placeholder="Name" required><br><br>
         <input id="info" type="email" name="username" placeholder="Email" required><br><br>
         <input id="info" type="password" name="password" placeholder="Password" required><br><br>
         <input type="text" name="status" hidden value="0"> 
         <button class="signupBtn" value="Sign Up" name="submits">Submit</button>

     </form>

     <!-- <img src="logo tes.png" alt="Trulli" class="img"> -->

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