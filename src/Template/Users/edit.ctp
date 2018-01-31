<!-- This is the edit user info page -->
<!-- The syntax on this for pulling in user data needs to be verified --!>

<div class="users form">
    <?php echo $this->Form->create('$user', [
	'context' => ['validator' => 'default']
    ]); ?>
    <fieldset>
        <legend><?php echo __('Edit User'); ?></legend>
        <?php
        echo $this->Form->input('FirstName', array('readonly' => 'readonly', 'label' => 'First Name', 'maxLength' => 30, 'title' => 'FirstName', 'type' => 'text'));
        echo $this->Form->input('LastName', array('readonly' => 'readonly', 'label' => 'Last Name', 'maxLength' => 30, 'title' => 'LastName', 'type' => 'text'));
        echo $this->Form->input('email', array('label' => 'Email', 'maxLength' => 20, 'title' => 'Email', 'type' => 'email'));
        echo $this->Form->input('phone', array('label' => 'Phone', 'placeholder' => 'XXXXXXXXXX', 'maxLength' => 10, 'title' => 'Phone', 'type' => 'text'));
        echo $this->Form->input('old_password', array('label' => 'Old Password', 'maxLength' => 255, 'title' => 'OldPassword', 'type' => 'password'));
        echo $this->Form->input('change_password', array('label' => 'Password', 'maxLength' => 255, 'title' => 'Password', 'type' => 'password'));
        echo $this->Form->input('ChangeConfirmPassword', array('label' => 'Confirm Password', 'maxLength' => 255, 'title' => 'Confirm password', 'type'=>'password'));
        echo $this->Form->submit('Update Account', array('class' => 'form-submit',  'title' => 'Click here to update the user account') );
        ?>
    </fieldset>
    <?php echo $this->Form->end(); ?>
</div>
<?php
echo $this->Html->link( "Return to Dashboard",   array('action'=>'home') );
?>
<br/>
<?php
echo $this->Html->link( "Logout",   array('action'=>'logout') );
?>

