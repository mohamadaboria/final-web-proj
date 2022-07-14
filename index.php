<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
  <link href=style.css  rel="stylesheet">
  
<style>
body{font-family:"comic sans ms";}
button {cursor: pointer;}
input{font-family:"comic sans ms";}
</style>

</head>
<body>
    <div class="container" id="container">
    
        <div class="form-container sign-up-container">


            <form action="signup.php" method="post">

               <h1>Create Account</h1>
                <br>
                <input type="text" placeholder="Username" name="username" require />
                <input type="email" placeholder="Email " name ="email" require/>
                <input type="password" placeholder="Password " name="password" require/>
                <br>
                <button type ="submit" name="signup">Sign up </button>
            </form>

        </div>


        <div class="form-container sign-in-container">

            <form action="login.php" method="post">

                <h1>Login</h1>
           
                <input type="username" placeholder="Username" name="username"  require/>
                <input type="password" placeholder="Password " name="password" value="" id="myInput" require/> <br>
                Show Password <input type="checkbox" onclick="myFunction()"> 
                <br>
                <button type ="submit" name="login"> Login </button>

            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1> Welcome Back!</h1>
                    <br><br>
                    <button class="ghost" id="signIn"> Sign in </button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1> Hello </h1>
                    <h2> Please enter your personal details</h2> 
                    <button class="ghost" id="signUp">Sign up</button>
                </div>         
            </div>
        </div>
    </div>

    <script >
    function myFunction() {

    var x = document.getElementById("myInput");

    if (x.type === "password") 
    {
    x.type = "text";
    } 
    else {
    x.type = "password";
    }
    }
</script>
    <script  src="script.js"></script>
</body>
</html>