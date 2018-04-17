<!DOCTYPE html>
<html>
<head>

</head>
  <?php echo $this->Form->create('$comment');
  $this->Html->css('custom');
  ?>
  <div class="view-comments">
  </br>
    <fieldset>
      <legend><?php echo __('Existing Case Comments'); ?></legend>
    </br>
    </fieldset>
    <div class="show-comments">
    <?php foreach ($comments as $comment): ?>
        <div class="display-comments well">
          <strong>Comment:</strong> <?php echo $this->Form->label('description', array('value' => $comment->get('description'))); ?></br>
        </div>
    <?php endforeach; ?>
  </div>
  </div>
  </br>
  <fieldset>
      <legend><?php echo __('Submit Your Comment'); ?></legend>
    </br>
      <?php
      echo $this->Form->input('email', array('class' => 'report-input', 'label' => 'Email', 'maxLength' => 50, 'title' => 'Email', 'type' => 'email'));
      echo $this->Form->input('description', array('class' => 'report-input', 'label' => 'Comment', 'maxLength' => 250, 'title' => 'Comment', 'type' => 'textarea'));
      echo $this->Form->hidden('Report_ID', array('value' => $report->get('Report_ID')));
      echo $this->Form->submit('Submit Comment', array('class' => 'form-submit comment-submit',  'title' => 'Click here to') );
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
