<?php
ob_start();
session_start(); 
include 'db.php';
$sql ="select * from `medicine_order_223`";

$results=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Main Page</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Icon -->
    <link rel="icon" href="./images/v2_18.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./css/all.min.css">
    <script src="./js/all.min.js"></script>


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
                <li>
                    <a href="admin.php" id="logo">
                        <span></span>
                    </a>

                </li>
                <li>
                    <a class="center-nav" href="admin.php">
                        <i class="fas fa-home"></i>
                        <span>Dashboard</span>
                    </a>

                </li>
                <li>
                    <a class="center-nav" href="#">
                        <i class="fas fa-list-alt"></i>
                        <span>Reservations</span>
                    </a>

                </li>
                <li>
                    <a class="center-nav" href="#">
                        <i class="fas fa-comment"></i>
                        <span>Messages</span>
                    </a>

                </li>
                <li>
                    <a class="center-nav" href="#">
                        <i class="fas fa-phone-alt phone-icon"></i>
                        <span>Emergency numbers</span>
                    </a>

                </li>
                <li>
                    <a class="center-nav" href="#">
                        <i class="fas fa-users"></i>
                        <span>Patients</span>
                    </a>

                </li>
                <li>
                    <a class="center-nav" href="#">
                        <i class="fas fa-cogs"></i>
                        <span>System settings</span>
                    </a>

                </li>
                <li>
                    <a class="center-nav" href="#">
                        <i class="fas fa-chart-line"></i>
                        <span>Sales report</span>
                    </a>

                </li>
                <li>
                    <a class="center-nav" href="#">
                        <i class="fas fa-tools"></i>
                        <span>System pharma</span>
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
                        <div class="profile">
                            <img id="sofia-photo" src="./images/sofia.png" alt="sofia">
                            <span>Welcome ,Sofia!</span>
                        </div>
                    </div>
                    <div class="nav-right">

                        <a id="my-profile" href="#">My Profile</a>

                        <div class="logout">
                            <span>Log out</span>
                            <i class="fas fa-sign-in"></i>
                        </div>

                    </div>




                </div>


            </nav>

            <section class="my_table">
                <h2 class="custom-heading">
                    Home > Dashboard > Reservations
                </h2>
                <div class="container">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                   
                                    <th>Username </th>
                                    <th> Email</th>
                                    <th> Medicine</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($results as $result) : ?>
                                <tr >
                                <td>
                                   <?= $result["username"] ?>
                                 </td>
                                 <td>
                                   <?= $result["email"] ?>
                                 </td>
                                 <td>
                                   <?= $result["medicine"] ?>
                                 </td>
                                </tr>
                                <?php endforeach ?>
                         
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
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