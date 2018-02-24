<!DOCTYPE html>
<html>
<head>

</head>
<body>
<div class="users form">
    <?php echo $this->Form->create('$user', [
	'context' => ['validator' => 'default']
    ]); ?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
        <?php
        echo $this->Form->input('FirstName', array('label' => 'First Name', 'maxLength' => 30, 'title' => 'FirstName', 'type' => 'text'));
        echo $this->Form->input('LastName', array('label' => 'Last Name', 'maxLength' => 30, 'title' => 'LastName', 'type' => 'text'));
        echo $this->Form->input('email', array('label' => 'Email', 'maxLength' => 20, 'title' => 'Email', 'type' => 'email'));
        echo $this->Form->input('phone', array('label' => 'Phone', 'placeholder' => '(XXX)-XXX-XXXX', 'maxLength' => 10, 'title' => 'Phone', 'type' => 'text'));
        echo $this->Form->input('password', array('label' => 'Password', 'maxLength' => 255, 'title' => 'Password', 'type' => 'password'));
        echo $this->Form->input('confpass', array('label' => 'Confirm Password', 'maxLength' => 255, 'title' => 'Confirm password', 'type'=>'password'));
        echo $this->Form->input('role', array(
            'options' => array('lawenforcement' => 'Law Enforcement', 'thepublic' => 'Public')
        ));
        echo $this->Form->submit('Register', array('class' => 'form-submit',  'title' => 'Click here to add the user') );
        ?>
    </fieldset>
    <?php echo $this->Form->end(); ?>
</div>
<?php
if($this->request->session()->check('Auth.User')){
    echo $this->Html->link( "Return to Dashboard",   array('action'=>'home') );
    echo "<br>";
    echo $this->Html->link( "Logout",   array('action'=>'logout') );
}else{
    echo $this->Html->link( "Return to Login Screen",   array('action'=>'login') );
}
?>
</body>
</html>
