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
  ">BUPC TES Admin | Inquiries <br>
                   <h6 style="margin-top:5px;">
                       <p>
                       This page shows messages sent by BUPC Students and TES Grantees. Replies are sent to the user’s BU mail. </p>
                   </h6>
               </div>

       </div>
   </header>
<!-- /Masthead -->


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
           <button type="button" style="box-shadow: 5px 5px 20px 4px #666; align-content:center;" class="btn btn-info btn-md" data-toggle="modal" data-target="#add">Send Email</button>
       </div>
   </div>

<!-- Body -->

   <div class="container bg-light" style="padding-top: 50px;">
       <table class="table table-striped" id="myTable" class="display" cellspacing="0" width="100%">
           <thead>
               <tr>
                   <!-- <th>No.</th> -->
                   <th>Name</th>
                   <th>Email</th>
                   <th>Subject</th>
                   <th>Body</th>

                   <th>Action</th>

               </tr>
           </thead>
           <tbody>
               <?php

                $tes = mysqli_query($db, "SELECT * FROM `message` WHERE status='0' ORDER BY id DESC");


                while ($row = mysqli_fetch_array($tes)) { ?>

                   <tr class="mob1">
                       <!-- <td scope="row"><?php echo $row['id']; ?></td> -->
                       <td class="" col=10><?php echo $row['name']; ?></td>
                       <td class=""><?php echo $row['email']; ?></td>
                       <td class=""><?php echo $row['subject']; ?></td>
                       <td class=""><?php echo $row['body']; ?></td>

                       <td class=""><a href="#send<?php echo $row['id']; ?>" data-toggle="modal"><i class="far fa-paper-plane"></i></a>&nbsp;&nbsp;&nbsp;<a href="#delete<?php echo $row ['id'] ?>" data-toggle="modal"><i class="far fa-trash-alt"></i></a></td>

                   </tr>


               <?php      }

                ?>
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
                   <h5 class="modal-title" id="exampleModalLabel">Send Email</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="modal-body">
                   <form method="POST" action="pages/messages/controller.php">
                       <div class="form-group">

                       <label for="">Name</label>
                           <input type="text" class="form-control" name="name" placeholder="Name...">
                       </div>

                       <div class="form-group">
                       <label for="">Email to:</label>
                           <input class="form-control" type="email" name="email" placeholder="Email..."></input>
                       </div>


                       <div class="form-group">
                       <label for="">Subject</label>
                           <input type="text" class="form-control" name="subject" placeholder="Subject...">
                       </div>

                       <div class="form-group">
                       <label for="">Body</label>
                                             <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" type="text" class="text" class="form-control" name="reply"
                                             placeholder="Enter Text Here"></textarea>
                                         </div>

                       <input hidden type="number" name="status" value="1">

               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   <button name="send" type="submit" class="btn btn-info">Send Email</button>
               </div>
           </div>
           </form>
       </div>
   </div>
<!-- /Add Modal -->

<?php $send = mysqli_query($db, "SELECT * FROM message");
while ($row = mysqli_fetch_array($send)){ ?>
<!-- Update Modal -->
    <div class="modal fade" id="send<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Send Reply Email</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="pages/messages/controller.php">

                        <input hidden type="text" name="id" value="<?php echo $row['id']; ?>">
                        <div class="form-group">
                            <input readonly value="<?php echo $row['name']; ?>" type="text" class="form-control" name="name" placeholder="Name...">
                        </div>

                        <div class="form-group">
                        
                            <input readonly value="<?php echo $row['email']; ?>" class="form-control" type="email" name="email" placeholder="Email..."></input>
                        </div>


                        <div class="form-group">
                    
                            <input readonly value="<?php echo $row['subject']; ?>" type="text" class="form-control" name="subject" placeholder="Subject...">
                        </div>

                        <div class="form-group">
                        
                                            <textarea readonly class="form-control" id="exampleFormControlTextarea1" rows="5" type="text" class="text" class="form-control" name="body"
                                    value=""           placeholder="Enter Text Here"><?php echo $row['body']; ?></textarea>
                                            </div>

                        <div class="form-group">
                        <label for="">Reply</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" type="text" class="text" class="form-control" name="reply"
                    value=""           placeholder="Enter Text Here"></textarea>
                        </div>

                        <input hidden type="number" name="status" value="1">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button name="send" type="submit" class="btn btn-info">Send Email</button>
                </div>
            </div>
            </form>
        </div>
    </div>
<!-- /Update Modal -->

<?php } ?>


<?php $del = mysqli_query($db, "SELECT * FROM message");
while ($row = mysqli_fetch_array($del)){ ?>
<!-- Delete Modal -->
    <div class="modal fade" id="delete<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="GET" action="pages/messages/controller.php">
                        <div class="form-group">

                        <input hidden type="text" name="id" value="<?php echo $row['id'] ?>">
                        <label for="">From</label>
                            <input readonly value="<?php echo $row['name'] ?>" type="text" class="form-control" name="name" placeholder="Name...">
                        </div>

                        <div class="form-group">
                        <label for="">Email</label>
                            <input readonly value="<?php echo $row['email'] ?>" class="form-control" type="email" name="email" placeholder="Email..."></input>
                        </div>


                        <div class="form-group">
                        <label for="">Subject</label>
                            <input readonly value="<?php echo $row['subject'] ?>" type="text" class="form-control" name="subject" placeholder="Subject...">
                        </div>

                        <div class="form-group">
                        <label for="">Body</label>
                                                <textarea readonly class="form-control" id="exampleFormControlTextarea1" rows="10" type="text" class="text" class="form-control" name="body"
                                                placeholder="Enter Text Here"><?php echo $row['body'] ?></textarea>
                                            </div>

                        <input hidden type="number" name="status" value="1">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button name="delete" type="submit" class="btn btn-danger">Delete Message</button>
                </div>
            </div>
            </form>
        </div>
    </div>
<!-- /Delete Modal -->
<?php } ?>