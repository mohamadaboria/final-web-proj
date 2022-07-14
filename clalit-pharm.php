<?php
ob_start();
session_start(); 
include 'db.php';
 
$medicine_name= $_SESSION['medicine_name'];
 $query = "select * from `medicine_pharms_223` where name='$medicine_name'   ";
$result = mysqli_query($con, $query);
$row=mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>clalit-pharm</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">


    <!-- Font Awesome -->
    <link rel="stylesheet" href="./css/all.min.css">
    <script src="./js/all.min.js"></script>

    <!-- Icon -->
    <link rel="icon" href="./images/v2_18.png">

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
                    Good morning , <?=$_SESSION['username'] ?> !
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
                    <a class="center-nav" href="#">
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


                        <a href="./profile.php">
                            <div class="profile">
                                <img id="sofia-photo" src="./images/profile-none.png" alt="profil">
                            </div>
                        </a>

                    </div>




                </div>


            </nav>

            <div class="user-hello">
                <p class="text-center">
                    clalit-pharm
                </p>
            </div>
            <div class="clalit-pharm-alert">
                <div class="top">
                    <?= $row["name"] ?>
                </div>
                <div class="bottom">
                    <p>
                        Active ingredient of aspirin : ACETYLSALICYLIC ACID<br />
                        Product Description:<br />
                        <?= $row["info"] ?>

                    </p>
                    <p style="font-weight: bold;">
                        Form of administration: Swallowing, orally
                    </p>
                </div>
            </div>

            <div class="Generic_substitutes">
                <h2 class="text-center mb-4">
                    Generic_substitutes
                </h2>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="Generic_substitutes_item">
                                <i class="fa-solid fa-capsules"></i>
                                <br />
                                <span>
                                    CARDIOP
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="Generic_substitutes_item">
                                <i class="fa-solid fa-capsules"></i>
                                <br />
                                <span>
                                    MICROPRIN
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="Generic_substitutes_item">
                                <i class="fa-solid fa-capsules"></i>
                                <br />
                                <span>
                                    TEVAPRIN
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="Generic_substitutes_item">
                                <i class="fa-solid fa-capsules"></i>
                                <br />
                                <span>
                                    CARTIA
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="foot-click">
                <div class="aspirin">
                    <span>
                        <span></span>
                    </span>
                    <?= $row["name"] ?>
                    <i class="fa-solid fa-square-check"></i>
                </div>
                <div class="reserve">Reserve This Products For 1 Hour</div>
            </div>

            <div class="popup">
                <h2>Warning</h2>
                <p>
                    Dear customer, please pay attention that the
                    product will not be saved for you after a full
                    hour has passed since the product was saved!
                </p>
                
                <a href="confirm.php">
                    <button>
                        Confirm
                    </button>
                </a>
           
            </div>


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