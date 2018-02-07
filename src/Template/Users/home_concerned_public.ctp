<!DOCTYPE html>
<html>
<head>

</head>
<body>
<div class="page-header">
    <h1> Welcome <span class="display-user"><?php echo $this->Form->label('FirstName', array('value' => $user->get('FirstName'))); ?></span></h1>
</div>

<div id="display-missing" class="container-fluid">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">My Case</h3>
            </div>
            <div class="panel-body">
                <ul>
                    <li>Case Status:</li>
                    <li>Date Created:</li>
                    <li>Case Number:</li>
                    <li>Associated Officer(s):</li>
                    <li>Latest Update:</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="display-missing" class="container-fluid">
    <div class="row well">
        <div class="col-md-6">
            <?php echo $this->Html->image('usericon.png', ['alt' => 'Image of missing person', 'class' => 'photos-missing']); ?>
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
</body>
</html>