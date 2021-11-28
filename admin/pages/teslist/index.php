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
    ">BUPC TES Admin | TES List <br>
                <!-- <h6 style="margin-top:5px;">
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. </p>
                </h6>
            </div> -->

            </div>
</header>

<!-- /Masthead -->

<!-- Datatables -->
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
        border-bottom: 1px solid #e2e8f0;
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

<!-- /Datatables -->


<!-- Add Modal -->
<!-- Button trigger modal -->
<div class="container">
    <div class="d-flex justify-content-sm-end" style="padding-top: 10px;">
        <button type="button" style="box-shadow: 5px 5px 20px 4px #666; align-content:center;" class="btn btn-info btn-md" data-toggle="modal" data-target="#add">Add Student</button>

        &nbsp; &nbsp; &nbsp;

        <button type="button" style="box-shadow: 5px 5px 20px 4px #666; align-content:center;" class="btn btn-warning btn-md" data-toggle="modal" data-target="#report">Generate Report</button>

    </div>

</div>
<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="pages/teslist/controller.php">
                    <div class="form-group">
                        <input type="text" class="form-control" name="reg_studentID" placeholder="Student ID">
                    </div>
                    <div class="form-group">
                        <input required type="text" class="form-control text-uppercase" name="reg_user" placeholder="SURNAME">
                    </div>

                    <div class="form-group">

                        <input required type="text" class="form-control text-uppercase" name="reg_given" placeholder="FIRSTNAME">

                    </div>

                    <div class="form-group">

                        <input required type="text" class="form-control text-uppercase" name="reg_middle" placeholder="MIDDLENAME">

                    </div>

                    <div class="form-group">

                        <select class="form-control" name="reg_course" id="reg_course" required>
                            <option value="" disabled selected hidden>Select</option>
                            <option class="text-warning" disabled value="BSIS">COMPUTER STUDIES DEPARTMENT</option>
                            <option value="BS Information System">BS Information System</option>
                            <option value="BS Information Technology">BS Information Technology</option>
                            <option value="BS Information Technology (ANIMATION)">BS Information Technology (ANIMATION)</option>
                            <option value="BS Computer Science">BS Computer Science</option>
                            <hr class="mt-2 mb-3">
                            <option class="text-warning" disabled value="BSIS">TECHNOLOGY AND ENTREP DEPARTMENT </option>
                            <option value="BS Electrical Technology">BS Electrical Technology</option>
                            <option value="BS Electronic Technoloy">BS Electronic Technoloy</option>
                            <option value="BS Automotive Technology">BS Automotive Technology</option>
                            <option value="BS Mechanical Technology">BS Mechanical Technology</option>
                            <option value="BS Food Technology">BS Food Technology</option>
                            <option value="BS Entrepreneurship">BS Entrepreneurship</option>

                            <option class="text-warning" disabled value="BSIS">NURSING DEPARTMENT</option>
                            <option value="BS Nursing">BS Nursing</option>

                            <option class="text-warning" disabled value="BSIS">EDUCATION DEPARTMENT</option>
                            <option value="Bachelor of Elementary Education">Bachelor of Elementary Education</option>
                            <option value="Bachelor of Secondary in Education major in Mathematics">Bachelor of Secondary in Education major in Mathematics</option>
                            <option value="Bachelor of Secondary in Education major in English">Bachelor of Secondary in Education major in English</option>
                            <option value="Bachelor of Technology & Livelihood Education Home Economics">Bachelor of Technology & Livelihood Education Home Economics</option>
                            <option value="Bachelor of Technology & Livelihood Education ICT">Bachelor of Technology & Livelihood Education ICT</option>


                            <option class="text-warning" disabled value="BSIS">ENGINEERING DEPARTMENT</option>
                            <option value="BS Computer Engineering">BS Computer Engineering</option>
                            <option value="BS Electronics and Communication Engineering">BS Electronics and Communication Engineering</option>



                        </select>
                    </div>

                    <div class="form-group">

                        <select class="form-control" name="reg_year" id="reg_year" required>
                            <option value="" disabled selected hidden>Select</option>
                            <option value="1st">1st Year</option>
                            <option value="2nd">2nd Year</option>
                            <option value="3rd">3rd Year</option>
                            <option value="4th">4th Year</option>
                        </select>
                    </div>


                    <div align="left" >
                          <input type="radio" name="reg_atm" value="with ATM" required>
                          <label for="html">With ATM</label><br>
                          <input type="radio" name="atm" value="without ATM">
                          <label for="css">Without ATM</label>
                         </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-tertiary btn-dark" data-dismiss="modal">Close</button>
                        <button name="add" class="btn btn-tertiary btn-info" style="border: 1px solid">Add</button>
                    </div>

            </div>
            </form>
        </div>

    </div>
</div>
</div>

<!-- /Add Modal -->






<!-- Tables -->

<div class="container bg-light" style="padding-top: 50px;">
    <table class="table table-striped" id="myTable" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <!-- <th>No.</th> -->
                <th>Surname</th>
                <th>Firstname</th>
                <th>Middlename</th>
                <th>Course</th>
                <th>Year Level</th>
                <th>ATM Status</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            <?php

            $tes = mysqli_query($db, "SELECT * FROM regist_db ORDER BY reg_user ASC ");
            while ($row = mysqli_fetch_array($tes)) { ?>





                <tr class="mob1">
                    <!-- <td scope="row"><?php echo $row['reg_id']; ?></td> -->
                    <td class="text-uppercase"><?php echo $row['reg_user']; ?></td>
                    <td class="text-uppercase"><?php echo $row['reg_given']; ?></td>
                    <td class="text-uppercase"><?php echo $row['reg_middle']; ?></td>
                    <td class="text-uppercase"><?php echo $row['reg_course']; ?></td>
                    <td class="text-uppercase"><?php echo $row['reg_year']; ?></td>
                    <td class="text-uppercase"><?php echo $row['reg_atm']; ?></td>
                    <td class="text-uppercase"><a href="#update<?php echo $row['reg_id']; ?>" data-toggle="modal"><i class="far fa-edit"></i></a>&nbsp;&nbsp;&nbsp; <a href="#delete<?php echo $row['reg_id']; ?>" data-toggle="modal"><i class="far fa-trash-alt"></i></a></td>

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

<!-- /Tables -->



<?php $up = mysqli_query($db, "SELECT * FROM regist_db");
while ($row = mysqli_fetch_array($up)) { ?>


    <!-- Update Modal -->

    <!-- Modal -->
    <div class="modal fade" id="update<?php echo $row['reg_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Update Student</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="pages/teslist/controller.php">

                        <input hidden type="text" name="reg_id" value="<?php echo $row['reg_id']; ?>">

                        <div class="form-group">
                            <input type="text" placeholder="Student ID" class="form-control text-uppercase" class="form-control" name="reg_studentID" value="<?php echo $row['reg_studentID']; ?>">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control text-uppercase" name="reg_user" value="<?php echo $row['reg_user']; ?>"">
                       </div>

                       <div class=" form-group">

                            <input type="text" class="form-control text-uppercase" name="reg_given" value="<?php echo $row['reg_given']; ?>">

                        </div>

                        <div class="form-group">

                            <input type="text" class="form-control text-uppercase" name="reg_middle" value="<?php echo $row['reg_middle']; ?>">

                        </div>

                        <div class="form-group">

                            <select class="form-control" name="reg_course" id="reg_course" required>
                                <option selected hidden value="<?php echo $row['reg_course']; ?>"><?php echo $row['reg_course']; ?></option>
                                <hr>
                                <option class="text-warning" disabled value="BSIS">COMPUTER STUDIES DEPARTMENT</option>
                                <option value="BS Information System">BS Information System</option>
                                <option value="BS Information Technology">BS Information Technology</option>
                                <option value="BS Information Technology (ANIMATION)">BS Information Technology (ANIMATION)</option>
                                <option value="BS Computer Science">BS Computer Science</option>
                                <hr class="mt-2 mb-3">
                                <option class="text-warning" disabled value="BSIS">TECHNOLOGY AND ENTREP DEPARTMENT </option>
                                <option value="BS Electrical Technology">BS Electrical Technology</option>
                                <option value="BS Electronic Technoloy">BS Electronic Technoloy</option>
                                <option value="BS Automotive Technology">BS Automotive Technology</option>
                                <option value="BS Mechanical Technology">BS Mechanical Technology</option>
                                <option value="BS Food Technology">BS Food Technology</option>
                                <option value="BS Entrepreneurship">BS Entrepreneurship</option>

                                <option class="text-warning" disabled value="BSIS">NURSING DEPARTMENT</option>
                                <option value="BS Nursing">BS Nursing</option>

                                <option class="text-warning" disabled value="BSIS">EDUCATION DEPARTMENT</option>
                                <option value="Bachelor of Elementary Education">Bachelor of Elementary Education</option>
                                <option value="Bachelor of Secondary in Education major in Mathematics">Bachelor of Secondary in Education major in Mathematics</option>
                                <option value="Bachelor of Secondary in Education major in English">Bachelor of Secondary in Education major in English</option>
                                <option value="Bachelor of Technology & Livelihood Education Home Economics">Bachelor of Technology & Livelihood Education Home Economics</option>
                                <option value="Bachelor of Technology & Livelihood Education ICT">Bachelor of Technology & Livelihood Education ICT</option>


                                <option class="text-warning" disabled value="BSIS">ENGINEERING DEPARTMENT</option>
                                <option value="BS Computer Engineering">BS Computer Engineering</option>
                                <option value="BS Electronics and Communication Engineering">BS Electronics and Communication Engineering</option>


                            </select>
                        </div>

                        <div class="form-group">

                            <select class="form-control" name="reg_year" id="reg_year">
                                <option value="<?php echo $row['reg_year']; ?>"><?php echo $row['reg_year']; ?></option>
                                <option value="1st">1st</option>
                                <option value="2nd">2nd</option>
                                <option value="3rd">3rd</option>
                                <option value="4th">4th</option>
                            </select>
                        </div>


                        <div align="left">
                              <input type="radio" name="reg_atm" value="with ATM" <?php if ($row['reg_atm'] == "with ATM") {
                                                                                        echo "checked";
                                                                                    } ?>>
                              <label for="html">With ATM</label><br>
                              <input type="radio" name="reg_atm" value="without ATM" <?php if ($row['reg_atm'] == "without ATM") {
                                                                                            echo "checked";
                                                                                        } ?>>
                              <label for="css">Without ATM</label>
                             </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button name="update" type="submit" class="btn btn-tertiary btn-info" style="border: 1px solid">Update</button>
                        </div>

                </div>
                </form>
            </div>

        </div>
    </div>
    </div>

    <!-- /Update Modal -->

<?php } ?>

<?php $del = mysqli_query($db, "SELECT * FROM regist_db");
while ($row = mysqli_fetch_array($del)) { ?>

    <!-- Delete Modal -->

    <!-- Modal -->
    <div class="modal fade" id="delete<?php echo $row['reg_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Remove from List</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="GET" action="pages/teslist/controller.php">

                        <input hidden type="text" name="reg_id" value="<?php echo $row['reg_id']; ?>">
                        <div class="form-group">
                            <input type="text" class="form-control text-uppercase" name="reg_user" value="<?php echo $row['reg_user']; ?>"">
                       </div>

                       <div class=" form-group">
                            <input type="text" class="form-control text-uppercase" name="reg_given" value="<?php echo $row['reg_given']; ?>">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control text-uppercase" name="reg_middle" value="<?php echo $row['reg_middle']; ?>">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button name="delete" type="submit" class="btn btn-tertiary btn-danger" style="border: 1px solid">Delete</button>
                        </div>

                </div>
                </form>
            </div>

        </div>
    </div>
    </div>

    <!-- /Delete Modal -->

<?php } ?>



<!-- Generate Report -->

<div class="modal fade" id="report" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Generate Report</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <label>Generate Report by Year Level:</label>
                <div class="dropdown d-flex justify-content-center mb-5">
                    <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Select Year Level
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="./pages/teslist/report/first.php" target="_blank">TES List in First Year</a>
                        <a class="dropdown-item" href="./pages/teslist/report/second.php" target="_blank">TES List in Second Year</a>
                        <a class="dropdown-item" href="./pages/teslist/report/third.php" target="_blank">TES List in Third Year</a>
                        <a class="dropdown-item" href="./pages/teslist/report/fourth.php" target="_blank">TES List in Fourth Year</a>
                    </div>
                </div>



                <label>Generate Report by Course:</label>
                <div class="dropdown d-flex justify-content-center mb-5">
                    <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Select Course
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="./pages/teslist/reports-c/bsis.php" target="_blank">BS Information System</a>
                        <a class="dropdown-item" href="./pages/teslist/reports-c/bsit.php" target="_blank">BS Information Technology</a>
                        <a class="dropdown-item" href="./pages/teslist/reports-c/bsita.php" target="_blank">BS Information Technology (Animation)</a>
                        <a class="dropdown-item" href="./pages/teslist/reports-c/bsn.php" target="_blank">BS Nursing</a>
                        <a class="dropdown-item" href="./pages/teslist/reports-c/bselectrical.php" target="_blank">BS Electrical Technology</a>
                        <a class="dropdown-item" href="./pages/teslist/reports-c/bselectronic.php" target="_blank">BS Electronic Technology</a>
                        <a class="dropdown-item" href="./pages/teslist/reports-c/bsautomotive.php" target="_blank">BS Automotive Technology</a>
                        <a class="dropdown-item" href="./pages/teslist/reports-c/bsmechanical.php" target="_blank">BS Mechanical Technology</a>
                        <a class="dropdown-item" href="./pages/teslist/reports-c/bsft.php" target="_blank">BS Food Technology</a>
                        <a class="dropdown-item" href="./pages/teslist/reports-c/bsentrep.php" target="_blank">BS Entrepreneurship</a>
                        <a class="dropdown-item" href="./pages/teslist/reports-c/bsce.php" target="_blank">BS Computer Engineering</a>
                        <a class="dropdown-item" href="./pages/teslist/reports-c/bsece.php" target="_blank">BS Electronics and Communication Engineering</a>
                        <a class="dropdown-item" href="./pages/teslist/reports-c/beed.php" target="_blank">BEEd</a>
                        <a class="dropdown-item" href="./pages/teslist/reports-c/bsedmath.php" target="_blank">BSEd Math</a>
                        <a class="dropdown-item" href="./pages/teslist/reports-c/bsedeng.php" target="_blank">BSEd English</a>
                        <a class="dropdown-item" href="./pages/teslist/reports-c/btledict.php" target="_blank">BTLEd ICT</a>
                        <a class="dropdown-item" href="./pages/teslist/reports-c/btledhe.php" target="_blank">BTLEd HE</a>


                    </div>
                </div>

                <label>Generate Report by ATM Status:</label>
                <div class="dropdown d-flex justify-content-center mb-5">
                    <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Select Status
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="./pages/teslist/report/atm.php" target="_blank">TES List with ATM</a>
                        <a class="dropdown-item" href="./pages/teslist/report/watm.php" target="_blank">TES List without ATM</a>
                    </div>
                </div>

                <label>Overall List of TES Grantess</label>
                <div class="dropdown d-flex justify-content-center mb-5">
                    <a href="./pages/teslist/generate-report.php" target="_blank"><button class="btn btn-warning">Generate Report</button></a>
                </div>


            </div>

        </div>
    </div>
</div>

<!-- /Generate Report -->