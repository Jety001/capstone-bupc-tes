<style>
	body {
  /* background-color: blanchedalmond; */
  background-image: url(assets/img/header-bg.jpg);
  background-position: cover;
  background-attachment: fixed;
  background-repeat: no-repeat;
}
</style>

<?php 

include 'config.php';

session_start();

error_reporting(0);

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

		if ($row['status'] == '1'){
			$_SESSION['user_name'] = $row['user_name'];
			$_SESSION['user_id'] = $row['user_id'];
			$_SESSION['user_username'] = $row['user_username'];
			header("Location: admin/index.php");
		}else{
			$_SESSION['user_name'] = $row['user_name'];
			$_SESSION['user_id'] = $row['user_id'];
			$_SESSION['user_username'] = $row['user_username'];
			echo "<script>window.location.href('main.php')</script>";
		}



	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Login</title>
	<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
</head>
<body>

<div>
		<div class="col-md-12 text-center mb-5">
					<h2 style="font-size: 2.25rem;
					font-weight: 700;
					padding:10px;
					background-color:#f7f7f78f;
					line-height: 3.25rem;
					margin-bottom: 2rem;
					text-align:center;
					box-shadow: 5px 5px 20px 4px #202020;
					border-radius:10px;
					font-family: Montserrat;
					">BUPC TES Management Information System</h2>
		</div>

	<div class="container" style="box-shadow: 5px 5px 20px 4px #202020;
					border-radius:10px;">
		
		<form action="" method="POST" class="login-email">
			<h1 style="font-size: 2.25rem;
					padding:10px;
					margin-bottom:5px;
					text-align:center;
					font-family: Arial;
					">Login</h1>
			<div class="input-group">
				<input type="email" placeholder="Email" name="user_username" value="<?php echo $user_username; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="user_pass" value="<?php echo $_POST['user_pass']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="" style="font-family: Arial;">Don't have an account? <a href="register.php">Signup</a>.</p>
		</form>
	</div>

	</div>
</body>
</html>