<!-- this is the submit missing person report page --!>
<!-- continued --!>

<div class="report form">
    <?php echo $this->Form->create('$report', [
	'context' => ['validator' => 'report3']
    ]); ?>
    <fieldset>
        <legend><?php echo __('Missing Person Workplace/Hangouts'); ?></legend>
        <?php
        echo $this->Form->input('WorkplaceName', array('label' => 'Workplace Name', 'maxLength' => 30, 'title' => 'WorkplaceName', 'type' => 'text'));
        echo $this->Form->input('street', array('label' => 'Street', 'maxLength' => 20, 'title' => 'street', 'type' => 'text'));
        echo $this->Form->input('city', array('label' => 'City', 'maxLength' => 20, 'title' => 'city', 'type' => 'text'));
        echo $this->Form->input('state', array('label' => 'state', 'maxLength' => 20, 'title' => 'state', 'type' => 'text'));
        echo $this->Form->input('zip', array('label' => 'zip', 'maxLength' => 20, 'title' => 'zip', 'type' => 'text'));
        echo $this->Form->input('phone', array('label' => 'Phone', 'placeholder' => 'XXXXXXXXXX', 'maxLength' => 10, 'title' => 'Phone', 'type' => 'text'));
        echo $this->Form->input('email', array('label' => 'Email', 'maxLength' => 20, 'title' => 'Email', 'type' => 'email'));
        echo $this->Form->input('additional', array('label' => 'Additional Information', 'maxLength' => 2000, 'title' => 'SocialMedia', 'type' => 'text'));
        echo $this->Form->input('HangoutName', array('label' => 'Hangout Name', 'maxLength' => 30, 'title' => 'Hangout', 'type' => 'text'));
        echo $this->Form->input('street', array('label' => 'Street', 'maxLength' => 20, 'title' => 'street', 'type' => 'text'));
        echo $this->Form->input('city', array('label' => 'City', 'maxLength' => 20, 'title' => 'city', 'type' => 'text'));
        echo $this->Form->input('state', array('label' => 'state', 'maxLength' => 20, 'title' => 'state', 'type' => 'text'));
        echo $this->Form->input('zip', array('label' => 'zip', 'maxLength' => 20, 'title' => 'zip', 'type' => 'text'));
        echo $this->Form->input('phone', array('label' => 'Phone', 'placeholder' => 'XXXXXXXXXX', 'maxLength' => 10, 'title' => 'Phone', 'type' => 'text'));
        echo $this->Form->input('email', array('label' => 'Email', 'maxLength' => 20, 'title' => 'Email', 'type' => 'email'));
        echo $this->Form->input('additional', array('label' => 'Additional Information', 'maxLength' => 2000, 'title' => 'SocialMedia', 'type' => 'text'));
        
	echo $this->Form->submit('Submit Report', array('class' => 'form-submit',  'title' => 'Click here to') );
        ?>
    </fieldset>
    <?php echo $this->Form->end(); ?>
</div>
<?php echo $this->Html->link( "Return to Dashboard",   array('action'=>'home') );
?>
