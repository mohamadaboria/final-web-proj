<?php     
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

    include 'db.php';

    if(isset($_POST['signup']))  {
             
      // echo("post methode");
            $username=$_POST['username'];
            $email=$_POST['email'];
            $password=$_POST['password'];

            $sql ="select * from `medicine_system_users_223` where username='$username' && email='$email' ";

            $result=mysqli_query($con,$sql);
    
            if($result){

                $num=mysqli_num_rows($result);
                if($num>0){
                     echo '<!DOCTYPE html>
                     <html lang="en">
                     <head>
                       <title>Bootstrap Example</title>
                       <meta charset="utf-8">
                       <meta name="viewport" content="width=device-width, initial-scale=1">
                       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
                       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
                     </head>
                     <body>
                     
                     <div class="alert alert-warning">
                     <strong>Warning! user already exist </strong> <a href="index.php" class="alert-link"> comme back and try again !</a>.
                        </div>
                     
                     </body>
                     </html>';
                    // echo("not insert");
                    }
            
            else{ 
            $sql="insert into `medicine_system_users_223` (username,email,password) values ('$username','$email','$password')";      
            $result=mysqli_query($con,$sql);
                //  echo("insertttttttttttttttt!!!");
            if($result) {echo '<!DOCTYPE html>
                <html lang="en">
                <head>
                  <title>Bootstrap Example</title>
                  <meta charset="utf-8">
                  <meta name="viewport" content="width=device-width, initial-scale=1">
                  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
                </head>
                <body>
                
                <div class="alert alert-success">
                <strong>Success!</strong> You should <a href="index.php" class="alert-link">comme back and sign in !</a>.
              </div>
                
                </body>
                </html>';}

                


            else{die(mysqli_query($con));}
            }
        }
        }
    } 

?>