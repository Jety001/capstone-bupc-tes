<?php
session_start();
include('../../conn.php');
if (isset($_POST['add'])) {
    $ann_date = $_POST['ann_date'];
    $ann_content = $_POST['ann_content'];
    $ann_link = $_POST['ann_link'];


    $query = "INSERT INTO dataa (ann_date, ann_content, ann_link) 
    VALUES 
    ('$ann_date', '$ann_content', '$ann_link')";


    mysqli_query($db, $query);
    header("location:../../index.php?q=announcement");
    $_SESSION['status'] = "Woo hoo!";
    $_SESSION['text'] = "Announcement posted successfully!";
    $_SESSION['icon'] = "success";
}


if (isset($_POST['update'])){
    $user_id = $_POST['user_id'];
    $ann_date  = $_POST['ann_date'];
    $ann_content = $_POST['ann_content'];
    $ann_link = $_POST['ann_link'];

    mysqli_query($db, "UPDATE dataa SET ann_date='$ann_date', 
    ann_content='$ann_content', ann_link='$ann_link' 
    WHERE `user_id`='$user_id'");
    
    
        header("location:../../index.php?q=announcement");
        $_SESSION['status'] = "Woo hoo!";
    $_SESSION['text'] = "Announcement updated successfully!";
    $_SESSION['icon'] = "success";
}


if (isset($_GET['delete'])) {


    $user_id = $_GET['user_id'];
    mysqli_query($db, "DELETE FROM `dataa` WHERE `user_id`=$user_id");
    
    header("location:../../index.php?q=announcement");
    $_SESSION['status'] = "Woo hoo!";
    $_SESSION['text'] = "Announcement deleted successfully!";
    $_SESSION['icon'] = "success";

}
