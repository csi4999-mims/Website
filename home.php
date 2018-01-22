<!--File Name: home.php-->
<!--Date Created: 1-14-2018-->
<!--Created By: Nicole Cox-->
<!--Start File-->

<?php
//pulls in bootstrap and javascript
require('lib.php');
?>

<?php
$sire_root = $_SERVER['DOCUMENT_ROOT'];
require_once("$site_root/../connection.php");

try {
    $email = $_POST['email'];
    $pass = $_POST9'pass'];
    $phone = $_POST['phone'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    
    $sql = "INSERT INTO profiles (firstname, lastname, email, pass, phone) VALUES ('" . $firstname . "', '" . $lastname . "', '" . $email . "', '" . $pass . "', '" . $phone . "')";
    $conn->exec($sql);
    $conn = null;
    
} catch(PDOException $e) {
    echo $e->getMessage();
}

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
            header('Location: index.php');
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
<div>
    <h1>This is where our stuff will go</h1>
</div>
</body>
</html>
