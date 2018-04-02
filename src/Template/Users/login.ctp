<!DOCTYPE html>
<html>
<head>

</head>
<body>
</br>
<div class="users form">
    <?php echo $this->Flash->render('auth'); ?>
    <?php echo $this->Form->create('$user'); ?>
    <fieldset>
        <legend>
            <?php echo __('Please Enter Your Email and Password'); ?>
        </legend>
      </br>
        <?php echo $this->Form->input('email');
        echo $this->Form->input('password');
        ?>
    <?= $this->Form->button('Login', array( 'class' => 'login-button button')); ?>
    </fieldset>
    <?= $this->Form->end(); ?>
</div>
<div>
  <?php echo $this->Html->link("REGISTER", array('controller' => 'Users','action'=> 'add'), array( 'class' => 'register-button button')) ?>
</div>
</body>
</html>
