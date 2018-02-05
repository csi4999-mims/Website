<!-- This is the edit user info page -->
<!-- The syntax on this for pulling in user data needs to be verified --!>

<div class="users form">
    <?php echo $this->Form->create('$user', [
	'context' => ['validator' => 'edit']
    ]); ?>
    <fieldset>
        <legend><?php echo __('Edit User'); ?></legend>
        <?php
        echo $this->Form->input('FirstName', array('readonly' => 'readonly','value' => $user->get('FirstName')));
        echo $this->Form->input('LastName', array('readonly' => 'readonly', 'value' => $user->get('LastName')));
        echo $this->Form->input('newemail', array('value' => $user->get('email')));
        echo $this->Form->input('newphone', array('value' => $user->get('phone')));
        echo $this->Form->input('oldpass', array('label' => 'Old Password', 'maxLength' => 255, 'title' => 'OldPassword', 'type' => 'password'));
        echo $this->Form->input('newpass', array('label' => 'New Password', 'maxLength' => 255, 'title' => 'Password', 'type' => 'password'));
        echo $this->Form->input('confpass', array('label' => 'Confirm Password', 'maxLength' => 255, 'title' => 'Confirm password', 'type'=>'password'));
        echo $this->Form->submit('Update Account', array('class' => 'form-submit',  'title' => 'Click here to update the user account') );
        ?>
    </fieldset>
</div>
<?php
echo $this->Html->link( "Return to Dashboard",   array('action'=>'home') );
?>
<br/>
<?php
echo $this->Html->link( "Logout",   array('action'=>'logout') );
?>

