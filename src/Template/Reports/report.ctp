<!DOCTYPE html>
<html>
<div class="report form">
    <?php echo $this->Form->create('$report', [
	'context' => ['validator' => 'report']
    ]);
    ?>
  </br>
    <fieldset>

    <legend><?php echo __('Missing Person Information'); ?>
      <?php
        if($user->get('role') == 'thepublic') {
          echo $this->Html->link("Return Home", array('controller' => 'users','action'=> 'homeConcernedPublic'), array( 'class' => 'dashboard-button-top button'));
        }elseif($user->get('role') == 'lawenforcement') {
          echo $this->Html->link("Return Home", array('controller' => 'users','action'=> 'homeLawEnforcement'), array( 'class' => 'dashboard-button-top button'));
        }
      ?>
    </legend>
  </br>
      <div id="display-missing" class="container-fluid">
        <div class="row">
            <div class="col-md-4">
              <?php echo $this->Form->input('FirstName', array('label'
               => 'First Name', 'maxLength' => 50,'title' => 'FirstName', 'type' => 'text')); ?>
            </div>
            <div class="col-md-4">
              <?php echo $this->Form->input('MiddleName', array('label'
               => 'Middle Name', 'maxLength' => 50, 'title' => 'MiddleName', 'type' => 'text')); ?>
            </div>
            <div class="col-md-4">
              <?php echo $this->Form->input('LastName', array('label'
               => 'Last Name', 'maxLength' => 50, 'title' => 'LastName', 'type' => 'text')); ?>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <?php echo $this->Form->input('Alias', array('label' => 'Alias',
            'maxLength' => 100, 'title' => 'Alias', 'type' => 'text')); ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <?php
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
                  'title' => 'DoB'
              ]
            ]); ?>
          </div>
        </div>
      </br>
        <div class="row">
          <div class="col-md-4">
            <?php echo $this->Form->hidden('SubmitterEmail', array('label'
             => 'Email Address', 'maxLength' => 100, 'title' => 'Email', 'type' => 'email', 'value' => $user->get('email'))); ?>

            <?php echo $this->Form->input('MissingEmail', array('label'
             => 'Email Address', 'maxLength' => 100, 'title' => 'Email', 'type' => 'email')); ?>
          </div>
          <div class="col-md-4">
            <?php echo $this->Form->input('Phone', array('label'
             => 'Phone', 'placeholder' => '(XXX)XXX-XXXX', 'maxLength' => 10, 'title' => 'Phone', 'type' => 'text')); ?>
          </div>
        </div>
        <div class="row">
            <div class="col-md-4">
              <?php echo $this->Form->input('Gender', array('label' =>
              'Gender', 'options' => array('-' => '-', 'Male' => 'Male','Female' =>'Female','androgynous' => 'Androgynous'))); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
              <?php echo $this->Form->input('Ethnicity', array('id' => 'ME', 'onchange' => 'meOther(this)','label'
               => 'Ethnicity','options' => array('-' => '-', 'american_indian' =>
               'Native American','asian' => 'Asian', 'african_american' =>
               'African American','hispanic_latino' => 'Hispanic/Latino','middle_eastern' =>
               'Middle Eastern','pacific_islander' => 'Pacific Islander',
              'white' => 'White','other' => 'Other'))); ?>
            </div>
            <div class="col-md-4">
              <?php echo $this->Form->input('MissingEthnicityOther', array('id' => 'MEO', 'label'
              => 'Ethnicity Other', 'maxLength' => 255, 'title' => 'EthinicityOther', 'type' => 'text', 'disabled' => 'disabled')); ?>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <?php echo $this->Form->input('EyeColor', array('id' => 'MEC',
            'options' => array('amber' => 'Amber','black' => 'Black','blue' => 'Blue',
            'brown' => 'Brown','green' => 'Green','grey' => 'Grey','hazel' => 'Hazel','other' => 'Other')
          , 'onchange' => 'mecOther(this)'
        )); ?>
          </div>
          <div class="col-md-4">
            <?php echo $this->Form->input( 'MissingEyeColorOther', array('id' => 'MECO','label'
            => 'Eye Color Other', 'maxLength' => 255, 'title' => 'EyeColorOther', 'type' => 'text', 'disabled' => 'disabled')); ?>
          </div>

        </div>
        <div class="row">

            <div class="col-md-4">
              <?php echo $this->Form->input('HairColor', array('id' => 'MHC', 'onchange' => 'mhcOther(this)', 'options'
               => array('auburn' => 'Auburn','black' => 'Black','blonde' => 'Blonde',
               'brown' => 'Brown','grey' => 'Grey','red' => 'Red','white' => 'White','other' => 'Other'))); ?>
            </div>
            <div class="col-md-4">
              <?php echo $this->Form->input('MissingHairColorOther', array('id' => 'MHCO','label'
               => 'Hair Color Other', 'maxLength' => 255, 'title' => 'EyeColorOther', 'type' => 'text', 'disabled' => 'disabled')); ?>
            </div>

        </div>
        <div class="row">
            <div class="col-md-8">
              <?php echo $this->Form->input('MarksTattoos', array('label'
              => 'Marks/Tattoos', 'maxLength' => 256, 'title' => 'marks', 'type' => 'textarea')); ?>
            </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <?php echo $this->Form->input('Weight', array('label'
             => 'Weight (lbs)', 'maxLength' => 20, 'title' => 'weight', 'type' => 'number')); ?>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <?php echo $this->Form->input('HeightFeet', array('label'
             => 'Height (ft)', 'maxLength' => 1, 'title' => 'Feet', 'type' => 'number')); ?>
          </div>
          <div class="col-md-4">
            <?php echo $this->Form->input('HeightInches', array('label'
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
          <div class="col-md-8">
            <?php echo $this->Form->input('ReportMiscInfo', array('label' =>
            'Additional Information', 'maxLength' => 2000, 'title' => 'SocialMedia', 'type' => 'textarea')); ?>
          </div>
        </div>

        <legend><?php echo __('Missing Person Last Seen'); ?></legend>
      </br>
        <div class="row">
            <div class="col-md-4">
              <?php echo $this->Form->input('SeenName', array('label' =>
              'Name of place last seen', 'maxLength' => 30, 'title' => 'Name', 'type' => 'text')); ?>
            </div>
            <div class="col-md-4">
              <?php echo $this->Form->input('SeenStreet', array('label' =>
              'Street Name', 'maxLength' => 20, 'title' => 'Street', 'type' => 'text')); ?>
            </div>
            <div class="col-md-4">
              <?php echo $this->Form->input('SeenNumber', array('label' =>
              'Address Number', 'maxLength' => 10, 'title' => 'Address', 'type' => 'text')); ?>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <?php echo $this->Form->input('SeenCity', array('label' => 'City',
             'maxLength' => 20, 'title' => 'City', 'type' => 'text')); ?>
          </div>
          <div class="col-md-4">
            <?php echo $this->Form->input('SeenState', array('label' => 'State',
             'maxLength' => 2, 'title' => 'State', 'type' => 'text')); ?>
          </div>
          <div class="col-md-4">
            <?php echo $this->Form->input('SeenZip', array('label' => 'Zip',
            'maxLength' => 5, 'title' => 'Zip', 'type' => 'text')); ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <?php
            echo $this->Form->label('Date of Occurrence');
            echo $this->Form->date('SeenWhen', [
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
            ]); ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <?php echo $this->Form->input('SeenNotes', array('label' => 'Additional Information',
             'maxLength' => 2000, 'title' => 'Description', 'type' => 'textarea')); ?>
          </div>
        </div>
        <legend><?php echo __('Missing Person Family/Friend Information'); ?></legend>
      </br>
        <div class="row">
          <div class="col-md-4">
            <?php echo $this->Form->input('FamilyFirstName', array('label' => 'First Name',
             'maxLength' => 256, 'title' => 'FirstName', 'type' => 'text')); ?>
          </div>
          <div class="col-md-4">
            <?php echo $this->Form->input('FamilyMiddleName', array('label' => 'Middle Name',
            'maxLength' => 256, 'title' => 'LastName', 'type' => 'text')); ?>
          </div>
          <div class="col-md-4">
            <?php echo $this->Form->input('FamilyLastName', array('label' => 'Last Name',
             'maxLength' => 256, 'title' => 'LastName', 'type' => 'text')); ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <?php echo $this->Form->input('FamilyPhone', array('label' => 'Phone',
             'placeholder' => '(XXX)XXX-XXXX', 'maxLength' => 10, 'title' => 'Phone', 'type' => 'text')); ?>
          </div>
          <div class="col-md-4">
            <?php echo $this->Form->input('FamilyEmail', array('label' => 'Email',
             'maxLength' => 256, 'title' => 'Email', 'type' => 'email')); ?>
          </div>

        </div>
        <div class="row">
            <div class="col-md-4">
              <?php echo $this->Form->input('FamilyGender', array('label' => 'Gender',
              'options' => array('-' => '-', 'Male' => 'Male','Female' =>'Female'))); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
              <?php echo $this->Form->input('FamilyEthnicity', array('id' => 'FFE', 'onchange' => 'ffeOther(this)','label' => 'Ethnicity','options' => array('-' => '-', 'american_indian' => 'Native American','asian' => 'Asian',
                  'african_american' => 'African American','hispanic_latino' => 'Hispanic/Latino','middle_eastern' => 'Middle Eastern','pacific_islander' => 'Pacific Islander',
                  'white' => 'White','other' => 'Other'))); ?>
            </div>
            <div class="col-md-4">
              <?php echo $this->Form->input('FamilyEthnicityOther', array('id' => 'FFEO', 'label' =>
              'Ethnicity Other', 'maxLength' => 255, 'title' => 'EthinicityOther', 'type' => 'text', 'disabled' => 'disabled')); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
              <?php echo $this->Form->input('Relation', array('id' => 'FFA', 'onchange' => 'ffaOther(this)','label' => 'Relation to Missing', 'options' => array('-' => '-', 'Mother' => 'Mother', 'Father' =>
               'Father', 'Daughter' => 'Daughter', 'Son' => 'Son', 'Sister' => 'Sister','Brother' => 'Brother', 'Aunt' => 'Aunt', 'Uncle' => 'Uncle', 'Niece' =>
               'Niece', 'Nephew' => 'Nephew', 'Cousin' => 'Cousin', 'Friend' => 'Friend', 'Other' => 'Other' ))); ?>
            </div>
            <div class="col-md-4">
              <?php echo $this->Form->input('RelationOther', array('id' => 'FFAO', 'label' =>
              'Relation Other', 'maxLength' => 256, 'title' => 'Relation Other', 'type' => 'text', 'disabled' => 'disabled')); ?>
            </div>
        </div>

        <div class="row">

          <div class="col-md-4">
            <?php echo $this->Form->input('FamilyStreet', array('label' => 'Street',
             'maxLength' => 256, 'title' => 'street', 'type' => 'text')); ?>
          </div>
          <div class="col-md-4">
            <?php echo $this->Form->input('FamilyCity', array('label' => 'City',
            'maxLength' => 256, 'title' => 'city', 'type' => 'text')); ?>
          </div>
        </div>
        <div class="row">

            <div class="col-md-4">
              <?php echo $this->Form->input('FamilyState', array('label' => 'State',
               'maxLength' => 2, 'title' => 'state', 'type' => 'text')); ?>
            </div>
            <div class="col-md-4">
              <?php echo $this->Form->input('FamilyZip', array('label' => 'Zip',
              'maxLength' => 5, 'title' => 'zip', 'type' => 'text')); ?>
            </div>
        </div>



      <legend><?php echo __('Missing Person Hangouts'); ?></legend>
    </br>
        <div class="row">
            <div class="col-md-4">
              <?php echo $this->Form->input('HangoutName', array('label' => 'Hangout Name',
               'maxLength' => 30, 'title' => 'Hangout Name', 'type' => 'text')); ?>
            </div>
            <div class="col-md-4">
              <?php echo $this->Form->input('HangoutStreet', array('label' => 'Street Name',
              'maxLength' => 20, 'title' => 'Street', 'type' => 'text')); ?>
            </div>
            <div class="col-md-4">
              <?php echo $this->Form->input('HangoutNumber', array('label' => 'Address Number',
              'maxLength' => 10, 'title' => 'address', 'type' => 'text')); ?>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <?php echo $this->Form->input('HangoutCity', array('label' => 'City',
             'maxLength' => 20, 'title' => 'City', 'type' => 'text')); ?>
          </div>
          <div class="col-md-4">
            <?php echo $this->Form->input('HangoutState', array('label' => 'State',
             'maxLength' => 2, 'title' => 'State', 'type' => 'text'));?>
          </div>
          <div class="col-md-4">
            <?php echo $this->Form->input('HangoutZip', array('label' => 'Zip',
            'maxLength' => 5, 'title' => 'Zip', 'type' => 'text')); ?>
          </div>
          <div class="col-md-4">
            <?php echo $this->Form->input('HangoutMisc', array('label' =>
             'Additional Information', 'maxLength' => 2000, 'title' => 'SocialMedia', 'type' => 'textarea'));?>
          </div>
        </div>



      <legend><?php echo __('Missing Person Workplace'); ?></legend>
    </br>
        <div class="row">
            <div class="col-md-4">
              <?php echo $this->Form->input('Workplacename', array('label' => 'Workplace Name',
              'maxLength' => 30, 'title' => 'Workplace Name', 'type' => 'text')); ?>
            </div>
            <div class="col-md-4">
             <?php echo $this->Form->input('WorkplaceStreet', array('label' => 'Street Name',
              'maxLength' => 20, 'title' => 'Street', 'type' => 'text')); ?>
            </div>
            <div class="col-md-4">
              <?php echo $this->Form->input('WorkplaceNumber', array('label' => 'Address Number',
               'maxLength' => 10, 'title' => 'address', 'type' => 'text')); ?>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <?php echo $this->Form->input('WorkplaceCity', array('label' => 'City',
            'maxLength' => 20, 'title' => 'City', 'type' => 'text')); ?>
          </div>
          <div class="col-md-4">
            <?php echo $this->Form->input('WorkplaceState', array('label' => 'State',
             'maxLength' => 2, 'title' => 'State', 'type' => 'text')); ?>
          </div>
          <div class="col-md-4">
            <?php echo $this->Form->input('WorkplaceZip', array('label' => 'Zip', 'maxLength'
             => 5, 'title' => 'Zip', 'type' => 'text')); ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <?php
            echo $this->Form->label('Started Working:');
            echo $this->Form->date('WorkplaceStartDate', [
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
            ]); ?>
          </div>
        </div>
      </br>
        <div class="row">
          <div class="col-md-12">
            <?php
            echo $this->Form->label('Stopped Working:');
            echo $this->Form->date('WorkplaceEndDate', [
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
            ]); ?>
          </div>
        </div>
      </br>
        <div class="row">
          <div class="col-md-8">
            <?php echo $this->Form->input('WorkplaceMisc', array('label' => 'Additional Information',
             'maxLength' => 2000, 'title' => 'SocialMedia', 'type' => 'textarea')); ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <?php echo $this->Form->submit('Submit Report', array('class' => 'form-submit submit-report-button',
              'title' => 'Click here to') ); ?>
              <?php
                if($user->get('role') == 'thepublic') {
                  echo $this->Html->link("Return Home", array('controller' => 'users','action'=> 'homeConcernedPublic'), array( 'class' => 'dashboard-button button'));
                }elseif($user->get('role') == 'lawenforcement') {
                  echo $this->Html->link("Return Home", array('controller' => 'users','action'=> 'homeLawEnforcement'), array( 'class' => 'dashboard-button button'));
                }
              ?>
          </div>
        </div>
      </div>
    </fieldset>
    <?php echo $this->Form->end(); ?>
</div>
</html>

<script>
  function meOther() {

    var e = document.getElementById("ME");
    var x = e.options[e.selectedIndex].value;
    if(x == "other"){
      document.getElementById("MEO").disabled = false;

    }
    else {
      document.getElementById("MEO").disabled = true;
    }
  }
</script>

<script>
  function mecOther() {

    var e = document.getElementById("MEC");
    var x = e.options[e.selectedIndex].value;
    if(x == "other"){
      document.getElementById("MECO").disabled = false;

    }
    else {
      document.getElementById("MECO").disabled = true;
    }
  }
</script>

<script>
  function mhcOther() {

    var e = document.getElementById("MHC");
    var x = e.options[e.selectedIndex].value;
    if(x == "other"){
      document.getElementById("MHCO").disabled = false;

    }
    else {
      document.getElementById("MHCO").disabled = true;
    }
  }
</script>

<script>
  function ffeOther() {

    var e = document.getElementById("FFE");
    var x = e.options[e.selectedIndex].value;
    if(x == "other"){
      document.getElementById("FFEO").disabled = false;

    }
    else {
      document.getElementById("FFEO").disabled = true;
    }
  }
</script>

<script>
  function ffaOther() {

    var e = document.getElementById("FFA");
    var x = e.options[e.selectedIndex].value;
    if(x == "Other"){
      document.getElementById("FFAO").disabled = false;

    }
    else {
      document.getElementById("FFAO").disabled = true;
    }
  }
</script>
