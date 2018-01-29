<!--File Name: home.php-->
<!--Date Created: 1-14-2018-->
<!--Created By: Nicole Cox-->
<!--Start File-->

<?php
//pulls in bootstrap and javascript
require('lib.php');
?>

<?php
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  session_unset(); //Destroys any set variables
  session_destroy(); //Destroys the existing session (Will be used for logging out)
  //The two lines above this need to be removed once a logout button has been added. 
  //They currently destroy the session information immediately after login. 
  //Solely used to test the code
} else {
  header('Location: /index.php');
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
<div>
    <h1>This is where our stuff will go</h1>
</div>
</body>
</html>
