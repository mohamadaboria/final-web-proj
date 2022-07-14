<?php  
ob_start();
    session_start();
    $_SESSION = array();
    // $user="admin";
    // $passuser="admin";

    if($_SERVER['REQUEST_METHOD'] == 'POST')
{

    include 'db.php';
     
    if(isset($_POST['login']))
    {    
            if (empty($_POST['username']) or empty($_POST['password']))
            { 
                    header('location:index.php');
            }else 
            {
                 if (!empty($_POST['username']) and !empty($_POST['password']))
                {   
                        //get data from DB
                        $username=$_POST['username'];
                        $password=$_POST['password'];

                      $query = "select * from `medicine_system_users_223` where username='$username' and password='$password'  ";
                    $result = mysqli_query($con, $query);
                      $row=mysqli_fetch_assoc($result);
                    $num=mysqli_num_rows($result);
                    if($num>0){
                        $_SESSION['username']=$username;
                         $_SESSION['email']=$row["email"];
                         $_SESSION['password']=$row["password"];
                         $_SESSION['id']=$row["id"];
                        //  header('location:admin.php');
                        if($row["role"]==1){
                            header('location:admin.php');
                        }
                        else{
                            header('location:user.php');
                        }

                        }
                        else{
                             header('location:index.php');
                        } 
                    // return $result;
                    // print_r($row);
                    // $username_saisi=htmlspecialchars($_POST['username']);
                    // $password_saisi=htmlspecialchars($_POST['password']);


                    
                   
                }
         }
    }
}

?>