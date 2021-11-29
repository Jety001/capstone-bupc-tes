<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['user_name'])) {
    header("Location: index.php");
}

if (isset($_POST['reg'])) {
    $user_name = $_POST['user_name'];
    $user_username = $_POST['user_username'];
    $user_pass = $_POST['user_pass'];
    $cuser_pass = $_POST['cuser_pass'];

    // to hide the password!
    // $cuser_pass = md5($_POST['cuser_pass']);

    if ($user_pass == $cuser_pass) {
        $sql = "SELECT * FROM users WHERE user_username='$user_username'";
        $result = mysqli_query($conn, $sql);

        if (preg_match('|@bicol-u.edu.ph$|', $user_username)) {



            if (!$result->num_rows > 0) {
                $sql = "INSERT INTO users (user_name, user_username, user_pass)
					VALUES ('$user_name', '$user_username', '$user_pass')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "<script>alert('Wow! User Registration Completed.')
                    if(confirm) {
                        window.location.href = 'index.php'
                    }</script>";
                    $user_name = "";
                    $user_username = "";
                    $_POST['user_pass'] = "";
                    $_POST['cuser_pass'] = "";
                } else {
                    echo "<script>alert('Woops! Something Wrong Went. Please contact the dev.')
                    if(confirm) {
                        window.location.href = 'https://www.facebook.com/santiano.jessie/'
                    }</script>";
                }
            } else {
                echo "<script>alert('Woops! Email Already Exists.')
                if(confirm) {
                    window.location.href = 'register.php'
                }</script>";
            }
        } else {
            echo "<script>alert('Please enter valid BU email.')
            if(confirm) {
                window.location.href = 'register.php'
            }
            
            
            </script>";

        }
    } else {
        echo "<script>alert('Password Not Matched.')
        if(confirm) {
            window.location.href = 'register.php'
        }</script>";
    }
}



if (isset($_SESSION['user_name']) && ($_SESSION['user_username'])) {
    header("Location: main.php");
}

if (isset($_POST['submit'])) {
    $user_username = $_POST['user_username'];
    $user_pass = $_POST['user_pass'];

    $sql = "SELECT * FROM users WHERE user_username='$user_username' AND user_pass='$user_pass'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        // $row = mysqli_fetch_assoc($result);
        // $_SESSION['user_name'] = $row['user_name'];
        // $_SESSION['user_username'] = $row['user_username'];

        // if($_SESSION['status'] = $row['status = "1"']){
        // 	header("location: admin/index.php");
        // }else{
        // 	header("Location: main.php");
        // }

        $row = mysqli_fetch_assoc($result);

        if ($row['status'] == '1') {
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['user_username'] = $row['user_username'];
            header("Location: admin/index.php");
        } else {
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['user_username'] = $row['user_username'];
            header("Location: main.php");
        }
    } else {
        echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
    }
}

?>