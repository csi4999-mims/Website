<!DOCTYPE html>
<html>
<div class="report form">
    <?php echo $this->Form->create('$report', [
	'context' => ['validator' => 'report']
    ]);
    ?>
    <fieldset>
        <legend><?php echo __('Missing Person Information'); ?></legend>
        <?php
        //echo $this->Form->hidden('SubmitterEmail', array('controller' => 'Users', 'value' => $user->get('email')));
        echo $this->Form->input('FirstName', array('class' => 'report-input', 'label' => 'First Name', 'maxLength' => 30, 'title' => 'FirstName', 'type' => 'text'));
        echo $this->Form->input('LastName', array('class' => 'report-input','label' => 'Last Name', 'maxLength' => 30, 'title' => 'LastName', 'type' => 'text'));
        echo $this->Form->input('Gender', array('options' => array('Male' => 'Male','Female' =>'Female')));
        echo $this->Form->input('Ethnicity', array('options' => array('American Indian' => 'Native American','Asian' => 'Asian',
        'African American' => 'African American','Hispanic/Latino' => 'Hispanic/Latino','Pacific Islander' => 'Pacific Islander',
        'White' => 'White')));
        echo $this->Form->input('EyeColor', array('options' => array('Brown' => 'Brown','Blue' => 'Blue','Amber' => 'Amber','Gray' => 'Gray',
        'Green' => 'Green','Hazel' => 'Hazel','Red' => 'Red','Black' => 'Black')));
        echo $this->Form->input('HairColor', array('label' => 'Hair Color', 'maxLength' => 256, 'title' => 'HairColor', 'type' => 'text'));
        echo $this->Form->input('Marks', array('class' => 'report-input','label' => 'Marks/Tattoos', 'maxLength' => 20, 'title' => 'marks', 'type' => 'text'));
        echo $this->Form->input('Weight', array('class' => 'report-input','label' => 'Weight', 'maxLength' => 20, 'title' => 'weight', 'type' => 'number'));
        echo $this->Form->input('Height', array('class' => 'report-input','label' => 'Height', 'maxLength' => 20, 'title' => 'height', 'type' => 'number'));
        echo $this->Form->label('Date of Birth');
        echo $this->Form->date('DoB', [
          'minYear' => 1900,
          'monthNames' => true,
          'empty' => [
            'year' => true,
            'year' => 'Choose Year...',
            'month' => 'Choose Month...',
            'day' => 'Choose Day...'
          ],
          'day' => true,
          'day' => [
            'class' => 'report-input'
          ],
          'month' => [
            'class' => 'report-input'
          ],
          'year' => [
              'label' => 'Date of Birth',
              'class' => 'report-input',
              'title' => 'Date of Birth'
          ]
        ]);
        echo $this->Form->input('Phone', array('class' => 'report-input','label' => 'Phone', 'placeholder' => 'XXXXXXXXXX', 'maxLength' => 10, 'title' => 'Phone', 'type' => 'text'));
        echo $this->Form->input('SocialMedia', array('class' => 'report-input','label' => 'Social Media Accounts', 'maxLength' => 50, 'title' => 'SocialMedia', 'type' => 'text'));
        echo $this->Form->input('Misc', array('class' => 'report-input','label' => 'Additional Information', 'maxLength' => 2000, 'title' => 'SocialMedia', 'type' => 'text'));
        ?>
    </fieldset>
    <fieldset>
        <legend><?php echo __('Missing Person Family/Friend Information'); ?></legend>
        <?php
        echo $this->Form->input('FamilyFirstName', array('label' => 'First Name', 'maxLength' => 256, 'title' => 'FirstName', 'type' => 'text'));
        echo $this->Form->input('FamilyLastName', array('label' => 'Last Name', 'maxLength' => 256, 'title' => 'LastName', 'type' => 'text'));
        echo $this->Form->input('FamilyGender', array('options' => array('Male' => 'Male','Female' =>'Female')));
        echo $this->Form->input('Relation', array('label' => 'Relation to Missing', 'maxLength' => 256, 'title' => 'relation', 'type' => 'text'));
        echo $this->Form->input('FamilyStreet', array('label' => 'Street', 'maxLength' => 256, 'title' => 'street', 'type' => 'text'));
        echo $this->Form->input('FamilyCity', array('label' => 'City', 'maxLength' => 256, 'title' => 'city', 'type' => 'text'));
        echo $this->Form->input('FamilyState', array('label' => 'state', 'maxLength' => 2, 'title' => 'state', 'type' => 'text'));
        echo $this->Form->input('FamilyZip', array('label' => 'zip', 'maxLength' => 5, 'title' => 'zip', 'type' => 'text'));
        echo $this->Form->input('FamilyPhone', array('label' => 'Phone', 'placeholder' => 'XXXXXXXXXX', 'maxLength' => 10, 'title' => 'Phone', 'type' => 'text'));
        echo $this->Form->input('FamilyEmail', array('label' => 'Email', 'maxLength' => 256, 'title' => 'Email', 'type' => 'email'));
        ?>
    </fieldset>
    <fieldset>
        <legend><?php echo __('Missing Person Workplace/Hangouts'); ?></legend>
        <?php
        echo $this->Form->input('PlaceName', array('label' => 'Workplace Name', 'maxLength' => 30, 'title' => 'WorkplaceName', 'type' => 'text'));
        echo $this->Form->input('PlaceStreet', array('label' => 'Street', 'maxLength' => 20, 'title' => 'street', 'type' => 'text'));
        echo $this->Form->input('PlaceCity', array('label' => 'City', 'maxLength' => 20, 'title' => 'city', 'type' => 'text'));
        echo $this->Form->input('PlaceState', array('label' => 'state', 'maxLength' => 2, 'title' => 'state', 'type' => 'text'));
        echo $this->Form->input('PlaceZip', array('label' => 'zip', 'maxLength' => 5, 'title' => 'zip', 'type' => 'text'));
        echo $this->Form->input('PlaceMiscInfo', array('label' => 'Additional Information', 'maxLength' => 2000, 'title' => 'SocialMedia', 'type' => 'text'));
        echo $this->Form->submit('Submit Report', array('class' => 'form-submit',  'title' => 'Click here to') );
        ?>
    </fieldset>
    <?php echo $this->Form->end(); ?>
</div>
<?php echo $this->Html->link( "Return to Dashboard",   array('action'=>'home') );
?>
</html>
