<?php
	$dsn = "mysql:host=localhost;dbname=note_webapp";
	$user = "root";
	$password = "";

	$con = mysqli_connect('localhost','root','','note_webapp');

	$pdo = new PDO($dsn, $user, $password);

	if(!$pdo){
		echo "Failed to connect to our mySQL database";
		exit();
	}else if(!$con){
		die('Please check your connection'.mysqli_error());
	}
?>