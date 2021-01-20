<?php

 require_once('dbconnect.php');
 session_start();	//to save $_SESSION variables and accessable to different page that cotain this function


 if(isset($_POST['SignIn'])){	//the code below will execute if the SignIn button is clicked

 	$user_name = $_POST['username'];		//will save the username from user
	$user_password =$_POST['password'];		//will save the password from user

 	if(empty($_POST['username']) || empty($_POST['password'])){					//check if the fields are empy

 		header("location:login.php?Empty= Please fill in the blank field");		//error message

 	}else{
 		
 		$stmt = $con->prepare("SELECT id , password FROM user WHERE username = ?"); //query to the database
        $stmt->bind_param('s', $user_name);		
        $stmt->execute();
        $stmt->bind_result($user_id,$hashed_pass);
        $stmt->store_result();

 		if($stmt->num_rows == 1){
            while($stmt->fetch()){
                if(password_verify($_POST['password'],$hashed_pass)){
                        $_SESSION['user_id'] = $user_id;
                        $_SESSION['User'] = $_POST['username'];
                        header("location: ../index.php");
                }
        		else{
                    header("location:login.php?InvalidPassword= Please enter correct password");     
                }
            }
        }else{
            header("location:login.php?InvalidUsername= Please enter correct username");     
        }
 	}	
 }else if(isset($_POST['Register'])){

    header("location:register.php");

 }else{

 	$stmt->close();
 	
 }

?>