<!DOCTYPE html>
<html>
<head>

</head>
  <?php echo $this->Form->create('$found');
  $this->Html->css('custom');
  ?>

  </br>
  <fieldset>
      <legend>
        <?php echo __('Has this person been found?');?>
        <?= $this->Html->link($report->Report_ID, ['controller' => 'reports','action' => 'detailedReport', $report->Report_ID]) ?>
      </legend>
      <?php
      echo $this->Form->hidden('Report_ID', array('value' => $report->get('Report_ID')));
      echo $this->Form->submit('Submit', array('class' => 'form-submit found-submit',  'title' => 'Click here to') );
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
