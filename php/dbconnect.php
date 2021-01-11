<?php
	$dsn = "mysql:host=localhost;dbname=note_webapp";
	$user = "root";
	$password = "";


	$pdo = new PDO($dsn, $user, $password);

	if(!$pdo){
		echo "Failed to connect to our mySQL database";
		exit();
	}


?>