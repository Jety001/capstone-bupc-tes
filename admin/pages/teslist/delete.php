<?php 
include('../../conn.php');



if (isset($_GET['delete'])) {


    $reg_id = $_GET['reg_id'];
    mysqli_query($db, "DELETE FROM `regist_db` WHERE `reg_id`=$reg_id");
    
    header("location:../../index.php?q=teslist");
    $_SESSION['status'] = "Woo hoo!";
    $_SESSION['text'] = "Student delete successfully!";

}
