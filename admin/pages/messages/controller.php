<?php
include('../../conn.php');

use PHPMailer\PHPMailer\PHPMailer;

require("src/PHPMailer.php");
require("src/SMTP.php");
require("src/Exception.php");


$mail = new PHPMailer();



if (isset($_POST['send'])) {

    $id = $_POST['id'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    // $body = $_POST['body'];
    $reply = $_POST['reply'];
    $status = $_POST['status'];


    try {
      $mail->isSMTP();
      $mail->Host = "smtp.gmail.com";
      $mail->SMTPAuth = true;
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Username = "layla.tank001@gmail.com"; //enter you email address
      $mail->Password = 'santiano'; //enter you email password
      $mail->Port = 587;
      // $mail->SMTPSecure = "ssl";
      
      $mail->setFrom("bupc-osates@gmail.com"); //sender
      $mail->FromName = "BUPC TES MIS Admin";
      $mail->addAddress($email, $name);
      $mail->isHTML(true);
      $mail->Subject = $subject;
      $mail->Body = $reply;
      $mail->AltBody = "This is the plain text version of the email content";
  
      $mail->send();
      echo "Email message sent.";
  } catch (Exception $e) {
      echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
  }




    mysqli_query($db, "UPDATE `message` SET status='1'
    WHERE `id`='$id'");

    header("location:../../index.php?q=message");
    $_SESSION['status'] = "Woo hoo!";
    $_SESSION['text'] = "Message sent successfully!";
    $_SESSION['icon'] = "success";
    }



if (isset($_GET['delete'])) {


    $id = $_GET['id'];
    mysqli_query($db, "DELETE FROM `message` WHERE `id`=$id");
    
    header("location:../../index.php?q=message");
    $_SESSION['status'] = "Woo hoo!";
    $_SESSION['text'] = "Message deleted successfully!";
    $_SESSION['icon'] = "success";
}



