<!--File Name: index.php-->
<!--Date Created: 1-14-2018-->
<!--Created By: Nicole Cox-->
<!--Start File-->

<?php
//pulls in bootstrap and javascript
require('lib.php');
?>

<?php
/*

$site_root = $_SERVER['DOCUMENT_ROOT'];
require_once("$site_root/../connection.php");

if(isset($_POST['login'])) {
    $email = !empty($_POST['email']) ? trim($_POST['email']) : null;
    passwordAttempt = !empty($_POST['pass']) ? trim($_POST['pass']) : null;
    
    $sql = "SELECT email, pass FROM profiles where email = '" . $email . "'";
    //$stmt = $pdo->prepare($sql);
    //$stmt->bindValue(':email', $email);
    $conn->exec($sql);
    
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if($user === false) {
        die('Incorrect username/password combination');
        header('Location: index.php'); 
    } else {
        $validPassword = password_verify($passwordAttempt, $user['pass']);
        if($validPassword) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['logged_in'] = time();
            
            header("Location: /home.php');
            exit;
        } else {
            die('Incorrect username/password combination');
            header('Location: /index.php');
        }
    }
}
*/
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
    <form method="post" action="/home.php">
    
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
