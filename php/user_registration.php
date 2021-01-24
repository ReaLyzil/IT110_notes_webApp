<?php

 require_once('dbconnect.php');

 if(isset($_POST['Register'])){         //if the Register button is clicked

 	if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['con_password'])){  //check if empty

 		header("location:register.php?Empty= Please fill in the blank field");   //then error empty

 	}else{

 		$tempo_username = $_POST['username'];    //store username for checking if it already exist

 		$stmt = $con->prepare("SELECT username FROM user WHERE username = ?");   //query to get username
        $stmt->bind_param('s', $tempo_username);		  //the username 
        $stmt->execute();                                 //execute the query
        $stmt->bind_result($tempo_username);              //store the username from the database to the variable
        $stmt->store_result();

 		if($stmt->num_rows == 1){    //if found
            while($stmt->fetch()){
                if($tempo_username == $_POST['username']){  //check if equal
                        
 					header("location:register.php?AlreadyExist= Username already exist"); //redirect to the register
            		exit();   //stop from executing the code below
            	}
            }
        }

            //if the username dont exist then the code below will execute

        if($_POST['password'] != $_POST['con_password']){   //check if the confirm password and users password match

 			header("location:register.php?NotMatch= Two password do not match");   //if not match, then ¯\_(ツ)_/¯

 		}else{

            //the code below prevent hackers to use SQL inject so ¯\_(ツ)_/¯

     		$fullname =  mysqli_real_escape_string($con,$_POST['user_fullname']); 
    		$username =  mysqli_real_escape_string($con,$_POST['username']);
    		$password =  mysqli_real_escape_string($con,$_POST['password']);
    		$confirm_pass =  mysqli_real_escape_string($con,$_POST['con_password']);

    	    $password = password_hash($password, PASSWORD_BCRYPT);  //encrypt the password 
    	 	$sql = "INSERT INTO user (fullname,username,password) VALUES('$fullname','$username','$password')" ;
    	 	mysqli_query($con,$sql);

				header("location:register.php?Registered= Account created");
					
 		}

 	}

 }else{
    //¯\_(ツ)_/¯
 	$stmt->close();
 }



?>