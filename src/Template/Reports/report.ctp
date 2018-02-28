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
        echo $this->Form->input('FirstName', array('label' => 'First Name', 'maxLength' => 50, 'title' => 'FirstName', 'type' => 'text'));
        echo $this->Form->input('MiddleName', array('label' => 'Middle Name', 'maxLength' => 50, 'title' => 'MiddleName', 'type' => 'text'));
        echo $this->Form->input('LastName', array('label' => 'Last Name', 'maxLength' => 50, 'title' => 'LastName', 'type' => 'text'));
        echo $this->Form->input('Alias', array('label' => 'Alias', 'maxLength' => 100, 'title' => 'Alias', 'type' => 'text'));
        echo $this->Form->input('EmailAddress', array('label' => 'Email Address', 'maxLength' => 100, 'title' => 'Email', 'type' => 'email'));
        echo $this->Form->input('Gender', array('options' => array('Male' => 'Male','Female' =>'Female','androgynous' => 'Androgynous')));
        echo $this->Form->input('Ethnicity', array('options' => array('american_indian' => 'Native American','asian' => 'Asian',
        'african_american' => 'African American','hispanic_latino' => 'Hispanic/Latino','middle_eastern' => 'Middle Eastern','pacific_islander' => 'Pacific Islander',
        'white' => 'White','other' => 'Other')));
        echo $this->Form->input('EthinicityOther', array('label' => 'Other', 'maxLength' => 255, 'title' => 'EthinicityOther', 'type' => 'text'));
        echo $this->Form->input('EyeColor', array('options' => array('amber' => 'Amber','black' => 'Black','blue' => 'Blue','brown' => 'Brown','green' => 'Green',
        'grey' => 'Grey','hazel' => 'Hazel','other' => 'Other')));
        echo $this->Form->input('EyeColorOther', array('label' => 'Other', 'maxLength' => 255, 'title' => 'EyeColorOther', 'type' => 'text'));
        echo $this->Form->input('HairColor', array('options' => array('auburn' => 'Auburn','black' => 'Black','blonde' => 'Blonde','brown' => 'Brown','grey' => 'Grey',
        'red' => 'Red','white' => 'White','other' => 'Other')));
        echo $this->Form->input('HairColorOther', array('label' => 'Other', 'maxLength' => 255, 'title' => 'EyeColorOther', 'type' => 'text'));
        echo $this->Form->input('MarksTattoos', array('label' => 'Marks/Tattoos', 'maxLength' => 256, 'title' => 'marks', 'type' => 'text'));
        echo $this->Form->input('Weight', array('label' => 'Weight', 'maxLength' => 20, 'title' => 'weight', 'type' => 'number'));
        echo $this->Form->input('Height', array('label' => 'Height', 'maxLength' => 20, 'title' => 'height', 'type' => 'number'));
        echo $this->Form->input('DoB', array('label' => 'Date of Birth', 'placeholder' => 'mm/dd/yyyy', 'maxLength' => 10, 'title' => 'DOB', 'type' => 'date'));
        echo $this->Form->input('Phone', array('label' => 'Phone', 'placeholder' => 'XXXXXXXXXX', 'maxLength' => 10, 'title' => 'Phone', 'type' => 'text'));
        echo $this->Form->input('SocialMediaAccount', array('label' => 'Social Media Accounts', 'maxLength' => 50, 'title' => 'SocialMedia', 'type' => 'text'));
        echo $this->Form->input('ReportMiscInfo', array('label' => 'Additional Information', 'maxLength' => 2000, 'title' => 'SocialMedia', 'type' => 'text'));
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
