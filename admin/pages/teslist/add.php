<?php 
include('../../conn.php');
if (isset($_POST['add'])) {
    $reg_user = $_POST['reg_user'];
    $reg_given = $_POST['reg_given'];
    $reg_middle = $_POST['reg_middle'];
    $reg_course = $_POST['reg_course'];
    $reg_year = $_POST['reg_year'];
    $reg_atm = $_POST['reg_atm'];
}
$query = "INSERT INTO regist_db (reg_user, reg_given, reg_middle, reg_course, reg_year, reg_atm) 
VALUES 
('$reg_user', '$reg_given', '$reg_middle', '$reg_course','$reg_year','$reg_atm')";


mysqli_query($db, $query);
header("location:../../index.php?q=teslist");
$_SESSION['status'] = "Woo hoo!";
$_SESSION['text'] = "Student added successfully!";

