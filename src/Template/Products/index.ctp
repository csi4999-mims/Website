<div class="users form">
    <?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
        <?php
        echo $this->Form->input('FirstName');
        echo $this->Form->input('LastName');
        echo $this->Form->input('email');
        echo $this->Form->input('phone');
        echo $this->Form->input('password');
        echo $this->Form->input('ConfirmPassword', array('label' => 'Confirm Password *', 'maxLength' => 255, 'title' => 'Confirm password', 'type'=>'password'));
        echo $this->Form->input('role', array(
            'options' => array('admin' => 'Admin', 'law enforcement' => 'Law Enforcement', 'public' => 'Public')
        ));
        echo $this->Form->submit('Register', array('class' => 'form-submit',  'title' => 'Click here to add the user') );
        ?>
    </fieldset>
    <?php echo $this->Form->end(); ?>
</div>
