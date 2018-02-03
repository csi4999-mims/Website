<!DOCTYPE html>
<html>
<head>

</head>
<body>
<h1> Welcome to the Home Page </h1>
<br/>
<div>
 <?php 
echo $this->Html->link( "Logout",   array('action'=>'logout') ); 
?>   
</div>
<br/>  
<div id="missing-person-info">
    <div class="container">
        <div id="basic-info">
            <div class="row">
                <div class="col-md-6">
                    <img src="/src/Template/Users/images/usericon.png" alt="this is the missing person image"> 
                </div>  
                <div class="col-md-6">
                    <ul>
                        <li>Name:</li>
                        <li>Age:</li>
                        <li>Height:</li>
                        <li>Weight:</li>
                        <li>Marks/Tattoos:</li>
                        <li>Gender:</li>
                        <li>Last Seen:</li>
                    </ul> 
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="/src/Template/Users/images/usericon.png" alt="this is the missing person image"> 
                </div>  
                <div class="col-md-6">
                    <ul>
                        <li>Name:</li>
                        <li>Age:</li>
                        <li>Height:</li>
                        <li>Weight:</li>
                        <li>Marks/Tattoos:</li>
                        <li>Gender:</li>
                        <li>Last Seen:</li>
                    </ul> 
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>