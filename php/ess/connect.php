<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "accounts_db";
	$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$con) 
{
	die("FAILED TO CONNECT!");
}