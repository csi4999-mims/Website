<!DOCTYPE html>
<html>
<head>

</head>
<body>
<div class="users form">
    <?php echo $this->Flash->render('auth'); ?>
    <?php echo $this->Form->create('$user'); ?>
    <fieldset>
        <legend>
            <?php echo('Law Enforcement'); ?>
          </br>
            <?php echo __('Please enter your username and password'); ?>
        </legend>
        <?php echo $this->Form->input('email');
        echo $this->Form->input('password');
        ?>
    <?= $this->Form->button('Login'); ?>
    </fieldset>
    <?= $this->Form->end(); ?>
</div>
<div>
    <?php
    echo $this->Html->link( "Add A New User",   array('action'=>'addle') );
    ?>
</div>
</body>
</html>