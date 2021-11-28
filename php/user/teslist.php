
<!-- jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<!--Datatables -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

<body id="page-top">
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
  ">BUPC TES Grantees <br>
                    <h4 style=" text-shadow: 5px 5px 20px 4px #202020;">AY 2020-2021</h4>
                </div>



        </div>
    </header>

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

    <div class="container bg-light" style="padding-top: 50px;">

        <table id="myTable" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <!-- <th>No.</th> -->
                    <th>Surname</th>
                    <th>Firstname</th>
                    <th>Middlename</th>
                    <th>Course</th>
                    <th>Year</th>
                    <th>ATM Status</th>

                </tr>
            </thead>
            <tbody>
                <?php

                $tes = mysqli_query($con, "SELECT * FROM regist_db ORDER BY reg_user ASC ");


                while ($row = mysqli_fetch_array($tes)) { ?>

                    <tr class="mob1">
                        <!-- <td scope="row"><?php echo $row['reg_id']; ?></td> -->
                        <td class="text-uppercase"><?php echo $row['reg_user']; ?></td>
                        <td class="text-uppercase"><?php echo $row['reg_given']; ?></td>
                        <td class="text-uppercase"><?php echo $row['reg_middle']; ?></td>
                        <td class="text-uppercase"><?php echo $row['reg_course']; ?></td>
                        <td class="text-uppercase"><?php echo $row['reg_year']; ?></td>
                        <td class="text-uppercase"><?php echo $row['reg_atm']; ?></td>

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