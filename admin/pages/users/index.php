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
  ">BUPC TES Admin | List of Users <br>
                   <h6 style="margin-top:5px;">
                       <p>
                       This page shows the lists of Grantees under Tertiary Education Subsidy Program in Bicol University Polangui Campus. </p>
                   </h6>
               </div>

       </div>
   </header>

   <!-- Body -->


   <!-- Body -->

   <!--Regular Datatables CSS-->
   <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
   <!--Responsive Extension Datatables CSS-->
   <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


   <style>
       /*Overrides for Tailwind CSS */

       /*Form fields*/
       .dataTables_wrapper select,
       .dataTables_wrapper .dataTables_filter input {
           color: #4a5568;
           /*text-gray-700*/
           padding-left: 1rem;
           /*pl-4*/
           padding-right: 1rem;
           /*pl-4*/
           padding-top: .5rem;
           /*pl-2*/
           padding-bottom: .5rem;
           /*pl-2*/
           line-height: 1.25;
           /*leading-tight*/
           border-width: 2px;
           /*border-2*/
           border-radius: .25rem;
           border-color: #edf2f7;
           /*border-gray-200*/
           background-color: #edf2f7;
           /*bg-gray-200*/
       }

       /*Row Hover*/
       table.dataTable.hover tbody tr:hover,
       table.dataTable.display tbody tr:hover {
           background-color: #ebf4ff;
           /*bg-indigo-100*/
       }

       /*Pagination Buttons*/
       .dataTables_wrapper .dataTables_paginate .paginate_button {
           font-weight: 700;
           /*font-bold*/
           border-radius: .25rem;
           /*rounded*/
           border: 1px solid transparent;
           /*border border-transparent*/
       }

       /*Pagination Buttons - Current selected */
       .dataTables_wrapper .dataTables_paginate .paginate_button.current {
           color: #fff !important;
           /*text-white*/
           box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
           /*shadow*/
           font-weight: 700;
           /*font-bold*/
           border-radius: .25rem;
           /*rounded*/
           background: #fed136 !important;
           /*bg-indigo-500*/
           border: 1px solid transparent;
           /*border border-transparent*/
       }

       /*Pagination Buttons - Hover */
       .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
           color: #fff !important;
           /*text-white*/
           box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
           /*shadow*/
           font-weight: 700;
           /*font-bold*/
           border-radius: .25rem;
           /*rounded*/
           background: #fed136 !important;
           /*bg-indigo-500*/
           border: 1px solid transparent;
           /*border border-transparent*/
       }

       /*Add padding to bottom border */
       table.dataTable.no-footer {
           border-bottom: 2px solid #000;
           /*border-b-1 border-gray-300*/
           margin-top: 0.75em;
           margin-bottom: 0.75em;
       }

       /*Change colour of responsive icon*/
       table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
       table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
           background-color: #fed136 !important;
           /*bg-indigo-500*/
       }
   </style>
   <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/css/jquery.dataTables.css">
   <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/css/jquery.dataTables_themeroller.css">


   <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.1.min.js"></script>
   <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/jquery.dataTables.min.js"></script>


   <!-- Button trigger modal -->

   <div class="container d-flex justify-content-sm-end">
       <div class="" style="padding-top: 10px;">
           <button type="button" style="box-shadow: 5px 5px 20px 4px #666; align-content:center;" class="btn btn-info btn-md" data-toggle="modal" data-target="#add">Add User</button>
       </div>
   </div>


   <div class="container bg-light" style="padding-top: 50px;">
       <table class="table table-striped" id="myTable" class="display" cellspacing="0" width="100%">
           <thead>
               <tr>
                   <!-- <th>No.</th> -->
                   <th>Name</th>
                   <th>Email</th>
                   <th>Password</th>

                   <th>Action</th>

               </tr>
           </thead>
           <tbody>
               <?php $tes = mysqli_query($db, "SELECT * FROM users WHERE status='0' ORDER BY user_id DESC");
                while ($row = mysqli_fetch_array($tes)) { ?>

                   <tr class="mob1">
                       <!-- <td scope="row"><?php echo $row['user_id']; ?></td> -->
                       <td class=""><?php echo $row['user_name']; ?></td>
                       <td class=""><?php echo $row['user_username']; ?></td>
                       <td class=""><?php echo $row['user_pass']; ?></td>

                       <td class=""><a href="#update<?php echo $row['user_id']; ?>" data-toggle="modal"><i class="far fa-edit"></i></a>&nbsp;&nbsp;&nbsp; <a href="#delete<?php echo $row['user_id']; ?>" data-toggle="modal"><i class="far fa-trash-alt"></i></a></td>

                   </tr>
               <?php } ?>
           </tbody>
       </table>
   </div>

   <br><br><br>

   <script>
       $(document).ready(function() {
           $('#myTable').DataTable();
       });


       $('#myTable').dataTable();
   </script>


<!-- Add Modal -->

   <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="modal-body">
                   <form method="POST" action="pages/users/controller.php">
                 

                       <div class="form-group">
                       <label for="">Name</label>
                           <input type="text" class="form-control" name="user_name" placeholder="Name...">
                       </div>

                       <div class="form-group">
                       <label for="">Email</label>
                           <input class="form-control" type="email" name="user_username" placeholder="Email..."></input>
                       </div>


                       <div class="form-group">
                       <label for="">Password</label>
                           <input type="text" class="form-control" name="user_pass" placeholder="Password...">
                       </div>

                       <input hidden type="number" name="status" value="0">

               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   <button name="add" type="submit" class="btn btn-info">Add User</button>
               </div>
           </div>
           </form>
       </div>
   </div>
<!-- /Add Modal -->

<?php $up = mysqli_query($db, "SELECT * FROM users");
while ($row = mysqli_fetch_array($up)){ ?>
<!-- Update Modal -->
    <div class="modal fade" id="update<?php echo $row['user_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="modal-body">
                   <form method="POST" action="pages/users/controller.php">

                   <input hidden type="text" name="user_id" value="<?php echo $row['user_id']; ?>">

                   
                       <div class="form-group">
                       <label for="">Name</label>
                           <input id="name" type="text" value="<?php echo $row['user_name']; ?>" class="form-control" name="user_name" placeholder="Name...">
                       </div>

                       <div class="form-group">
                       <label for="">Email</label>
                           <input class="form-control" value="<?php echo $row['user_username']; ?>" type="email" name="user_username" placeholder="Email..."></input>
                       </div>


                       <div class="form-group">
                       <label for="">Password</label>
                           <input type="text" value="<?php echo $row['user_pass']; ?>" class="form-control" name="user_pass" placeholder="Password...">
                       </div>

                       <input hidden type="number" name="status" value="1">

               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   <button name="update" type="submit" class="btn btn-info">Update User</button>
               </div>
           </div>
           </form>
       </div>
   </div>
<!-- /Update Modal -->

<?php } ?>


<?php $del = mysqli_query($db, "SELECT * FROM users");
while ($row = mysqli_fetch_array($del)){ ?>
<!-- Delete Modal -->
    <div class="modal fade" id="delete<?php echo $row['user_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="modal-body">
                   <form method="GET" action="pages/users/controller.php">

                   <input hidden type="text" name="user_id" value="<?php echo $row['user_id']; ?>">

                   
                       <div class="form-group">
                       <label for="">Name</label>
                           <input readonly id="name" type="text" value="<?php echo $row['user_name']; ?>" class="form-control" name="user_name" placeholder="Name...">
                       </div>

                       <div class="form-group">
                       <label for="">Email</label>
                           <input readonly class="form-control" value="<?php echo $row['user_username']; ?>" type="email" name="user_username" placeholder="Email..."></input>
                       </div>


                       <div class="form-group">
                       <label for="">Password</label>
                           <input readonly type="text" value="<?php echo $row['user_pass']; ?>" class="form-control" name="user_pass" placeholder="Password...">
                       </div>

                       <input hidden type="number" name="status" value="1">

               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   <button name="delete" type="submit" class="btn btn-danger">Delete User</button>
               </div>
           </div>
           </form>
       </div>
   </div>
<!-- /Delete Modal -->
<?php } ?>