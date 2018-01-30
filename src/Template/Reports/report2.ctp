<!-- this is the submit missing person report page --!>
<!-- continued --!>

<div class="report form">
    <?php echo $this->Form->create('$report', [
	'context' => ['validator' => 'report']
    ]); ?>
    <fieldset>
        <legend><?php echo __('Family/Friend Information'); ?></legend>
        <?php
        echo $this->Form->input('FirstName', array('label' => 'First Name', 'maxLength' => 30, 'title' => 'FirstName', 'type' => 'text'));
        echo $this->Form->input('LastName', array('label' => 'Last Name', 'maxLength' => 30, 'title' => 'LastName', 'type' => 'text'));
        echo $this->Form->input('gender', array('label' => 'Gender', 'maxLength' => 20, 'title' => 'Gender', 'type' => 'text'));
        echo $this->Form->input('relation', array('label' => 'Relation to Missing', 'maxLength' => 20, 'title' => 'relation', 'type' => 'text'));
        echo $this->Form->input('street', array('label' => 'Street', 'maxLength' => 20, 'title' => 'street', 'type' => 'text'));
        echo $this->Form->input('city', array('label' => 'City', 'maxLength' => 20, 'title' => 'city', 'type' => 'text'));
        echo $this->Form->input('state', array('label' => 'state', 'maxLength' => 20, 'title' => 'state', 'type' => 'text'));
        echo $this->Form->input('zip', array('label' => 'zip', 'maxLength' => 20, 'title' => 'zip', 'type' => 'text'));
        echo $this->Form->input('phone', array('label' => 'Phone', 'placeholder' => 'XXXXXXXXXX', 'maxLength' => 10, 'title' => 'Phone', 'type' => 'text'));
        echo $this->Form->input('email', array('label' => 'Email', 'maxLength' => 20, 'title' => 'Email', 'type' => 'email'));
        echo $this->Form->input('additional', array('label' => 'Additional Information', 'maxLength' => 2000, 'title' => 'SocialMedia', 'type' => 'text'));
        
	echo $this->Html->link("Next", array('controller' => 'Reports','action'=> 'report3'), array( 'class' => 'button'))
        ?>
    </fieldset>
    <?php echo $this->Form->end(); ?>
</div>
