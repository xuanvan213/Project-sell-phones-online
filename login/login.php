<?php
    require "user.php";
    if(isset($_POST['username'])){
        $user = new User($_POST['username'],$_POST['pass'],NULL,NULL);
        if($user->login($_POST['username'],$_POST['pass'])){
            session_start();
           $_SESSION['isLogedin'] = true;
            header("location: ../admin/indexAdmin.php");
        }
        else{
            echo "Logged in failed";
        }
    } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Manager Login</title>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, 
		Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="css/fontawesome-all.css" rel="stylesheet" />
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- /google fonts-->

</head>


<body>
    <button><a href="../index.php" style="color: yellow">Back To Homepage</a></button>
        <h1>Manager Login Form</h1>    
        <div class=" w3l-login-form">
            <h2>Login Here</h2>     
            <form action="login.php" method="POST">

                <div class=" w3l-form-group">
                    <label>Username:</label>
                    <div class="group">
                        <i class="fas fa-user"></i>
                        <input type="text" class="form-control" placeholder="Username" required="required" name="username" />
                    </div>
                </div>
                <div class=" w3l-form-group">
                    <label>Password:</label>
                    <div class="group">
                        <i class="fas fa-unlock"></i>
                        <input type="password" class="form-control" placeholder="Password" required="required" name="pass" />
                    </div>
                </div>
                <div class="forgot">
                    <a href="#">Forgot Password?</a>
                    <p><input type="checkbox">Remember Me</p>
                </div>

                <button type="submit">Login</button>
            </form>
            <p class=" w3l-register-p">Don't have an account?<a href="#" class="register"> Register</a></p>
        </div>
        
</body>

</html>