<!--File Name: forgotpassword.php-->
<!--Date Created: 1-15-2018-->
<!--Created By: Nicole Cox-->
<!--Start File-->

<?php
//pulls in bootstrap and javascript
require('lib.php');
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

 <div id="forgot-password-form">
     <!--need to add code to connect to the database-->
    <form method="post" action="/newpassword.php">
    
     <div class="col-md-12">
        
         <div class="form-group">
             <h2 class="">Enter Your Email</h2>
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
             <hr />
            </div>
            
            <div class="form-group">
             <button type="submit" class="btn btn-block btn-primary" name="btn-login">Reset Password</button>
            </div>
        </div>
   
    </form>
    </div> 

</div>

</body>
</html>