<?php 
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" >
<head>
  <meta charset="UTF-8">
  <title>Medicine System</title>
  <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./css/all.min.css">
    <script src="./js/all.min.js"></script>

    <!-- Icon -->
    <link rel="icon" href="./images/v2_18.png">

<!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script><link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css'>
    <link rel="stylesheet" href="./css/style.css">




</head>

<body>

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
                  <a class="center-nav" href="reservations.php">
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
                    <!-- <span>Log out</span> -->
                    <a href="deconnecter.php">Log out<i class="fas fa-sign-in"></i></a>
                    
                  </div>
                 
                </div>
                
       

                  
              </div>
             
              
          </nav>

          <div class="medicine-search">
            <a href="./main-page.php">
              <div class="first">
                Please click here To Move To the Main purchase page
              </div>
            </a>
            <div class="search">
              <i class="fas fa-search"></i>
              <input class="form-control" type="text" name="search" placeholder="search">
            </div>
            <p id="local-medicine-list mb-0" >Home > Dashboard</p>
          </div>

          <div class="medicine-small-box">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-12">
                <a href="./medicine-list.php">
                <div class="medicine-small-box-item">
                  Medicine List 
                </div>
                </a>
              </div>
              <div class="col-lg-3 col-md-6 col-12">
                <div class="medicine-small-box-item">
                  New Product  Arrival 
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-12">
                <div class="medicine-small-box-item">
                  Generic Subststitutes 
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-12">
                <div class="medicine-small-box-item red">
                  4 <br/>
                  Soon Expiring
                </div>
              </div>
            </div>
          </div>

          <div class="medicine-big-box">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12">
                <div class="medicine-big-box-item medicine-23">
                  <div class="head">
                    <span>DRUGS</span>
                     out of stock Alert 
                  </div>
                  <div class="body">
                    <div class="item">
                      <span>Name : Norvasc 5 mg</span>
                      <span>Medicine id : 05201120</span>
                    </div>
                    <div class="item">
                      <span>Name : Cymbalta 30 mg</span>
                      <span>Medicine id : 55485547</span>
                    </div>
                  </div>
                  <div class="foot">
                    View Drugs OOS Notification
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                <div class="medicine-big-box-item medicine-23">
                  <div class="head">
                    <span>Equipmnet</span>
                     out of stock Alert 
                  </div>
                  <div class="body">
                    <div class="item">
                      <span>Name : Laxadin</span>
                      <span>Medicine id : 57844120</span>
                    </div>
                  </div>
                  <div class="foot">
                    View Drugs OOS Notification
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                <div class="medicine-big-box-item medicine-23">
                  <div class="head">
                    <!-- <span>Expired</span> -->
                    Expired Medicine Notification 
                  </div>
                  <div class="body">
                    <div class="item">
                      <span>Name : Laxadin</span>
                      <span>Medicine id : 57844120</span>
                    </div>
                  </div>
                  <div class="foot">
                    View Expired Medicine Notification
                  </div>
                </div>
              </div>

            </div>
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
  <script  src="./js/script.js"></script>

</body>

</html>
