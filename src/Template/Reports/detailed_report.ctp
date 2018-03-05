<!DOCTYPE html>
<html>
<head>

</head>
<body>
<div class="page-header">
    <h1> Detailed Report </h1>
</div>
<div class="users form">
    <?php echo $this->Form->create('$user', [
	'context' => ['validator' => 'edit']
    ]); ?>
    <fieldset>
      <div id="display-missing" class="container-fluid">
        <div class="row">
            <div class="col-md-4">
              <?php echo $this->Form->input('FirstName', array('value' => $report->get('FirstName'))); ?>
            </div>
            <div class="col-md-4">
              <?php echo $this->Form->input('MiddleName', array('value' => $report->get('MiddleName'))); ?>
            </div>
            <div class="col-md-4">
              <?php echo $this->Form->input('LastName', array('value' => $report->get('LastName'))); ?>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <?php echo $this->Form->input('Gender', array('value' => $report->get('Gender'))); ?>
          </div>
          <div class="col-md-4">
            <?php echo $this->Form->input('Ethnicity', array('value' => $report->get('Ethnicity'))); ?>
          </div>
          <div class="col-md-4">
            <?php echo $this->Form->input('DoB', array('value' => $report->get('DoB'))); ?>
          </div>
        </div>
      </div>
    </fieldset>
</div>
</body>
</html>
