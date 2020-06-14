<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "iwp";
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); 
	if(!$conn)
	{
		die ($conn->connect_error);
	}
	else
	{
		echo "connection successfull";
	}
?>