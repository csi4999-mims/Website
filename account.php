<!--File Name: account.php-->
<!--Date Created: 1-14-2018-->
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
<script src="js-register.js"></script>
</head>
<body>

<div class="container">
    <h1> Welcome, USERNAME!</h1>
    
    <div>
       <button id="edit-button" onclick="EditInfo()">Edit Account Info</button>
    </div>
    
    
     <div id="account-update-form">
     <!--need to add code to connect to the database-->
     <!--needs to display updated account info-->
    <form method="post" action="/account.php">
    
     <div class="col-md-12">
         <div class="form-group">
             <hr />
        </div>
            
            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
             <input id="f-name"type="text" name="first-name" class="form-control" placeholder="Bob" maxlength="50" readonly/>
                </div>
                <span class="text-danger"><?php echo $nameError; ?></span>
            </div>
            
            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
             <input id="l-name" type="text" name="last-name" class="form-control" placeholder="Smith" maxlength="50" readonly/>
                </div>
                <span class="text-danger"><?php echo $nameError; ?></span>
            </div>
            
            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
             <input id="email" type="email" name="email" class="form-control" placeholder="BobSmith@test.com" maxlength="40" readonly/>
                </div>
                <span class="text-danger"><?php echo $emailError; ?></span>
            </div>
            
            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
             <input id="password" type="password" name="pass" class="form-control" placeholder="****************" maxlength="15" readonly/>
                </div>
                <span class="text-danger"><?php echo $passError; ?></span>
            </div>
            
            <div class="form-group">
             <hr />
            </div>
            
            <div class="form-group">
             <button type="submit" class="btn btn-block btn-primary" name="btn-signup">Update Account Info</button>
            </div>
            
            <div class="form-group">
             <hr />
            </div>
        </div>
   
    </form>
</div>

</body>
</html>
