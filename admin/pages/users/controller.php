<?php
session_start();
include('../../conn.php');
if (isset($_POST['add'])) {
    $user_name = $_POST['user_name'];
    $user_username = $_POST['user_username'];
    $user_pass = $_POST['user_pass'];
    // $status = $_POST['status'];


    $query = "INSERT INTO users (user_name, user_username, user_pass, status) 
    VALUES 
    ('$user_name', '$user_username', '$user_pass', '$status')";


    mysqli_query($db, $query);
    header("location:../../index.php?q=user");
    $_SESSION['status'] = "Woo hoo!";
    $_SESSION['text'] = "User added successfully!";
    $_SESSION['icon'] = "success";
    
}


if (isset($_POST['update'])) {
    $user_id = $_POST['user_id'];
    $user_name = $_POST['user_name'];
    $user_username = $_POST['user_username'];
    $user_pass = $_POST['user_pass'];

    mysqli_query($db, "UPDATE users SET user_name='$user_name', 
    user_username='$user_username', user_pass='12345' 
    WHERE `user_id`='$user_id'");


    header("location:../../index.php?q=user");
    $_SESSION['status'] = "Woo hoo!";
    $_SESSION['text'] = "User updated successfully!";
    $_SESSION['icon'] = "success";
    
}


if (isset($_GET['delete'])) {


    $user_id = $_GET['user_id'];
    mysqli_query($db, "DELETE FROM `users` WHERE `user_id`=$user_id");
    header("location:../../index.php?q=user");
    $_SESSION['status'] = "Woo hoo!";
    $_SESSION['text'] = "User deleted successfully!";
    $_SESSION['icon'] = "success";
   
}
