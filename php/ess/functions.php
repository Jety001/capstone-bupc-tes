<?php

function check_login ($con)
{
	if (isset($_SESSION['Email'])) 
	{
		$emaaaiilshit = $_SESSION['Email'] ;
		$query = "SELECT * FROM users WHERE user_username = '$emaaaiilshit' ";

		$result = mysqli_query($con, $query);

		if ($result && mysqli_num_rows($result) > 0 ) 
		{
			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}
	unset($_SESSION['Email']);
	header("location: php/visitor/indexV.php");
	die;	
}




function random_num($length)
{
	$num = "";
	if ($length < 5) 
	{
		$length = 5;
	}
	$len = rand(4, $length);

	for ($i=0; $i < $len; $i++) 
	{
		$num .= rand(0, 9);
	}
	return $num;
}
