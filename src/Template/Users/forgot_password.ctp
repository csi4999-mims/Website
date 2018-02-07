<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>

        <div class="users form">
            <?php echo $this->Form->create('$user', [
                'context' => ['validator' => 'edit']
            ]); ?>
            <fieldset>
                <legend><?php echo __('Reset Password'); ?></legend>
                <?php
                echo $this->Form->input('newpass',
                                        array('label'     => 'Password',
                                              'maxLength' => 255,
                                              'title'     => 'Password',
                                              'type'      => 'password')
		);

                echo $this->Form->input('confpass',
                                        array('label'     => 'Confirm Password',
                                              'maxLength' => 255,
                                              'title'     => 'Confirm password',
                                              'type'      => 'password')
		);

                echo $this->Form->submit('Reset Password',
                                         array('class' => 'form-submit',
                                               'title' => 'Click here to reset your password')
		);
                ?>
            </fieldset>
            <?php echo $this->Form->end(); ?>
        </div>

    </body>
</html>
