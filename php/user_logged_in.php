<?php

 require_once('dbconnect.php');
 session_start();	      //to save $_SESSION variables and accessable to different page that cotain this function


 if(isset($_POST['SignIn'])){	//the code below will execute if the SignIn button is clicked

 	$user_name = $_POST['username'];		//will save the username from user
	$user_password =$_POST['password'];		//will save the password from user

 	if(empty($_POST['username']) || empty($_POST['password'])){					//check if the fields are empy

 		header("location:login.php?Empty= Please fill in the blank field");		//error message

 	}else{
 		
 		$stmt = $con->prepare("SELECT id , password FROM user WHERE username = ?"); //query to the database
        $stmt->bind_param('s', $user_name);                     //insert data /\ in question mark above
        $stmt->execute();                                       //execute the query
        $stmt->bind_result($user_id,$hashed_pass);              //to put the data from database in variables
        $stmt->store_result();                                  //to store the result

 		if($stmt->num_rows == 1){        //if found then execute below
            while($stmt->fetch()){
                if(password_verify($_POST['password'],$hashed_pass)){   //password from user and database(hashed)
                        $_SESSION['user_id'] = $user_id;        //session for the user id, used to get notes
                        $_SESSION['User'] = $_POST['username']; //use to welcome the user in navbar
                        header("location: ../index.php");       //redirect to the main page
                }
        		else{
                    header("location:login.php?InvalidPassword= Please enter correct password"); //incorrect password  
                }
            }
        }else{
            header("location:login.php?InvalidUsername= Please enter correct username"); //incorrect username
        }
 	}	
 }else{

 	$stmt->close();
 	
 }

?>