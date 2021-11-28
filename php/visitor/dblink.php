<?php 
	session_start();
	include_once '../ess/connect.php';
	if (isset($_POST['submits'])) 
	{
		$Email = $_POST["username"];
		$userPass = $_POST["password"];
		$userName = $_POST["Name"];

		$sql = "INSERT INTO users (user_username, user_pass, user_name, status) VALUES('$Email', '$userPass', '$userName', '$status') ;";
		mysqli_query($con, $sql);
		$_SESSION['Email'] = $Email;
		$_SESSION['userPass'] = $userPass;
		$_SESSION['userName'] = $userName;
		echo '<script>window.location.href = "../../index.php"</script>';
		header("Location: login.php?status=LoginYourAccount");
	}

	if (isset($_POST['submit'])) 
	{
		$name = $_POST["name"];
		$email = $_POST["email"];
		$subject = $_POST["subject"];
		$body = $_POST["body"];

		$sql = "INSERT INTO `message` (name, email, subject, body) VALUES('$name', '$email', '$subject', '$body') ;";
		mysqli_query($con, $sql);

		
		header("Location: ../../main.php?status=Message has been sent!");
	}
	
	if (isset($_POST['MOTHERFUCKINGBUTTON'])) {
		$date = $_POST['date'];
		$content = $_POST['content'];
		$link = $_POST['link'];

		$skl = "INSERT INTO dataa (ann_date, ann_content, ann_link) VALUES ('$date', '$content', '$link');";
		mysqli_query($con, $skl);

		header("Location: ../user/Announcement.php?Announcement=Added");
		exit();
	}
	if (isset($_POST['SHITTYBUTTON'])) {
		$sname = $_POST['sname'];
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$crs = $_POST['crs'];
		$yr = $_POST['yr'];
		$atm = $_POST['atm'];

		$meow = "INSERT INTO regist_db (reg_user, reg_given, reg_middle, reg_course, reg_year, reg_atm) VALUES ('$sname', '$fname', '$mname', '$crs', '$yr', '$atm');";
		mysqli_query($con, $meow);

		header("Location: ../user/teslist.php?Student=Added");
		exit();
	}
 ?>