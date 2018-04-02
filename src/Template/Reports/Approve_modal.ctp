<!DOCTYPE html>
<html>
<head>

</head>
  <?php echo $this->Form->create('$approve');
  $this->Html->css('custom');
  ?>

  </br>
  <fieldset>
      <legend>
        <?php echo __('Add A Case Number To Approve Report ID: ');?>
        <?= $this->Html->link($report->Report_ID, ['controller' => 'reports','action' => 'detailedReport', $report->Report_ID]) ?>
      </legend>
      <?php
      echo $this->Form->input('report_case_number', array('class' => 'report-input', 'label' => 'Case Number', 'maxLength' => 250, 'title' => 'Case Number', 'type' => 'text'));
      echo $this->Form->hidden('Report_ID', array('value' => $report->get('Report_ID')));
      echo $this->Form->submit('Submit Approval', array('class' => 'form-submit approve-submit',  'title' => 'Click here to') );
      ?>
  </fieldset>
  <?php echo $this->Form->end(); ?>

  <?php
    if($user->get('role') == 'thepublic') {
      echo $this->Html->link("Return Home", array('controller' => 'users','action'=> 'homeConcernedPublic'), array( 'class' => 'return-home-button button'));
    }elseif($user->get('role') == 'lawenforcement') {
      echo $this->Html->link("Return Home", array('controller' => 'users','action'=> 'homeLawEnforcement'), array( 'class' => 'return-home-button button'));
    }
  ?>
</html>
