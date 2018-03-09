<!DOCTYPE html>
<html>
<div class="report form">
    <?php echo $this->Form->create('$report', [
	'context' => ['validator' => 'report']
    ]);
    ?>
    <fieldset>

    <legend><?php echo __('Missing Person Information'); ?></legend>

      <div id="display-missing" class="container-fluid">
        <div class="row">
            <div class="col-md-4">
              <?php echo $this->Form->input('missing_first_name', array('label'
               => 'First Name', 'maxLength' => 50,'title' => 'FirstName', 'type' => 'text')); ?>
            </div>
            <div class="col-md-4">
              <?php echo $this->Form->input('missing_middle_name', array('label'
               => 'Middle Name', 'maxLength' => 50, 'title' => 'MiddleName', 'type' => 'text')); ?>
            </div>
            <div class="col-md-4">
              <?php echo $this->Form->input('missing_last_name', array('label'
               => 'Last Name', 'maxLength' => 50, 'title' => 'LastName', 'type' => 'text')); ?>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <?php echo $this->Form->input('missing_alias', array('label' => 'Alias',
            'maxLength' => 100, 'title' => 'Alias', 'type' => 'text')); ?>
          </div>
        </div>

        <div class="row">

            <div class="col-md-3">
              <?php echo $this->Form->input('missing_date_of_birth', array('label'
               => 'Date of Birth', 'placeholder' => 'mm/dd/yyyy', 'maxLength' => 10, 'title' => 'DOB', 'type' => 'date')); ?>
            </div>

        </div>

        <div class="row">
          <div class="col-md-4">
            <?php echo $this->Form->input('missing_email_address', array('label'
             => 'Email Address', 'maxLength' => 100, 'title' => 'Email', 'type' => 'email')); ?>
          </div>
          <div class="col-md-4">
            <?php echo $this->Form->input('missing_phone_number', array('label'
             => 'Phone', 'placeholder' => '(XXX)XXX-XXXX', 'maxLength' => 10, 'title' => 'Phone', 'type' => 'text')); ?>
          </div>
        </div>
        <div class="row">
            <div class="col-md-4">
              <?php echo $this->Form->input('missing_gender', array('label' =>
              'Gender', 'options' => array('-' => '-', 'Male' => 'Male','Female' =>'Female','androgynous' => 'Androgynous'))); ?>
            </div>
            <div class="col-md-4">
              <?php echo $this->Form->input('missing_ethnicity', array('label'
               => 'Ethnicity','options' => array('-' => '-', 'american_indian' =>
               'Native American','asian' => 'Asian', 'african_american' =>
               'African American','hispanic_latino' => 'Hispanic/Latino','middle_eastern' =>
               'Middle Eastern','pacific_islander' => 'Pacific Islander',
              'white' => 'White','other' => 'Other'))); ?>
            </div>
            <div class="col-md-4">
              <?php echo $this->Form->input('missing_ethnicity_other', array('label'
              => 'Ethnicity Other', 'maxLength' => 255, 'title' => 'EthinicityOther', 'type' => 'text')); ?>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <?php echo $this->Form->input('missing_eye_color', array('id' => 'ecDD',
            'options' => array('amber' => 'Amber','black' => 'Black','blue' => 'Blue',
            'brown' => 'Brown','green' => 'Green','grey' => 'Grey','hazel' => 'Hazel','other' => 'Other')
          , 'onchange' => 'other(this)')); ?>
          </div>
          <div class="col-md-4">
            <?php echo $this->Form->input( 'missing_eye_color_other', array('id' => 'ecO','label'
            => 'Eye Color Other', 'maxLength' => 255, 'title' => 'EyeColorOther', 'type' => 'text')); ?>
          </div>

        </div>
        <div class="row">

            <div class="col-md-4">
              <?php echo $this->Form->input('missing_hair_color', array('options'
               => array('auburn' => 'Auburn','black' => 'Black','blonde' => 'Blonde',
               'brown' => 'Brown','grey' => 'Grey','red' => 'Red','white' => 'White','other' => 'Other'))); ?>
            </div>
            <div class="col-md-4">
              <?php echo $this->Form->input('missing_hair_color_other', array('label'
               => 'Hair Color Other', 'maxLength' => 255, 'title' => 'EyeColorOther', 'type' => 'text')); ?>
            </div>

        </div>
        <div class="row">
            <div class="col-md-4">
              <?php echo $this->Form->input('missing_markings', array('label'
              => 'Marks/Tattoos', 'maxLength' => 256, 'title' => 'marks', 'type' => 'textarea')); ?>
            </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <?php echo $this->Form->input('missing_weight_pounds', array('label'
             => 'Weight (lbs)', 'maxLength' => 20, 'title' => 'weight', 'type' => 'number')); ?>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <?php echo $this->Form->input('missing_height_feet', array('label'
             => 'Height (ft)', 'maxLength' => 1, 'title' => 'Feet', 'type' => 'number')); ?>
          </div>
          <div class="col-md-4">
            <?php echo $this->Form->input('missing_height_inches', array('label'
             => 'Height (in)', 'maxLength' => 20, 'title' => 'Inches', 'type' => 'number')); ?>
          </div>

        </div>


        <div class="row">
            <div class="col-md-4">
              <?php echo $this->Form->input('missing_facebook_username', array('label'
               => 'Facebook Account Name', 'maxLength' => 50, 'title' => 'SocialMedia', 'type' => 'text')); ?>
            </div>
            <div class="col-md-4">
              <?php echo $this->Form->input('missing_twitter_username', array('label'
               => 'Twitter Account', 'maxLength' => 50, 'title' => 'SocialMedia', 'type' => 'text')); ?>
            </div>

        </div>
        <div class="row">
          <div class="col-md-4">
            <?php echo $this->Form->input('missing_snapchat_username', array('label'
             => 'Snapchat Account', 'maxLength' => 50, 'title' => 'SocialMedia', 'type' => 'text')); ?>
          </div>
          <div class="col-md-4">
            <?php echo $this->Form->input('missing_instagram_username', array('label'
             => 'Instagram Account', 'maxLength' => 50, 'title' => 'SocialMedia', 'type' => 'text')); ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <?php echo $this->Form->input('missing_misc', array('label' =>
            'Additional Information', 'maxLength' => 2000, 'title' => 'SocialMedia', 'type' => 'textarea')); ?>
          </div>
        </div>

        <legend><?php echo __('Missing Person Last Seen'); ?></legend>


        <div class="row">
            <div class="col-md-4">
              <?php echo $this->Form->input('seen_name', array('label' =>
              'Name of place last seen', 'maxLength' => 30, 'title' => 'Name', 'type' => 'text')); ?>
            </div>
            <div class="col-md-4">
              <?php echo $this->Form->input('seen_street', array('label' =>
              'Street Name', 'maxLength' => 20, 'title' => 'Street', 'type' => 'text')); ?>
            </div>
            <div class="col-md-4">
              <?php echo $this->Form->input('seen_number', array('label' =>
              'Address Number', 'maxLength' => 10, 'title' => 'Address', 'type' => 'text')); ?>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <?php echo $this->Form->input('seen_city', array('label' => 'City',
             'maxLength' => 20, 'title' => 'City', 'type' => 'text')); ?>
          </div>
          <div class="col-md-4">
            <?php echo $this->Form->input('seen_state', array('label' => 'State',
             'maxLength' => 2, 'title' => 'State', 'type' => 'text')); ?>
          </div>
          <div class="col-md-4">
            <?php echo $this->Form->input('seen_zip', array('label' => 'Zip',
            'maxLength' => 5, 'title' => 'Zip', 'type' => 'text')); ?>
          </div>
        </div>
        <div class="row">
            <div class="col-md-6">
              <?php echo $this->Form->input('seen_when', array('label' => 'Date of occurance ',
              'placeholder' => 'mm/dd/yyyy', 'maxLength' => 10, 'title' => 'Date', 'type' => 'datetime')); ?>
            </div>

        </div>
        <div class="row">
          <div class="col-md-4">
            <?php echo $this->Form->input('seen_notes', array('label' => 'Additional Information',
             'maxLength' => 2000, 'title' => 'Description', 'type' => 'textarea')); ?>
          </div>
        </div>



        <legend><?php echo __('Missing Person Family/Friend Information'); ?></legend>

        <div class="row">
          <div class="col-md-4">
            <?php echo $this->Form->input('ff_first_name', array('label' => 'First Name',
             'maxLength' => 256, 'title' => 'FirstName', 'type' => 'text')); ?>
          </div>
          <div class="col-md-4">
            <?php echo $this->Form->input('ff_middle_name', array('label' => 'Middle Name',
            'maxLength' => 256, 'title' => 'LastName', 'type' => 'text')); ?>
          </div>
          <div class="col-md-4">
            <?php echo $this->Form->input('ff_last_name', array('label' => 'Last Name',
             'maxLength' => 256, 'title' => 'LastName', 'type' => 'text')); ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <?php echo $this->Form->input('ff_phone', array('label' => 'Phone',
             'placeholder' => '(XXX)XXX-XXXX', 'maxLength' => 10, 'title' => 'Phone', 'type' => 'text')); ?>
          </div>
          <div class="col-md-4">
            <?php echo $this->Form->input('ff_email', array('label' => 'Email',
             'maxLength' => 256, 'title' => 'Email', 'type' => 'email')); ?>
          </div>

        </div>
        <div class="row">
            <div class="col-md-4">
              <?php echo $this->Form->input('ff_gender', array('label' => 'Gender',
              'options' => array('-' => '-', 'Male' => 'Male','Female' =>'Female'))); ?>
            </div>
            <div class="col-md-4">
              <?php echo $this->Form->input('ff_ethnicity', array('label' => 'Ethnicity','options' => array('-' => '-', 'american_indian' => 'Native American','asian' => 'Asian',
                  'african_american' => 'African American','hispanic_latino' => 'Hispanic/Latino','middle_eastern' => 'Middle Eastern','pacific_islander' => 'Pacific Islander',
                  'white' => 'White','other' => 'Other'))); ?>
            </div>
            <div class="col-md-4">
              <?php echo $this->Form->input('ff_ethnicity_other', array('label' =>
              'Ethnicity Other', 'maxLength' => 255, 'title' => 'EthinicityOther', 'type' => 'text')); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
              <?php echo $this->Form->input('ff_relation', array('label' => 'Relation to Missing', 'options' => array('-' => '-', 'Mother' => 'Mother', 'Father' =>
               'Father', 'Daughter' => 'Daughter', 'Son' => 'Son', 'Sister' => 'Sister','Brother' => 'Brother', 'Aunt' => 'Aunt', 'Uncle' => 'Uncle', 'Niece' =>
               'Niece', 'Nephew' => 'Nephew', 'Cousin' => 'Cousin', 'Friend' => 'Friend', 'Other' => 'Other' ))); ?>
            </div>
            <div class="col-md-4">
              <?php echo $this->Form->input('ff_relation_other', array('label' =>
              'Relation Other', 'maxLength' => 256, 'title' => 'Relation Other', 'type' => 'text')); ?>
            </div>
        </div>

        <div class="row">

          <div class="col-md-4">
            <?php echo $this->Form->input('ff_street', array('label' => 'Street',
             'maxLength' => 256, 'title' => 'street', 'type' => 'text')); ?>
          </div>
          <div class="col-md-4">
            <?php echo $this->Form->input('ff_city', array('label' => 'City',
            'maxLength' => 256, 'title' => 'city', 'type' => 'text')); ?>
          </div>
        </div>
        <div class="row">

            <div class="col-md-4">
              <?php echo $this->Form->input('ff_state', array('label' => 'State',
               'maxLength' => 2, 'title' => 'state', 'type' => 'text')); ?>
            </div>
            <div class="col-md-4">
              <?php echo $this->Form->input('ff_zip', array('label' => 'Zip',
              'maxLength' => 5, 'title' => 'zip', 'type' => 'text')); ?>
            </div>
        </div>



      <legend><?php echo __('Missing Person Hangouts'); ?></legend>

        <div class="row">
            <div class="col-md-4">
              <?php echo $this->Form->input('hangout_name', array('label' => 'Hangout Name',
               'maxLength' => 30, 'title' => 'Hangout Name', 'type' => 'text')); ?>
            </div>
            <div class="col-md-4">
              <?php echo $this->Form->input('hangout_street', array('label' => 'Street Name',
              'maxLength' => 20, 'title' => 'Street', 'type' => 'text')); ?>
            </div>
            <div class="col-md-4">
              <?php echo $this->Form->input('hangout_number', array('label' => 'Address Number',
              'maxLength' => 10, 'title' => 'address', 'type' => 'text')); ?>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <?php echo $this->Form->input('hangout_city', array('label' => 'City',
             'maxLength' => 20, 'title' => 'City', 'type' => 'text')); ?>
          </div>
          <div class="col-md-4">
            <?php echo $this->Form->input('hangout_state', array('label' => 'State',
             'maxLength' => 2, 'title' => 'State', 'type' => 'text'));?>
          </div>
          <div class="col-md-4">
            <?php echo $this->Form->input('hangout_zip', array('label' => 'Zip',
            'maxLength' => 5, 'title' => 'Zip', 'type' => 'text')); ?>
          </div>
          <div class="col-md-4">
            <?php echo $this->Form->input('hangout_misc', array('label' =>
             'Additional Information', 'maxLength' => 2000, 'title' => 'SocialMedia', 'type' => 'textarea'));?>
          </div>
        </div>



      <legend><?php echo __('Missing Person Workplace'); ?></legend>

        <div class="row">
            <div class="col-md-4">
              <?php echo $this->Form->input('place_name', array('label' => 'Workplace Name',
              'maxLength' => 30, 'title' => 'Workplace Name', 'type' => 'text')); ?>
            </div>
            <div class="col-md-4">
             <?php echo $this->Form->input('place_street', array('label' => 'Street Name',
              'maxLength' => 20, 'title' => 'Street', 'type' => 'text')); ?>
            </div>
            <div class="col-md-4">
              <?php echo $this->Form->input('place_number', array('label' => 'Address Number',
               'maxLength' => 10, 'title' => 'address', 'type' => 'text')); ?>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <?php echo $this->Form->input('place_city', array('label' => 'City',
            'maxLength' => 20, 'title' => 'City', 'type' => 'text')); ?>
          </div>
          <div class="col-md-4">
            <?php echo $this->Form->input('place_state', array('label' => 'State',
             'maxLength' => 2, 'title' => 'State', 'type' => 'text')); ?>
          </div>
          <div class="col-md-4">
            <?php echo $this->Form->input('place_zip', array('label' => 'Zip', 'maxLength'
             => 5, 'title' => 'Zip', 'type' => 'text')); ?>
          </div>
        </div>


        <div class="row">
            <div class="col-md-3">
              <?php echo $this->Form->input('workplace_start_date', array('label'
              => 'Started working: ', 'placeholder' => 'mm/dd/yyyy', 'maxLength' => 10, 'title' => 'Date', 'type' => 'date')); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
              <?php echo $this->Form->input('workplace_end_date', array('label'
              => 'Stopped working: ', 'placeholder' => 'mm/dd/yyyy', 'maxLength' => 10, 'title' => 'Date', 'type' => 'date')); ?>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <?php echo $this->Form->input('workplace_misc', array('label' => 'Additional Information',
             'maxLength' => 2000, 'title' => 'SocialMedia', 'type' => 'textarea')); ?>
          </div>
        </div>


        <div class="row">
          <div class="col-md-4">
            <?php echo $this->Form->submit('Submit Report', array('class' => 'form-submit',
              'title' => 'Click here to') ); ?>
          </div>
        </div>
      </div>

    </fieldset>

    <?php echo $this->Form->end(); ?>
</div>
<?php echo $this->Html->link( "Return to Dashboard",   array('action'=>'home') );
?>
</html>

<script>
function other() {
  var x = document.getElementById("ecDD").selectedIndex;
  if(x != "Other"){
    document.getElementById("ecO").disabled = false;

  }
  else if( x == "Other"){
    document.getElementById("ecO").disabled = true;
  }
}
</script>
