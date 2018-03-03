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
                    <li>Case Number:</li>
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
  <?php foreach ($reports as $report): ?>
    <div class="row well">
        <div class="col-md-6">
            <?php echo $this->Html->image('usericon.png', ['alt' => 'Image of missing person', 'class' => 'photos-missing']); ?>
        </div>
        <div class="col-md-6">
            <ul>
                <li>First Name: <?php echo $this->Form->label('FirstName', array('value' => $report->get('FirstName'))); ?></li>
                <li>Last Name: <?php echo $this->Form->label('LastName', array('value' => $report->get('LastName'))); ?></li>
                <li>Date of Birth: <?php echo $this->Form->label('DoB', array('value' => $report->get('DoB'))); ?></li>
                <li>Height: <?php echo $this->Form->label('Height', array('value' => $report->get('Height'))); ?></li>
                <li>Weight: <?php echo $this->Form->label('Weight', array('value' => $report->get('Weight'))); ?></li>
                <li>Marks/Tattoos: <?php echo $this->Form->label('MarksTattoos', array('value' => $report->get('MarksTattoos'))); ?></li>
                <li>Gender: <?php echo $this->Form->label('Gender', array('value' => $report->get('Gender'))); ?></li>
                <li>Last Seen:</li>
            </ul>
        </div>
    </div>
  <?php endforeach; ?>
</div>
</body>
</html>
