<?php
  session_start();
  if(!isset($_SESSION['User'])){
      header("location:login.php");
    }
?>


<!DOCTYPE html>
<html>
<head>
	<title>About Project</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
	
  <!-- CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- jQuery and JS bundle w/ Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <script type="text/javascript" src="../js/script.js"></script>
</head>
<body class="bg-light">
              <!-- START OF NAVBAR! -->
<header class="pageheader">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse ml-5" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../index.php">Home</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="about.php">About Project<span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
    <h5 class="mr-2 text-white">Welcome , <?php echo $_SESSION['User']; ?></h5>
    <form action="../php/logout.php" method="POST">
    <button type="submit" name="Signout" class="btn btn-outline-success" id="btn_signout" type="button">Sign Out</button>
    </form>
  </nav>
</header>  
              <!-- END OF NAVBAR! -->



              <div class="pageheader">

                      <center>
                        <header><h1>ABOUT PROJECT</h1></header>
                      </center>

                       <div class="pageheader2">

                    <center>
                        <details>
                          <summary>More about project</summary>
                        <p>This project is the final requirements in IT 110 "WEBPAGE DESIGN AND DEVELOPMENT" </p> 

                        <p>The list below are the functions of the said project:</p>

                            <ul>
                              <p>1. The user can register before he/she can login</p>
                              <p>2. The user can Login and Logout</p>
                              <p>3. Can add, delete, and edit notes</p>
                              <p></p>
                            </ul>  
                        </details>
                    </center>

                 
                     <center>
                       <details>
                            <summary>Members</summary>
                   
                            <table style="width:100%">
                                  <tr>
                                    <th>Firstname</th>
                                    <th>Lastname</th> 
                                    <th>Section</th>
                                  </tr>
                                  <tr>
                                    <td>Cedric</td>
                                    <td>Castro</td>
                                    <td>HL1</td>
                                  </tr>
                                  <tr>
                                    <td>Rea Lyzil</td>
                                    <td>Giron</td>
                                    <td>HL1</td>
                                  </tr>
                                   <tr>
                                    <td>Renz Ivan</td>
                                    <td>Irag</td>
                                    <td>HL1</td>
                                  </tr>
                                   <tr>
                                    <td>Benedict</td>
                                    <td>Casil</td>
                                    <td>HL1</td>
                                  </tr>
                                   <tr>
                                    <td>John Bryan</td>
                                    <td>Pagaran</td>
                                    <td>KO1</td>
                                  </tr>
                            </table>

                        </details>
                    </center>

      
                    <center>
                        <details>
                          <summary>Instructor</summary>

                            <ul>
                              <p>Mr. El Bajador Villacampa</p>
                              
                            </ul>  
                        </details>
                    </center>
    </div>
  </div>

</body>
</style>
</html>