<?php
session_start();
include('../../conn.php');
if (isset($_POST['add'])) {

    $reg_user = $_POST['reg_user'];
    $reg_given = $_POST['reg_given'];
    $reg_middle = $_POST['reg_middle'];
    $reg_course = $_POST['reg_course'];
    $reg_year = $_POST['reg_year'];
    $reg_atm = $_POST['reg_atm'];
    $reg_studentID = $_POST['reg_studentID'];

    $get_user = mysqli_query($db, "SELECT * FROM regist_db WHERE reg_studentID='$reg_studentID'");
    if (mysqli_num_rows($get_user) > 0) {
        header("location:../../index.php?q=teslist");
        $_SESSION['status'] = "Woo hoo!";
        $_SESSION['text'] = "Student already added!";
        $_SESSION['icon'] = "warning";
    } else {

        $query = "INSERT INTO regist_db (reg_user, reg_given, reg_middle, reg_course, reg_year, reg_atm) 
	VALUES 
	('$reg_user', '$reg_given', '$reg_middle', '$reg_course','$reg_year','$reg_atm')";


        mysqli_query($db, $query);
        header("location:../../index.php?q=teslist");
        $_SESSION['status'] = "Woo hoo!";
        $_SESSION['text'] = "Student added successfully!";
        $_SESSION['icon'] = "success";
    }
}


if (isset($_POST['update'])) {


    $reg_id = $_POST['reg_id'];
    $reg_user = $_POST['reg_user'];
    $reg_given = $_POST['reg_given'];
    $reg_middle = $_POST['reg_middle'];
    $reg_course = $_POST['reg_course'];
    $reg_year = $_POST['reg_year'];
    $reg_atm = $_POST['reg_atm'];
    $reg_studentID = $_POST['reg_studentID'];

    $get_user = mysqli_query($db, "SELECT * FROM regist_db WHERE reg_studentID='$reg_studentID'");
    if (mysqli_num_rows($get_user) > 0) {
        header("location:../../index.php?q=teslist");
        $_SESSION['status'] = "Woo hoo!";
        $_SESSION['text'] = "Something went wrong, check your details!";
        $_SESSION['icon'] = "warning";
    } else {

        mysqli_query($db, "UPDATE regist_db SET reg_studentID='$reg_studentID', reg_user='$reg_user', reg_given='$reg_given', 
reg_middle='$reg_middle', reg_course='$reg_course', reg_year='$reg_year', reg_atm='$reg_atm' 
WHERE reg_id='$reg_id'");


        header("location:../../index.php?q=teslist");
        $_SESSION['status'] = "Woo hoo!";
        $_SESSION['text'] = "Student updated successfully!";
        $_SESSION['icon'] = "success";
    }
}

if (isset($_GET['delete'])) {


    $reg_id = $_GET['reg_id'];
    mysqli_query($db, "DELETE FROM `regist_db` WHERE `reg_id`=$reg_id");

    header("location:../../index.php?q=teslist");
    $_SESSION['status'] = "Woo hoo!";
    $_SESSION['text'] = "Student deleted successfully!";
    $_SESSION['icon'] = "success";
}
