 <?php
	session_start();
	
	include ("../ess/connect.php");
	include ("../ess/functions.php");

	if ($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		if (!empty($username) && !empty($password)) 
		{
			$check_duplicate = "select * from users where username = '$username' limit 1";
			$result = mysqli_query($con, $check_duplicate);
			$count = mysqli_num_rows($result);

			if ($count > 0) 
			{
				echo '<p class="prompt err_duplicate_user">Username already taken.</p>';
			}

			elseif (!ctype_alpha($username)) 
			{
				echo '<p class="prompt err_invalid_username">Username should be letters only.</p>';
			}

			elseif (ctype_space($username) || ctype_space($password)) 
			{
				echo '<p class="prompt err_incorrect">Invalid username or password.</p>';
			}

			else
			{
				$user_id = random_num(6);
				$query = "insert into users (user_id, username, password) values ('$user_id', '$username', '$password')";
				mysqli_query($con, $query);
				echo '<p class="prompt successReg">Signed Up Successfully!</p> 
					  <a class="redirect" href="login.php">Login Now</a>';
			}
				
		}
		else
		echo '<p class="prompt err_empty">Please fill all the fields.</p>';
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="../../css/signup1.css">
	

	<ul>
		<!-- <li><h2> <a href="bioV.php" target="_self">ABOUT ME</a></h2></li> -->
		<li><h2> <a href="indexV.php" target="_self">HOME</a></h2></li>
	</ul>
</head>
<body>
	<p id="create">Create your account</p>
		<form method="post" id="signup_form">
			<input id="info" type="text" name="username" placeholder="Username" required><br><br>
			<input id="info" type="password" name="password" placeholder="Password" required><br><br>
			<input class="signupBtn" type="submit" value="Sign Up"><br><br>
		</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
		
</body>
</html>