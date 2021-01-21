<?php

	session_start();
	if(isset($_POST['Signout'])){		//if the Signout button is clicked
		session_destroy();				//remove the data from $_SESSION variable
		header("location:login.php");	//then redirect to the login page
	}

?>