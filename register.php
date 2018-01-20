<!--File Name: register.php-->
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

//"F" stands for "Form" because we are grabbing from a form
$Email = $_POST['email'];
$pass = $_POST['pass'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];

//$sql = "INSERT INTO profiles VALUES ( NULL, '$username', '$password', '$email')";
//$query = $conn->prepare ( $sql );

//This way may be safer
$sql = "INSERT INTO profiles ( :pEmail, :pPass, :fname, :lname, :pPhone ) VALUES ( Email, pass, firstname, lastname, phone )";
$query = $conn->prepare( $sql );
$result = $query->execute( array( ':pEmail'=>$Email, ':pPass'=>$pass, ':fname'=>$firstname, ':lname'=>$lastname, ':pPhone'=>$phone ) );

if ( $result ){
  echo "<p>Thank you. You have been registered</p>";
} else {
  echo "<p>Sorry, there has been a problem inserting your details. Please contact admin.</p>";
}

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Coding Cage - Login & Registration System</title>

</head>
<body>

<div class="container">

 <div id="login-form">
     <!--need to add code to connect to the database-->
    <form method="post" action="/home.php">
    
     <div class="col-md-12">
        
         <div class="form-group">
             <h2 class="">Sign Up.</h2>
            </div>
        
         <div class="form-group">
             <hr />
            </div>
            
            <?php
   if ( isset($errMSG) ) {
    
    ?>
    <div class="form-group">
             <div class="alert alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
    <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                </div>
             </div>
                <?php
   }
   ?>
            
            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
             <input type="text" id="fname" name="firstname" class="form-control" placeholder="Enter First Name" maxlength="50" value="<?php echo $fname ?>" />
                </div>
                <span class="text-danger"><?php echo $nameError; ?></span>
            </div>
            
            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
             <input type="text" id="lname" name="lastname" class="form-control" placeholder="Enter Last Name" maxlength="50" value="<?php echo $lname ?>" />
                </div>
                <span class="text-danger"><?php echo $nameError; ?></span>
            </div>
            
            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
             <input type="email" id="email" name="email" class="form-control" placeholder="Enter Your Email" maxlength="40" value="<?php echo $email ?>" />
                </div>
                <span class="text-danger"><?php echo $emailError; ?></span>
            </div>
            
            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
             <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter Your Phone Number" maxlength="40" value="<?php echo $phone ?>" />
                </div>
                <span class="text-danger"><?php echo $phoneError; ?></span>
            </div>
      
            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
             <input type="password" id="pass" name="pass" class="form-control" placeholder="Enter Password" maxlength="15" />
                </div>
                <span class="text-danger"><?php echo $passError; ?></span>
            </div>
      
           <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
             <input type="password" id="confirmpass" name="confirmpass" class="form-control" placeholder="Confirm Password" maxlength="15" />
                </div>
                <span class="text-danger"><?php echo $passError; ?></span>
            </div>
           </div>
     
            <div class="form-group">
             <hr />
            </div>
            
            <div class="form-group">
             <button type="submit" class="btn btn-block btn-primary" name="btn-signup">Sign Up</button>
            </div>
            
            <div class="form-group">
             <hr />
            </div>
            
            <div class="form-group">
             <a href="index.php">Sign in Here...</a>
            </div>
        
        </div>
   
    </form>
    </div> 

</div>

</body>

</html>
