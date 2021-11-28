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
  ">BUPC TES Admin | Profile <br>
                   <!-- <h6 style="margin-top:5px;">
                       <p>
                           Lorem ipsum dolor sit amet consectetur, adipisicing elit. </p>
                   </h6> -->
               </div>

       </div>
   </header>

   <!-- Body -->





   <hr>
   <div class="container bootstrap snippet">

       <div class="row">
           <div class="col-sm-3">
               <!--left col-->
               <?php $admin = mysqli_query($db, "SELECT * FROM users WHERE user_id='2'");
                while ($row = mysqli_fetch_array($admin)) { ?>
                   <form class="form" action="pages/profile/controller.php" method="post" enctype="multipart/form-data">
                       <div class="text-center">
                           <!-- <a href="#picture" data-toggle="modal">
                   <img style="border-radius:50%;" src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                   </a> -->

                           <img class="rounded avatar img-circle img-thumbnail" src="<?php echo 'pages/profile/picture/' . $row['picture']; ?>" id="profileDisplay" onClick="triggerClick()" name="picture" style="border-radius:50%" alt="avatar">
                           <input type="file" name="profileImage" style="opacity:0; top: -60px; margin-right: -120px; display: flex;" onChange="displayImage(this)" id="profileImage">
                       </div>
                       </hr><br>



           </div>
           <!--/col-3-->
           <div class="col-sm-9">


               <div class="tab-content">
                   <div class="tab-pane active" id="home">
                       <hr>

                       <div class="form-group">
                           <input type="text" hidden name="user_id" value="<?php echo $row['user_id'] ?>">
                           <div class="col-xs-6">
                               <label for="first_name">
                                   <h4>Name</h4>
                               </label>
                               <input readonly type="text" class="form-control" name="user_name" value="<?php echo $row['user_name']; ?>">
                           </div>
                       </div>

                       <div class="form-group">

                           <div class="col-xs-6">
                               <label for="last_name">
                                   <h4>Email</h4>
                               </label>
                               <input required type="email" class="form-control" name="user_username" value="<?php echo $row['user_username']; ?>">
                           </div>
                       </div>


                       <div class="form-group">
                           <div class="col-xs-6">
                               <label for="phone">
                                   <h4>Password</h4>
                               </label>
                               <input readonly id="myInput" type="password" class="form-control" value="<?php echo $row['user_pass']; ?>">
                           </div>
                       </div>
                       <div class="form-group">

                           <div class="col-xs-6">
                               <label for="phone">
                                   <h4>Change Password</h4>
                               </label>
                               <input required type="password" class="form-control" name="user_pass" placeholder="New Password">
                           </div>
                       </div>

                       <input type="checkbox" onclick="myFunction()"> Show Old Password
                       <div class="form-group d-flex justify-content-end">
                           <div class="col-xs-12">

                               <br>




                               <button class="btn btn-md btn-info" name="save" type="submit">Save</button>
                               <button class="btn btn-md btn-dark" type="reset"><a style="text-decoration: none;color:#fff;" href="index.php?q=home">Cancel</a> </button>
                           </div>
                       </div>
                       </form>

                       <hr>

                   <?php } ?>
                   </div>
                   <!--/tab-content-->

               </div>
               <!--/col-9-->
           </div>
           <!--/row-->
       </div>
   </div>


   <script>
       function myFunction() {
           var x = document.getElementById("myInput");
           if (x.type === "password") {
               x.type = "text";
           } else {
               x.type = "password";
           }
       }

       function triggerClick(e) {
           document.querySelector("#profileImage").click();
       }

       function displayImage(e) {
           if (e.files[0]) {
               var reader = new FileReader();
               reader.onload = function(e) {
                   document
                       .querySelector("#profileDisplay")
                       .setAttribute("src", e.target.result);
               };
               reader.readAsDataURL(e.files[0]);
           }
       }
   </script>


   <!-- Modal for picture -->


   <!-- Add Modal -->

   <div class="modal fade" id="picture" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Upload Picture</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="modal-body">
                   <form method="POST" action="pages/profile/controller.php" enctype="multipart/form-data">
                       <div class="form-group">
                           <input type="text" hidden name="user_id">
                           <input type="file" class="form-group" name="picture">
                       </div>
                       <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                           <button name="upload" type="submit" class="btn btn-info">Upload</button>
                       </div>
               </div>
               </form>
           </div>
       </div>
       <!-- /Add Modal -->



   </div>