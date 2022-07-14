<?php 
ob_start();
session_start();
include 'db.php';

?>
<?php
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = "index";
}
?>

<?php if ($action == 'index') : ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">


    <!-- Font Awesome -->
    <link rel="stylesheet" href="./css/all.min.css">
    <script src="./js/all.min.js"></script>

    <!-- Icon -->
    <a href="profile.php"><link rel="icon" href="./images/v2_18.png"></a>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css'>
    <link rel="stylesheet" href="./css/style.css">




</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">

            <ul class="list-unstyled components">
                <!-- Logo -->
                <span class="side-name">
                Good morning , <?=$_SESSION['username'] ?> ! !
                </span>
                <li>
                    <a class="center-nav" href="#">
                        <i class="fa-solid fa-bag-shopping"></i>
                        <span>Reserved Drugs</span>
                    </a>

                </li>
                <li>
                    <a class="center-nav" href="#">
                        <i class="fa-solid fa-briefcase-medical"></i>
                        <span>pharmacy branches</span>
                    </a>

                </li>
                <li>
                    <a class="center-nav" href="deconnecter.php">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span>Log out</span>
                    </a>

                </li>
                <li>
                    <a class="center-nav" href="#">
                        <i class="fa-solid fa-gear"></i>
                        <span>settings</span>
                    </a>

                </li>
                <li>
                    <a class="center-nav" href="#">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Location</span>
                    </a>

                </li>
                <li>
                    <a class="center-nav" href="#">
                        <i class="fa-solid fa-envelope"></i>
                        <span>Messages </span>
                    </a>

                </li>


            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <div class="nav-left">
                        <button type="button" id="sidebarCollapse" class="btn btn-info">
                            <i class="fas fa-align-left"></i>
                            <span></span>
                        </button>

                    </div>
                    <img src="./images/v2_18.png" class="w-25">
                    <div class="nav-right">


                        <a href="./profile.html">
                            <div class="profile">
                                <img id="sofia-photo" src="./images/sofia.png" alt="sofia">
                            </div>
                        </a>

                    </div>




                </div>


            </nav>

            <div class="user-hello">
                <p class="text-center">
                    My Profile
                </p>
            </div>
            <div class="my_account">
            <form method="post" action="profile.php?action=edit">

                <div class="row">
                    <input type="hidden" name="id" value="<?=$_SESSION['id'] ?>">
                    
                    <div class="col-12 row">
                        <label for="" class="col-lg-2 col-md-3 col-12">Username</label>
                        <input type="text" class="col-lg-10 col-md-9 col-12 form-control" name="username" placeholder="Username" value="<?=$_SESSION['username'] ?>">
                    </div>
                    <div class="col-12 row">
                        <label for="" class="col-lg-2 col-md-3 col-12">Email</label>
                        <input type="text" class="col-lg-10 col-md-9 col-12 form-control" name="email" placeholder="Your Email" value="<?=$_SESSION['email'] ?>">
                    </div>
                    <div class="col-12 row">
                        <label for="" class="col-lg-2 col-md-3 col-12">Password</label>
                        <input type="text" class="col-lg-10 col-md-9 col-12 form-control" name="password" placeholder="Your Password " value="<?=$_SESSION['password'] ?>">
                    </div>
               
                    <div class="col-12 text-center">
                        <button type="submit" class="btn-primary">Save</button>
                    
                    </div>
                    </form>
                </div>
               
            </div>
            <?php elseif ($action == 'edit') : ?> 
                <?php

                

                   $id=$_POST["id"];
                  $username=$_POST["username"];
                  $email=$_POST["email"];
                  $password=$_POST["password"];
                $sql="UPDATE  `medicine_system_users_223` set `username`='$username', `email`='$email' , `password`='$password' where `id`='$id'";        
                 $result=mysqli_query($con,$sql);
                 
                 $_SESSION['username']=$username;
                $_SESSION['email']=$email;
                $_SESSION['password']=$password;
                $_SESSION['id']=$id;
                  echo '<script>history.back()</script>';
                
                 ?>
                
              

        </div>


    </div>
    <footer class="footer">
        <div class="footer-container">
            <ul class="footer-container-ul">
                <div class="footer-items">
                    <li><a class="footer-links" href="#">Help</a></li>
                </div>

                <div class="footer-items">
                    <li><a class="footer-links" href="#">Contact Us</a></li>
                </div>

                <div class="footer-items">
                    <li><a class="footer-links" href="#">System Rules</a></li>
                </div>


                <div class="footer-items">
                    <li><a class="footer-links" href="#"> Privacy Policy </a></li>
                </div>

                <div class="footer-items">
                    <li><a class="footer-links" href="#">Feedback</a></li>
                </div>

                <div class="footer-items">
                    <li><a class="footer-links" href="#">© Medicine System
                        </a></li>
                </div>

            </ul>
        </div>
    </footer>


    <!-- partial -->
    <script src="./js/script.js"></script>

</body>

</html>
<?php endif ?>