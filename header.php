<!--File Name: header.php-->
<!--Date Created: 1-14-2018-->
<!--Created By: Nicole Cox-->
<!--Start File-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Site</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
        <style type="text/css">
            body { background-color: FFFFFF; }
            #main { border: 1px solid black;
                    border-radius: 10px;
                    padding: 8px;
                    background-color: #FFF; }
        </style>
    </head>
   <body>
        <nav class="navbar navbar-default navbar-inverse">
            <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">MIMS</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li <?= ($pageid == 'home') ? 'class="active"' : '' ?>><a href="home.php">Home</a></li>
                   </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!--uses username of person logged in-->
                    <!--needs to be setup with database connection-->
                      <?php if ($USER) { ?>
                     <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?= $USER->name ?></a></li>
                  <li><a href="login.php?logout=1&url=index.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
               <?php } else{ ?>
                    
                     <li <?= ($pageid == 'logout') ? 'class="active"' : '' ?>><a href="index.php">Login</a></li>
                       <li <?= ($pageid == 'reg') ? 'class="active"' : '' ?>><a href="register.php?"><span class="glyphicon glyphicon-pencil"></span>Sign-Up</a></li>
                     <?php } ?>
                 </ul>
              </div>
           </div>
         </nav>
        </body>
        </html>
