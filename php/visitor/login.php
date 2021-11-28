<?php
session_start();
include("../ess/connect.php");
// include("../ess/functions.php");
// unset($_SESSION['$_SESSION["Email"]']);

?>

<!DOCTYPE html>
<html>

<head>
	<style type="text/css">
		@media only screen and (max-width: 600px) {
			.img {

				left: 1%;
				width: 50%;
				height: 60;
				position: absolute;
				top: 0;
				opacity: 0.5;
				z-index: 1;

			}

			.lol {
				z-index: 3;
				position: absolute;

			}

			.buts {
				bottom: 20%;
				margin-bottom: 15%;
				position: absolute;
				left: 5%;
				right: 5%;
			}

			.homss {
				z-index: 5;
				position: absolute;

			}

		}
	</style>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="../../css/login1.css">
	<link rel="icon"=href="logo tes.png">
	<ul style="margin-left:60px;">


		<li>
			<h2> <a class="homss" href="indexV.php" target="_self">HOME</a></h2>
		</li>

	</ul>
</head>

<body>
	<?php
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		if (!empty($username) && !empty($password)) {
			$query = "SELECT * FROM users where user_username = '$username'";
			$result = mysqli_query($con, $query);

			if ($result) {
				if ($result && mysqli_num_rows($result) > 0) {
					$user_data = mysqli_fetch_assoc($result);
					if ($user_data['user_pass'] === $password) {
						$_SESSION['Email'] = $user_data['user_username'];
						$_SESSION['userPass'] = $user_data['user_pass'];
						$_SESSION['userName'] = $user_data['user_name'];
						header("Location: ../../main.php");
						die;
					} else
						echo '<p class="prompt">Incorrect Password.</p>';
				} else
					echo '<p class="prompt">Incorrect Username.</p>';
			} else
				echo '<p class="prompt">No registered Users.</p>';
		} else
			echo '<p class="prompt">Please fill all the fields.</p>';
	}
	?>
	<p id="t" class="lol" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:30px;">
		Log in to your account
	</p>

	<form method="POST" action="" class="buts">
		<input id="info" type="email" class="" name="username" placeholder="Email"><br><br>
		<input id="info" type="password" class="" name="password" placeholder="Password"><br><br>
		<button class="loginBtn" type="submit" name="submit">Log In</button>
		<br><br>
	</form>
	<!-- <img src="logo tes.png" alt="Trulli"  class="img"> -->
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