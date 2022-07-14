

<?php
include 'db.php';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = "index";
}
?>

<?php if ($action == 'index') : ?>

<?php
include 'db.php';
$sql ="select * from `medicine_list_223`";

$results=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr" >
<head>
  <meta charset="UTF-8">
  <title>Medicine List</title>
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
                  <a href="deconnecter.php">Log out<i class="fas fa-sign-in"></i></a>
                  </div>
                 
                </div>
                
       

                  
              </div>
             
              
          </nav>
      

          <div class="medicine-search">
            <h2 id="medicine"> Medicine List </h2>
            <p id="local-medicine-list">Home > Dashboard > Medicine List</p>
  
  
          </div>

         <div class="showing">
          
           <p id="showing-items">Showing 1 to 12 of 35 entries</p>
             <a id="add-medicine-button" class="btn btn-primary" href="add-medicine.php">Add Medicine</a>
       
         </div>

         <table>
          <tr>
            <th>Medicine Name</th>
            <th>Medicine Id</th>
            <th>Company</th>
            <th>Category</th>
            <th>Quantity</th>
            <th>Expire Date</th>
            <th>Actions</th>
          </tr>
          <?php foreach ($results as $result) : ?>
          <tr>
          
          <td>
            <?= $result["medicine_name"] ?>
          </td>

          <td>
            <?= $result["medicine_id"] ?>
          </td>

          <td>
            <?= $result["company"] ?>
          </td>

          <td>
            <?= $result["category"] ?>
          </td>

          <td>
            <?= $result["quantity"] ?>
          </td>

          <td>
            <?= $result["expire_date"] ?>
          </td>
          <td> <img class="edit" src="./images/edit.png" alt="edit">
              <a href="medicine-list.php?action=destroy&id=<?=$result['id']?>"><img class="delete" src="./images/delete.png" alt="delete"></a>
          </td>
          </tr>
          <?php endforeach ?>
          

          
        </table>

        <ul class="pagination custom-pagination">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
          </li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item">
            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
          </li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>

       
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
        


  <script  src="./js/script.js"></script>

</body>

</html>
<?php elseif ($action == 'destroy') : ?>
  <?php
  $id=$_GET['id']; 
  $sql="DELETE from `medicine_list_223` where id='$id'";        
  $result=mysqli_query($con,$sql);
   echo '<script>history.back()</script>';
    ?>
<?php endif ?>
