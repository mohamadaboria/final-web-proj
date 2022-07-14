<?php
include 'db.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $medicine_name=$_POST['medicine-name'];
    $medecine_id=$_POST['medicine-id'];
    $company=$_POST['company'];
    $category=$_POST['category'];
    $quantity=$_POST['quantity'];
    $expire_date=$_POST['expire-date'];
    $sql="insert into `medicine_list_223` (medicine_name,medicine_id,company,category,quantity,expire_date) values ('$medicine_name','$medecine_id',' $company',' $category','$quantity','$expire_date')";        
    $result=mysqli_query($con,$sql);
}

?>
<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="UTF-8">
    <title>Add Medicine </title>
    <!-- Bootstrap CSS CDN -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Icon -->
    <link rel="icon" href="./images/v2_18.png">
      
      <!-- Font Awesome -->
      <link rel="stylesheet" href="./css/all.min.css">
      <script src="./js/all.min.js"></script>
  
  
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
                  <span>Log out</span>
                  <a href="deconnecter.php">Log out<i class="fas fa-sign-in"></i></a>
                </div>
               
              </div>
              
     

                
            </div>
           
            
        </nav>

            <h2 id="medicine">Add Medicine </h2>
          <p id="local-medicine-list">Home > Dashboard > Medicine List > Add Medicine</p>




            <form id="form-add-medicine" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                <label for="fname">Medicine ID:</label><br>
                <input class="form-control" type="number" id="fname" name="medicine-id"  placeholder="Medicine ID"><br>

                <label id="medicine-name-label" for="lname">Medicine Name:</label><br>
                <input class="form-control" type="text" id="lname" name="medicine-name"  placeholder="Medicine Name"><br><br>
                

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Category:</label>
                    <select class="form-control" name="category">
                      <?php

                          // Read the JSON file
                            $json = file_get_contents('category.json');

                           // Decode the JSON file
                           $json_data = json_decode($json,true);

                          

                                 ?>

                       <?php
                       foreach($json_data["category"] as $category){
                        echo "<option>".$category["name"] ."</option>";
                       }    
                       ?>
                      <option></option>
                   
                    </select>
                  </div>

                  <label  for="lname">Company:</label><br>
                  <input class="form-control" type="text"  name="company"  placeholder="Company"><br><br>

                  <label  for="lname">Quantity:</label><br>
                  <input class="form-control" type="number"  name="quantity"  placeholder="Quantity"><br><br>


                  <label  for="lname">Expire Date:</label><br>
                  <input class="form-control" type="date" id="lname" name="expire-date"  placeholder="Expire Date"><br><br>


                  <input id="save" type="submit" value="SAVE">
                  <input id="clear" type="reset" value="CLEAR">
              </form> 




           

          <div>
       
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
