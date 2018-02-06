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
        echo $this->Form->input('FirstName', array('label' => 'First Name', 'maxLength' => 30, 'title' => 'FirstName', 'type' => 'text'));
        echo $this->Form->input('LastName', array('label' => 'Last Name', 'maxLength' => 30, 'title' => 'LastName', 'type' => 'text'));
        echo $this->Form->input('Gender', array('label' => 'Gender', 'maxLength' => 20, 'title' => 'Gender', 'type' => 'text'));
        echo $this->Form->input('Ethnicity', array('label' => 'Ethnicity', 'maxLength' => 20, 'title' => 'Ethnicity', 'type' => 'text'));
        echo $this->Form->input('EyeColor', array('label' => 'Eye Color', 'maxLength' => 20, 'title' => 'EyeColor', 'type' => 'text'));
        echo $this->Form->input('HairColor', array('label' => 'Hair Color', 'maxLength' => 20, 'title' => 'HairColor', 'type' => 'text'));
        echo $this->Form->input('MarksTattoos', array('label' => 'Marks/Tattoos', 'maxLength' => 20, 'title' => 'marks', 'type' => 'text'));
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
        echo $this->Form->input('FamilyFirstName', array('label' => 'First Name', 'maxLength' => 30, 'title' => 'FirstName', 'type' => 'text'));
        echo $this->Form->input('FamilyLastName', array('label' => 'Last Name', 'maxLength' => 30, 'title' => 'LastName', 'type' => 'text'));
        echo $this->Form->input('FamilyGender', array('label' => 'Gender', 'maxLength' => 20, 'title' => 'Gender', 'type' => 'text'));
        echo $this->Form->input('Relation', array('label' => 'Relation to Missing', 'maxLength' => 20, 'title' => 'relation', 'type' => 'text'));
        echo $this->Form->input('FamilyStreet', array('label' => 'Street', 'maxLength' => 20, 'title' => 'street', 'type' => 'text'));
        echo $this->Form->input('FamilyCity', array('label' => 'City', 'maxLength' => 20, 'title' => 'city', 'type' => 'text'));
        echo $this->Form->input('FamilyState', array('label' => 'state', 'maxLength' => 20, 'title' => 'state', 'type' => 'text'));
        echo $this->Form->input('FamilyZip', array('label' => 'zip', 'maxLength' => 20, 'title' => 'zip', 'type' => 'text'));
        echo $this->Form->input('FamilyPhone', array('label' => 'Phone', 'placeholder' => 'XXXXXXXXXX', 'maxLength' => 10, 'title' => 'Phone', 'type' => 'text'));
        echo $this->Form->input('FamilyEmail', array('label' => 'Email', 'maxLength' => 20, 'title' => 'Email', 'type' => 'email'));
        ?>
    </fieldset>
    <fieldset>
        <legend><?php echo __('Missing Person Workplace/Hangouts'); ?></legend>
        <?php
        echo $this->Form->input('PlaceName', array('label' => 'Workplace Name', 'maxLength' => 30, 'title' => 'WorkplaceName', 'type' => 'text'));
        echo $this->Form->input('PlaceStreet', array('label' => 'Street', 'maxLength' => 20, 'title' => 'street', 'type' => 'text'));
        echo $this->Form->input('Place', array('label' => 'City', 'maxLength' => 20, 'title' => 'city', 'type' => 'text'));
        echo $this->Form->input('PlaceState', array('label' => 'state', 'maxLength' => 20, 'title' => 'state', 'type' => 'text'));
        echo $this->Form->input('PlaceZip', array('label' => 'zip', 'maxLength' => 20, 'title' => 'zip', 'type' => 'text'));
        echo $this->Form->input('PlaceMiscInfo', array('label' => 'Additional Information', 'maxLength' => 2000, 'title' => 'SocialMedia', 'type' => 'text'));
        echo $this->Form->submit('Submit Report', array('class' => 'form-submit',  'title' => 'Click here to') );
        ?>
    </fieldset>
    <?php echo $this->Form->end(); ?>
</div>
<?php echo $this->Html->link( "Return to Dashboard",   array('action'=>'home') );
?>
</html>