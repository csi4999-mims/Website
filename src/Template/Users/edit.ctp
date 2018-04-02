<!DOCTYPE html>
<html>
<head>

</head>
<body>
<div class="users form">
</br>
    <?php echo $this->Form->create('$user', [
	'context' => ['validator' => 'edit']
    ]); ?>
    <fieldset>
        <legend><?php echo __('Edit User'); ?></legend>
      </br>
        <?php
        echo $this->Form->input('FirstName', array('readonly' => 'readonly','value' => $user->get('FirstName')));
        echo $this->Form->input('LastName', array('readonly' => 'readonly', 'value' => $user->get('LastName')));
        echo $this->Form->input('newemail', array('label'=> 'New Email', 'value' => $user->get('email')));
        echo $this->Form->input('newphone', array('label' => 'New Phone', 'value' => $user->get('phone')));
        echo $this->Form->input('oldpass', array('label' => 'Old Password', 'maxLength' => 255, 'title' => 'OldPassword', 'type' => 'password'));
        echo $this->Form->input('newpass', array('label' => 'New Password', 'maxLength' => 255, 'title' => 'Password', 'type' => 'password'));
        echo $this->Form->input('confpass', array('label' => 'Confirm Password', 'maxLength' => 255, 'title' => 'Confirm password', 'type'=>'password'));
        echo $this->Form->submit('Update Account', array('class' => 'form-submit',  'title' => 'Click here to update the user account') );
        ?>
    </fieldset>
</div>
<?php
  if($user->get('role') == 'thepublic') {
    echo $this->Html->link("Return Home", array('controller' => 'users','action'=> 'homeConcernedPublic'), array( 'class' => 'dashboard-button button'));
  }elseif($user->get('role') == 'lawenforcement') {
    echo $this->Html->link("Return Home", array('controller' => 'users','action'=> 'homeLawEnforcement'), array( 'class' => 'dashboard-button button'));
  }
?>
</body>
</html>
