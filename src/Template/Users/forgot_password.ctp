<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <div>
            <h1>Forgot Password</h1>
            <p>Please provide the email address you use to sign in,
            then check your email for a reset link.</p>
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
