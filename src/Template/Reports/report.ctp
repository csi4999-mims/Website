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
        echo $this->Form->input('missing_first_name', array('label' => 'First Name', 'maxLength' => 50, 'title' => 'FirstName', 'type' => 'text'));
        echo $this->Form->input('missing_middle_name', array('label' => 'Middle Name', 'maxLength' => 50, 'title' => 'MiddleName', 'type' => 'text'));
        echo $this->Form->input('missing_last_name', array('label' => 'Last Name', 'maxLength' => 50, 'title' => 'LastName', 'type' => 'text'));
        echo $this->Form->input('missing_alias', array('label' => 'Alias', 'maxLength' => 100, 'title' => 'Alias', 'type' => 'text'));
        echo $this->Form->input('missing_email_address', array('label' => 'Email Address', 'maxLength' => 100, 'title' => 'Email', 'type' => 'email'));
        echo $this->Form->input('missing_gender', array('label' => 'Gender', 'options' => array('Male' => 'Male','Female' =>'Female','androgynous' => 'Androgynous')));
        echo $this->Form->input('missing_ethnicity', array('label' => 'Ethnicity','options' => array('american_indian' => 'Native American','asian' => 'Asian',
        'african_american' => 'African American','hispanic_latino' => 'Hispanic/Latino','middle_eastern' => 'Middle Eastern','pacific_islander' => 'Pacific Islander',
        'white' => 'White','other' => 'Other')));
        echo $this->Form->input('missing_ethnicity_other', array('label' => 'Other', 'maxLength' => 255, 'title' => 'EthinicityOther', 'type' => 'text'));
        echo $this->Form->input('missing_eye_color', array('options' => array('amber' => 'Amber','black' => 'Black','blue' => 'Blue','brown' => 'Brown','green' => 'Green',
        'grey' => 'Grey','hazel' => 'Hazel','other' => 'Other')));
        echo $this->Form->input('missing_eye_color_other', array('label' => 'Other', 'maxLength' => 255, 'title' => 'EyeColorOther', 'type' => 'text'));
        echo $this->Form->input('missing_hair_color', array('options' => array('auburn' => 'Auburn','black' => 'Black','blonde' => 'Blonde','brown' => 'Brown','grey' => 'Grey',
        'red' => 'Red','white' => 'White','other' => 'Other')));
        echo $this->Form->input('missing_hair_color_other', array('label' => 'Other', 'maxLength' => 255, 'title' => 'EyeColorOther', 'type' => 'text'));
        echo $this->Form->input('missing_markings', array('label' => 'Marks/Tattoos', 'maxLength' => 256, 'title' => 'marks', 'type' => 'text'));
        echo $this->Form->input('missing_weight_pounds', array('label' => 'Weight', 'maxLength' => 20, 'title' => 'weight', 'type' => 'number'));
        echo $this->Form->input('missing_height_inches', array('label' => 'Height', 'maxLength' => 20, 'title' => 'height', 'type' => 'number'));
        echo $this->Form->input('missing_date_of_birth', array('label' => 'Date of Birth', 'placeholder' => 'mm/dd/yyyy', 'maxLength' => 10, 'title' => 'DOB', 'type' => 'date'));
        echo $this->Form->input('missing_phone_number', array('label' => 'Phone', 'placeholder' => 'XXXXXXXXXX', 'maxLength' => 10, 'title' => 'Phone', 'type' => 'text'));
        echo $this->Form->input('missing_facebook_username', array('label' => 'Facebook Account Name', 'maxLength' => 50, 'title' => 'SocialMedia', 'type' => 'text'));
        echo $this->Form->input('missing_twitter_username', array('label' => 'Twitter Account', 'maxLength' => 50, 'title' => 'SocialMedia', 'type' => 'text'));
        echo $this->Form->input('missing_instagram_username', array('label' => 'Instagram Account', 'maxLength' => 50, 'title' => 'SocialMedia', 'type' => 'text'));
        echo $this->Form->input('missing_snapchat_username', array('label' => 'Snapchat Account', 'maxLength' => 50, 'title' => 'SocialMedia', 'type' => 'text'));
        echo $this->Form->input('missing_misc', array('label' => 'Additional Information', 'maxLength' => 2000, 'title' => 'SocialMedia', 'type' => 'text'));
        ?>
    </fieldset>

    <fieldset>
        <legend><?php echo __('Missing Person Last Seen'); ?></legend>
        <?php
        echo $this->Form->input('seen_name', array('label' => 'Name of place last seen', 'maxLength' => 30, 'title' => 'Name', 'type' => 'text'));
        echo $this->Form->input('seen_street', array('label' => 'Street Name', 'maxLength' => 20, 'title' => 'Street', 'type' => 'text'));
        echo $this->Form->input('seen_number', array('label' => 'Address Number', 'maxLength' => 10, 'title' => 'Address', 'type' => 'text'));
        echo $this->Form->input('seen_city', array('label' => 'City', 'maxLength' => 20, 'title' => 'City', 'type' => 'text'));
        echo $this->Form->input('seen_state', array('label' => 'State', 'maxLength' => 2, 'title' => 'State', 'type' => 'text'));
        echo $this->Form->input('seen_zip', array('label' => 'Zip', 'maxLength' => 5, 'title' => 'Zip', 'type' => 'text'));
        echo $this->Form->input('seen_when', array('label' => 'Date of occurance ', 'placeholder' => 'mm/dd/yyyy', 'maxLength' => 10, 'title' => 'Date', 'type' => 'datetime'));
        echo $this->Form->input('seen_notes', array('label' => 'Additional Information', 'maxLength' => 2000, 'title' => 'Description', 'type' => 'text'));
        ?>
    </fieldset>

    <fieldset>
        <legend><?php echo __('Missing Person Family/Friend Information'); ?></legend>
        <?php
        echo $this->Form->input('ff_first_name', array('label' => 'First Name', 'maxLength' => 256, 'title' => 'FirstName', 'type' => 'text'));
        echo $this->Form->input('ff_middle_name', array('label' => 'Middle Name', 'maxLength' => 256, 'title' => 'LastName', 'type' => 'text'));
        echo $this->Form->input('ff_last_name', array('label' => 'Last Name', 'maxLength' => 256, 'title' => 'LastName', 'type' => 'text'));
        echo $this->Form->input('ff_gender', array('label' => 'Gender', 'options' => array('Male' => 'Male','Female' =>'Female')));
        echo $this->Form->input('ff_alias', array('label' => 'Relation to Missing', 'maxLength' => 256, 'title' => 'relation', 'type' => 'text'));
        echo $this->Form->input('ff_ethnicity', array('label' => 'Ethnicity','options' => array('american_indian' => 'Native American','asian' => 'Asian',
        'african_american' => 'African American','hispanic_latino' => 'Hispanic/Latino','middle_eastern' => 'Middle Eastern','pacific_islander' => 'Pacific Islander',
        'white' => 'White','other' => 'Other')));
        echo $this->Form->input('ff_ethnicity_other', array('label' => 'Other', 'maxLength' => 255, 'title' => 'EthinicityOther', 'type' => 'text'));

        echo $this->Form->input('ff_street', array('label' => 'Street', 'maxLength' => 256, 'title' => 'street', 'type' => 'text'));
        echo $this->Form->input('ff_city', array('label' => 'City', 'maxLength' => 256, 'title' => 'city', 'type' => 'text'));
        echo $this->Form->input('ff_state', array('label' => 'State', 'maxLength' => 2, 'title' => 'state', 'type' => 'text'));
        echo $this->Form->input('ff_zip', array('label' => 'Zip', 'maxLength' => 5, 'title' => 'zip', 'type' => 'text'));
        echo $this->Form->input('ff_phone', array('label' => 'Phone', 'placeholder' => 'XXXXXXXXXX', 'maxLength' => 10, 'title' => 'Phone', 'type' => 'text'));
        echo $this->Form->input('ff_email', array('label' => 'Email', 'maxLength' => 256, 'title' => 'Email', 'type' => 'email'));
        ?>
    </fieldset>

    <fieldset>
        <legend><?php echo __('Missing Person Workplace'); ?></legend>
        <?php
        echo $this->Form->input('place_name', array('label' => 'Workplace Name', 'maxLength' => 30, 'title' => 'Workplace Name', 'type' => 'text'));
        echo $this->Form->input('place_street', array('label' => 'Street Name', 'maxLength' => 20, 'title' => 'Street', 'type' => 'text'));
        echo $this->Form->input('place_number', array('label' => 'Address Number', 'maxLength' => 10, 'title' => 'address', 'type' => 'text'));
        echo $this->Form->input('place_city', array('label' => 'City', 'maxLength' => 20, 'title' => 'City', 'type' => 'text'));
        echo $this->Form->input('place_state', array('label' => 'State', 'maxLength' => 2, 'title' => 'State', 'type' => 'text'));
        echo $this->Form->input('place_zip', array('label' => 'Zip', 'maxLength' => 5, 'title' => 'Zip', 'type' => 'text'));
        echo $this->Form->input('workplace_start_date', array('label' => 'Started working: ', 'placeholder' => 'mm/dd/yyyy', 'maxLength' => 10, 'title' => 'Date', 'type' => 'date'));
        echo $this->Form->input('workplace_end_date', array('label' => 'Stopped working: ', 'placeholder' => 'mm/dd/yyyy', 'maxLength' => 10, 'title' => 'Date', 'type' => 'date'));
        echo $this->Form->input('place_misc', array('label' => 'Additional Information', 'maxLength' => 2000, 'title' => 'SocialMedia', 'type' => 'text'));
        echo $this->Form->submit('Submit Report', array('class' => 'form-submit',  'title' => 'Click here to') );
        ?>
    </fieldset>

    <?php echo $this->Form->end(); ?>
</div>
<?php echo $this->Html->link( "Return to Dashboard",   array('action'=>'home') );
?>
</html>
