<!--File Name: index.php-->
<!--Date Created: 1-14-2018-->
<!--Created By: Nicole Cox-->
<!--Start File-->

<?php
//pulls in bootstrap and javascript
require('lib.php');
?>

<?php

$site_root = $_SERVER['DOCUMENT_ROOT'];
require_once("$site_root/../connection.php");

if(isset($_POST['btn-login'])) {
    $username = $_POST['email'];
    $password = $_POST['pass'];
    
    if(empty($username) || empty($password)) {
        echo "Please enter both an email and a password";
    } else {
        $sql = "SELECT email, pass FROM profiles WHERE email = '" . $username . "' AND pass = '" . $password . "';";
        $stmt = $conn->query($sql);
        
        $count = $stmt->rowCount();
        if($count > 0) {
            session_start();
            $_SESSION['user'] = $username;
            $_SESSION['loggedin'] = true;
            header('Location: /home.php');
        } else {
            echo "Please enter valid login information";
        }
    }
}   
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login System</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>

<div class="container">

 <div id="login-form">
     <!--need to add code to connect to the database-->
    <form method="post" action="/index.php">
    
     <div class="col-md-12">
        
         <div class="form-group">
             <h2 class="">Sign In.</h2>
        </div>
        
         <div class="form-group">
             <hr />
        </div>
        
            <div class="form-group">
                <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                     <input type="email" name="email" class="form-control" placeholder="Your Email" maxlength="40" />
                </div>
            </div>
            
            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
             <input type="password" name="pass" class="form-control" placeholder="Your Password" maxlength="15" />
                </div>
            </div>
            
            <div class="form-group">
             <hr />
            </div>
            
            <div class="form-group">
             <button type="submit" class="btn btn-block btn-primary" name="btn-login">Sign In</button>
            </div>
            
            <div class="form-group">
             <hr />
            </div>
            
            <div class="form-group">
             <a href="register.php">Sign Up Here...</a>
            </div>
        
            <div class="form-group">
             <a href="forgotpassword.php">Forgot Password?</a>
            </div>
      
        </div>
   
    </form>
    </div> 

</div>

</body>
</html>
