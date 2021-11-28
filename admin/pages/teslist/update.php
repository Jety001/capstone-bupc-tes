
<?php

include('../../conn.php');

if (isset($_POST['update'])) {


    $reg_id = $_POST['reg_id'];
    $reg_user = $_POST['reg_user'];
    $reg_given = $_POST['reg_given'];
    $reg_middle = $_POST['reg_middle'];
    $reg_course = $_POST['reg_course'];
    $reg_year = $_POST['reg_year'];
    $reg_atm = $_POST['reg_atm'];

   mysqli_query($db, "UPDATE regist_db SET reg_user='$reg_user', reg_given='$reg_given', 
reg_middle='$reg_middle', reg_course='$reg_course', reg_year='$reg_year', reg_atm='$reg_atm' 
WHERE reg_id='$reg_id'");


    header("location:../../index.php?q=teslist");
    $_SESSION['status'] = "Woo hoo!";
    $_SESSION['text'] = "Student updated successfully!";
}
