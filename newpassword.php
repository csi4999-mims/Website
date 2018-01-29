<!--File Name: newpassword.php-->
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
<title>Register</title>

</head>
<body>

<div class="container">

 <div id="new-password-form">
     <!--need to add code to connect to the database-->
    <form method="post" action="/home.php">
    
     <div class="col-md-12">
        
         <div class="form-group">
             <h2 class="">Change Password</h2>
            </div>
        
         <div class="form-group">
             <hr />

            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
             <input type="password" name="pass" class="form-control" placeholder="Enter Password" maxlength="15" />
                </div>
                <span class="text-danger"><?php echo $passError; ?></span>
            </div>
            
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
             <input type="password" name="confirmpass" class="form-control" placeholder="Confirm Password" maxlength="15" />
                </div>
                <span class="text-danger"><?php echo $passError; ?></span>
            </div>
      
            <div class="form-group">
             <hr />
            </div>
            
            <div class="form-group">
             <button type="submit" class="btn btn-block btn-primary" name="btn-signup">Submit</button>
            </div>
        
        </div>
   
    </form>
    </div> 

</div>

</body>

</html>
