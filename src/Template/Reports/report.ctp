<!-- this is the submit missing person report page --!>

<div class="report form">
    <?php echo $this->Form->create('$report', [
	'context' => ['validator' => 'report']
    ]); ?>
    <fieldset>
        <legend><?php echo __('Submit Report'); ?></legend>
        <?php
        echo $this->Form->input('FirstName', array('label' => 'First Name', 'maxLength' => 30, 'title' => 'FirstName', 'type' => 'text'));
        echo $this->Form->input('LastName', array('label' => 'Last Name', 'maxLength' => 30, 'title' => 'LastName', 'type' => 'text'));
        echo $this->Form->input('gender', array('label' => 'Gender', 'maxLength' => 20, 'title' => 'Gender', 'type' => 'text'));
        echo $this->Form->input('ethinicity', array('label' => 'Ethnicity', 'maxLength' => 20, 'title' => 'Ethnicity', 'type' => 'text'));
        echo $this->Form->input('EyeColor', array('label' => 'Eye Color', 'maxLength' => 20, 'title' => 'EyeColor', 'type' => 'text'));
        echo $this->Form->input('HairColor', array('label' => 'Hair Color', 'maxLength' => 20, 'title' => 'HairColor', 'type' => 'text'));
        echo $this->Form->input('marks', array('label' => 'Marks/Tattoos', 'maxLength' => 20, 'title' => 'marks', 'type' => 'text'));
        echo $this->Form->input('weight', array('label' => 'Weight', 'maxLength' => 20, 'title' => 'weight', 'type' => 'number'));
        echo $this->Form->input('height', array('label' => 'Height', 'maxLength' => 20, 'title' => 'height', 'type' => 'number'));
        echo $this->Form->input('dob', array('label' => 'Date of Birth', 'placeholder' => 'mm/dd/yyyy', 'maxLength' => 10, 'title' => 'DOB', 'type' => 'date'));
        echo $this->Form->input('phone', array('label' => 'Phone', 'placeholder' => 'XXXXXXXXXX', 'maxLength' => 10, 'title' => 'Phone', 'type' => 'text'));
        echo $this->Form->input('SocialMedia', array('label' => 'Social Media Accounts', 'maxLength' => 50, 'title' => 'SocialMedia', 'type' => 'text'));
        echo $this->Form->input('additional', array('label' => 'Additional Information', 'maxLength' => 2000, 'title' => 'SocialMedia', 'type' => 'text'));

        echo $this->Form->submit('Submit', array('class' => 'form-submit',  'title' => 'Click here to submit the report') );
        ?>
    </fieldset>
    <?php echo $this->Form->end(); ?>
</div>

