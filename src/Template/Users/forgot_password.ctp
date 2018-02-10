<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <div>
            <h1>Forgot Password</h1>
            <h3>An email with a reset link will be sent to your email</h3>
        </div>
        <div class="reset form">
            <?php echo $this->Form->create('$user'); ?>
            <fieldset>
                <?php
                echo $this->Form->input('email', array(
                    'label'     => 'Email',
                    'maxLength' => 20,
                    'title'     => 'Email',
                    'type'      => 'email')
                );
                echo $this->Form->submit('Send Email', array(
                    'class' => 'form-submit',
                    'title' => 'Click here to send recovery email')
                );
                ?>
            </fieldset>
            <?php echo $this->Form->end(); ?>
        </div>
    </body>
</html>
