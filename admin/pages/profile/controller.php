<?php
session_start();
include('../../conn.php');

if (isset($_POST['save'])) {
    $user_id = $_POST['user_id'];
    $user_name = $_POST['user_name'];
    $user_username = $_POST['user_username'];
    $user_pass = $_POST['user_pass'];

    $picture = time() . '-' . $_FILES["profileImage"]["name"];

    $target_dir = "picture/";
    $target_file = $target_dir . basename($picture);

    if (empty($error)) {
        if (move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
            mysqli_query($db, "INSERT INTO users (picture) VALUES ('$picture') WHERE user_id='$user_id'");
            header("location:../../index.php?q=profile");
            $_SESSION['status'] = "Woo hoo!";
            $_SESSION['text'] = "Profile updated successfully!";
            $_SESSION['icon'] = "success";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    mysqli_query($db, "UPDATE users SET user_name='$user_name', 
    user_username='$user_username', user_pass='$user_pass', picture='$picture' 
    WHERE `user_id`='$user_id'");


    header("location:../../index.php?q=home");
    $_SESSION['status'] = "Woo hoo!";
    $_SESSION['text'] = "Profile updated successfully!";
    $_SESSION['icon'] = "success";
}

if (isset($_POST['upload'])) {
    $user_id = $_POST['user_id'];
    $picture = time() . '-' . $_FILES["profileImage"]["name"];

    $target_dir = "./picture/";
    $target_file = $target_dir . basename($picture);

    if ($_FILES['profileImage']['size'] > 200000) {
        $msg = "Image size should not be greated than 200Kb";
        $msg_class = "alert-danger";
        
    }

    if (empty($error)) {
        if (move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
            mysqli_query($db, "INSERT INTO users (picture) VALUES ('$picture') WHERE user_id='$user_id'");
            header("location:../../index.php?q=profile");
            $_SESSION['status'] = "Woo hoo!";
            $_SESSION['text'] = "Profile updated successfully!";
            $_SESSION['icon'] = "success";
        } else {
            echo "mali!";
        }
    }
}
