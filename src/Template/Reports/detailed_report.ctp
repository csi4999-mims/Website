<!DOCTYPE html>
<html>
<head>

</head>
<body>
<div class="page-header">
    <h1 class="welcome-banner"> Detailed Report </h1>
</div>
<div class="users form">
    <?php echo $this->Form->create('$user', [
	'context' => ['validator' => 'edit']
    ]); ?>
    <fieldset>
      <div id="display-missing" class="container-fluid">
              <div class="row photo-row">
                <div class="col-md-6">
                    <?php echo $this->Html->image('usericon2.png', ['alt' => 'Image of missing person', 'class' => 'photos-missing']); ?>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-12">
                      <?php
                      echo $this->Html->link("Return Home", array('controller' => 'users','action'=> 'homeLawEnforcement'), array( 'class' => 'return-home-button btn button'));
                      ?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <?php
                      echo $this->Form->submit('Update Case', array('class' => 'form-submit btn button update-button',  'title' => 'Click here to update the user account') );
                      ?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <!-- Comment Button -->
                      <?php echo $this->Html->link("Comment", array('controller' => 'comments','action'=> 'commentModal', $report->Report_ID), array( 'class' => 'comment-button btn button')) ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <legend><?php echo __('Missing Person Information'); ?></legend>
              </br>
                  <div id="display-missing" class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                          <?php echo $this->Form->input('editFirstName', array('value' => $report->get('FirstName'), 'label'
                           => 'First Name', 'maxLength' => 50,'title' => 'FirstName', 'type' => 'text')); ?>
                        </div>
                        <div class="col-md-4">
                          <?php echo $this->Form->input('editMiddleName', array('value' => $report->get('MiddleName'),'label'
                           => 'Middle Name', 'maxLength' => 50, 'title' => 'MiddleName', 'type' => 'text')); ?>
                        </div>
                        <div class="col-md-4">
                          <?php echo $this->Form->input('editLastName', array('value' => $report->get('LastName'),'label'
                           => 'Last Name', 'maxLength' => 50, 'title' => 'LastName', 'type' => 'text')); ?>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <?php echo $this->Form->input('editAlias', array('value' => $report->get('Alias'),'label' => 'Alias',
                        'maxLength' => 100, 'title' => 'Alias', 'type' => 'text')); ?>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-4">
                        <?php echo $this->Form->input('editCategory', array('id' => 'editCategory', 'value' => $report->get('category'), 'label'
                               => 'Edit Category','options' => array('None' => 'none', 'runaway' =>
                               'Runaway','romeo_juliet' => 'Romeo and Juliet', 'substance_abuser' =>
                               'Substance Abuser','human_trafficking' => 'Human Trafficking'))); ?>
                      </div>
                    </div>
                    <?php
                    echo $this->Form->label('Date of Birth');
                    echo $this->Form->date('editDoB', [
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




                    <div class="row">
                      <div class="col-md-4">
                        <?php echo $this->Form->input('editSubmitterEmail', array('value' => $report->get('SubmitterEmail'),'label'
                         => 'Email Address', 'maxLength' => 100, 'title' => 'Email', 'type' => 'email')); ?>
                      </div>
                      <div class="col-md-4">
                        <?php echo $this->Form->input('editPhone', array('value' => $report->get('Phone'),'label'
                         => 'Phone', 'placeholder' => '(XXX)XXX-XXXX', 'maxLength' => 10, 'title' => 'Phone', 'type' => 'text')); ?>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                          <?php echo $this->Form->input('editGender', array('value' => $report->get('Gender'),'label' =>
                          'Gender', 'options' => array('-' => '-', 'Male' => 'Male','Female' =>'Female','androgynous' => 'Androgynous'))); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                          <?php echo $this->Form->input('editEthnicity', array('value' => $report->get('Ethnicity'),'id' => 'ME', 'onchange' => 'meOther(this)','label'
                           => 'Ethnicity','options' => array('-' => '-', 'american_indian' =>
                           'Native American','asian' => 'Asian', 'african_american' =>
                           'African American','hispanic_latino' => 'Hispanic/Latino','middle_eastern' =>
                           'Middle Eastern','pacific_islander' => 'Pacific Islander',
                          'white' => 'White','other' => 'Other'))); ?>
                        </div>
                        <div class="col-md-4">
                          <?php echo $this->Form->input('editMissingEthnicityOther', array('value' => $report->get('MissingEthnicityOther'),'id' => 'MEO', 'label'
                          => 'Ethnicity Other', 'maxLength' => 255, 'title' => 'EthinicityOther', 'type' => 'text')); ?>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <?php echo $this->Form->input('editEyeColor', array('value' => $report->get('EyeColor'),'id' => 'MEC',
                        'options' => array('amber' => 'Amber','black' => 'Black','blue' => 'Blue',
                        'brown' => 'Brown','green' => 'Green','grey' => 'Grey','hazel' => 'Hazel','other' => 'Other')
                      , 'onchange' => 'mecOther(this)'
                    )); ?>
                      </div>
                      <div class="col-md-4">
                        <?php echo $this->Form->input( 'editMissingEyeColorOther', array('value' => $report->get('MissingEyeColorOther'),'id' => 'MECO','label'
                        => 'Eye Color Other', 'maxLength' => 255, 'title' => 'EyeColorOther', 'type' => 'text')); ?>
                      </div>

                    </div>
                    <div class="row">

                        <div class="col-md-4">
                          <?php echo $this->Form->input('editHairColor', array('value' => $report->get('HairColor'),'id' => 'MHC', 'onchange' => 'mhcOther(this)', 'options'
                           => array('auburn' => 'Auburn','black' => 'Black','blonde' => 'Blonde',
                           'brown' => 'Brown','grey' => 'Grey','red' => 'Red','white' => 'White','other' => 'Other'))); ?>
                        </div>
                        <div class="col-md-4">
                          <?php echo $this->Form->input('editMissingHairColorOther', array('value' => $report->get('MissingHairColorOther'),'id' => 'MHCO','label'
                           => 'Hair Color Other', 'maxLength' => 255, 'title' => 'EyeColorOther', 'type' => 'text')); ?>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-8">
                          <?php echo $this->Form->input('editMarksTattoos', array('value' => $report->get('MarksTattoos'),'label'
                          => 'Marks/Tattoos', 'maxLength' => 256, 'title' => 'marks', 'type' => 'textarea')); ?>
                        </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <?php echo $this->Form->input('editWeight', array('value' => $report->get('Weight'),'label'
                         => 'Weight (lbs)', 'maxLength' => 20, 'title' => 'weight', 'type' => 'number')); ?>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <?php echo $this->Form->input('editHeightFeet', array('value' => $report->get('HeightFeet'),'label'
                         => 'Height (ft)', 'maxLength' => 1, 'title' => 'Feet', 'type' => 'number')); ?>
                      </div>
                      <div class="col-md-4">
                        <?php echo $this->Form->input('editHeightInches', array('value' => $report->get('HeightInches'),'label'
                         => 'Height (in)', 'maxLength' => 20, 'title' => 'Inches', 'type' => 'number')); ?>
                      </div>

                    </div>


                    <div class="row">
                        <div class="col-md-4">
                          <?php echo $this->Form->input('edit_missing_facebook_username', array('value' => $report->get('missing_facebook_username'),'label'
                           => 'Facebook Account Name', 'maxLength' => 50, 'title' => 'SocialMedia', 'type' => 'text')); ?>
                        </div>
                        <div class="col-md-4">
                          <?php echo $this->Form->input('edit_missing_twitter_username', array('value' => $report->get('missing_twitter_username'),'label'
                           => 'Twitter Account', 'maxLength' => 50, 'title' => 'SocialMedia', 'type' => 'text')); ?>
                        </div>

                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <?php echo $this->Form->input('edit_missing_snapchat_username', array('value' => $report->get('missing_snapchat_username'),'label'
                         => 'Snapchat Account', 'maxLength' => 50, 'title' => 'SocialMedia', 'type' => 'text')); ?>
                      </div>
                      <div class="col-md-4">
                        <?php echo $this->Form->input('edit_missing_instagram_username', array('value' => $report->get('missing_instagram_username'),'label'
                         => 'Instagram Account', 'maxLength' => 50, 'title' => 'SocialMedia', 'type' => 'text')); ?>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-8">
                        <?php echo $this->Form->input('editReportMiscInfo', array('value' => $report->get('ReportMiscInfo'),'label' =>
                        'Additional Information', 'maxLength' => 2000, 'title' => 'SocialMedia', 'type' => 'textarea')); ?>
                      </div>
                    </div>

                    <legend><?php echo __('Missing Person Last Seen'); ?></legend>
                  </br>
                    <div class="row">
                        <div class="col-md-4">
                          <?php echo $this->Form->input('editSeenName', array('value' => $report->get('SeenName'),'label' =>
                          'Name of place last seen', 'maxLength' => 30, 'title' => 'Name', 'type' => 'text')); ?>
                        </div>
                        <div class="col-md-4">
                          <?php echo $this->Form->input('editSeenStreet', array('value' => $report->get('SeenStreet'),'label' =>
                          'Street Name', 'maxLength' => 20, 'title' => 'Street', 'type' => 'text')); ?>
                        </div>
                        <div class="col-md-4">
                          <?php echo $this->Form->input('editSeenNumber', array('value' => $report->get('SeenNumber'),'label' =>
                          'Address Number', 'maxLength' => 10, 'title' => 'Address', 'type' => 'text')); ?>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <?php echo $this->Form->input('editSeenCity', array('value' => $report->get('SeenCity'),'label' => 'City',
                         'maxLength' => 20, 'title' => 'City', 'type' => 'text')); ?>
                      </div>
                      <div class="col-md-4">
                        <?php echo $this->Form->input('editSeenState', array('value' => $report->get('SeenState'),'label' => 'State',
                         'maxLength' => 2, 'title' => 'State', 'type' => 'text')); ?>
                      </div>
                      <div class="col-md-4">
                        <?php echo $this->Form->input('editSeenZip', array('value' => $report->get('SeenZip'),'label' => 'Zip',
                        'maxLength' => 5, 'title' => 'Zip', 'type' => 'text')); ?>
                      </div>
                    </div>


                            <?php
                            echo $this->Form->label('Date of Occurance');
                            echo $this->Form->date('editSeenWhen', [
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

                    <div class="row">
                      <div class="col-md-8">
                        <?php echo $this->Form->input('editSeenNotes', array('value' => $report->get('SeenNotes'),'label' => 'Additional Information',
                         'maxLength' => 2000, 'title' => 'Description', 'type' => 'textarea')); ?>
                      </div>
                    </div>



                    <legend><?php echo __('Missing Person Family/Friend Information'); ?></legend>
                  </br>
                    <div class="row">
                      <div class="col-md-4">
                        <?php echo $this->Form->input('editFamilyFirstName', array('value' => $report->get('FamilyFirstName'),'label' => 'First Name',
                         'maxLength' => 256, 'title' => 'FirstName', 'type' => 'text')); ?>
                      </div>
                      <div class="col-md-4">
                        <?php echo $this->Form->input('editFamilyMiddleName', array('value' => $report->get('FamilyMiddleName'),'label' => 'Middle Name',
                        'maxLength' => 256, 'title' => 'LastName', 'type' => 'text')); ?>
                      </div>
                      <div class="col-md-4">
                        <?php echo $this->Form->input('editFamilyLastName', array('value' => $report->get('FamilyLastName'),'label' => 'Last Name',
                         'maxLength' => 256, 'title' => 'LastName', 'type' => 'text')); ?>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <?php echo $this->Form->input('editFamilyPhone', array('value' => $report->get('FamilyPhone'),'label' => 'Phone',
                         'placeholder' => '(XXX)XXX-XXXX', 'maxLength' => 10, 'title' => 'Phone', 'type' => 'text')); ?>
                      </div>
                      <div class="col-md-4">
                        <?php echo $this->Form->input('editFamilyEmail', array('value' => $report->get('FamilyEmail'),'label' => 'Email',
                         'maxLength' => 256, 'title' => 'Email', 'type' => 'email')); ?>
                      </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4">
                          <?php echo $this->Form->input('editFamilyGender', array('value' => $report->get('FamilyGender'),'label' => 'Gender',
                          'options' => array('-' => '-', 'Male' => 'Male','Female' =>'Female'))); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                          <?php echo $this->Form->input('editFamilyEthnicity', array('value' => $report->get('FamilyEthnicity'), 'id' => 'FFE', 'onchange' => 'ffeOther(this)','label' => 'Ethnicity','options' =>
                              array('-' => '-', 'american_indian' => 'Native American','asian' => 'Asian',
                              'african_american' => 'African American','hispanic_latino' => 'Hispanic/Latino','middle_eastern' => 'Middle Eastern','pacific_islander' => 'Pacific Islander',
                              'white' => 'White','other' => 'Other'))); ?>
                        </div>
                        <div class="col-md-4">
                          <?php echo $this->Form->input('editFamilyEthnicityOther', array('value' => $report->get('FamilyEthnicityOther'),'id' => 'FFEO', 'label' =>
                          'Ethnicity Other', 'maxLength' => 255, 'title' => 'EthinicityOther', 'type' => 'text')); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                          <?php echo $this->Form->input('editRelation', array('value' => $report->get('Relation'),'id' => 'FFA', 'onchange' => 'ffaOther(this)','label' => 'Relation to Missing', 'options' =>
                            array('-' => '-', 'Mother' => 'Mother', 'Father' =>
                           'Father', 'Daughter' => 'Daughter', 'Son' => 'Son', 'Sister' => 'Sister','Brother' => 'Brother', 'Aunt' => 'Aunt', 'Uncle' => 'Uncle', 'Niece' =>
                           'Niece', 'Nephew' => 'Nephew', 'Cousin' => 'Cousin', 'Friend' => 'Friend', 'Other' => 'Other' ))); ?>
                        </div>
                        <div class="col-md-4">
                          <?php echo $this->Form->input('editRelationOther', array('value' => $report->get('RelationOther'),'id' => 'FFAO', 'label' =>
                          'Relation Other', 'maxLength' => 256, 'title' => 'Relation Other', 'type' => 'text')); ?>
                        </div>
                    </div>

                    <div class="row">

                      <div class="col-md-4">
                        <?php echo $this->Form->input('editFamilyStreet', array('value' => $report->get('FamilyStreet'),'label' => 'Street',
                         'maxLength' => 256, 'title' => 'street', 'type' => 'text')); ?>
                      </div>
                      <div class="col-md-4">
                        <?php echo $this->Form->input('editFamilyCity', array('value' => $report->get('FamilyCity'),'label' => 'City',
                        'maxLength' => 256, 'title' => 'city', 'type' => 'text')); ?>
                      </div>
                    </div>
                    <div class="row">

                        <div class="col-md-4">
                          <?php echo $this->Form->input('editFamilyState', array('value' => $report->get('FamilyState'),'label' => 'State',
                           'maxLength' => 2, 'title' => 'state', 'type' => 'text')); ?>
                        </div>
                        <div class="col-md-4">
                          <?php echo $this->Form->input('editFamilyZip', array('value' => $report->get('FamilyZip'),'label' => 'Zip',
                          'maxLength' => 5, 'title' => 'zip', 'type' => 'text')); ?>
                        </div>
                    </div>



                  <legend><?php echo __('Missing Person Hangouts'); ?></legend>
                </br>
                    <div class="row">
                        <div class="col-md-4">
                          <?php echo $this->Form->input('editHangoutName', array('value' => $report->get('HangoutName'),'label' => 'Hangout Name',
                           'maxLength' => 30, 'title' => 'Hangout Name', 'type' => 'text')); ?>
                        </div>
                        <div class="col-md-4">
                          <?php echo $this->Form->input('editHangoutStreet', array('value' => $report->get('HangoutStreet'),'label' => 'Street Name',
                          'maxLength' => 20, 'title' => 'Street', 'type' => 'text')); ?>
                        </div>
                        <div class="col-md-4">
                          <?php echo $this->Form->input('editHangoutNumber', array('value' => $report->get('HangoutNumber'),'label' => 'Address Number',
                          'maxLength' => 10, 'title' => 'address', 'type' => 'text')); ?>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <?php echo $this->Form->input('editHangoutCity', array('value' => $report->get('HangoutCity'),'label' => 'City',
                         'maxLength' => 20, 'title' => 'City', 'type' => 'text')); ?>
                      </div>
                      <div class="col-md-4">
                        <?php echo $this->Form->input('editHangoutState', array('value' => $report->get('HangoutState'),'label' => 'State',
                         'maxLength' => 2, 'title' => 'State', 'type' => 'text'));?>
                      </div>
                      <div class="col-md-4">
                        <?php echo $this->Form->input('editHangoutZip', array('value' => $report->get('HangoutZip'),'label' => 'Zip',
                        'maxLength' => 5, 'title' => 'Zip', 'type' => 'text')); ?>
                      </div>
                      <div class="col-md-8">
                        <?php echo $this->Form->input('editHangoutMisc', array('value' => $report->get('HangoutMisc'),'label' =>
                         'Additional Information', 'maxLength' => 2000, 'title' => 'SocialMedia', 'type' => 'textarea'));?>
                      </div>
                    </div>



                  <legend><?php echo __('Missing Person Workplace'); ?></legend>
                </br>
                    <div class="row">
                        <div class="col-md-4">
                          <?php echo $this->Form->input('editWorkplacename', array('value' => $report->get('Workplacename'),'label' => 'Workplace Name',
                          'maxLength' => 30, 'title' => 'Workplace Name', 'type' => 'text')); ?>
                        </div>
                        <div class="col-md-4">
                         <?php echo $this->Form->input('editWorkplaceStreet', array('value' => $report->get('WorkplaceStreet'),'label' => 'Street Name',
                          'maxLength' => 20, 'title' => 'Street', 'type' => 'text')); ?>
                        </div>
                        <div class="col-md-4">
                          <?php echo $this->Form->input('editWorkplaceNumber', array('value' => $report->get('WorkplaceNumber'),'label' => 'Address Number',
                           'maxLength' => 10, 'title' => 'address', 'type' => 'text')); ?>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <?php echo $this->Form->input('editWorkplaceCity', array('value' => $report->get('WorkplaceCity'),'label' => 'City',
                        'maxLength' => 20, 'title' => 'City', 'type' => 'text')); ?>
                      </div>
                      <div class="col-md-4">
                        <?php echo $this->Form->input('editWorkplaceState', array('value' => $report->get('WorkplaceState'),'label' => 'State',
                         'maxLength' => 2, 'title' => 'State', 'type' => 'text')); ?>
                      </div>
                      <div class="col-md-4">
                        <?php echo $this->Form->input('editWorkplaceZip', array('value' => $report->get('WorkplaceZip'),'label' => 'Zip', 'maxLength'
                         => 5, 'title' => 'Zip', 'type' => 'text')); ?>
                      </div>
                    </div>

                    <?php
                    echo $this->Form->label('Started Working:');
                    echo $this->Form->date('editWorkplaceStartDate', [
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
                  </br>
                    <?php
                    echo $this->Form->label('Stopped Working:');
                    echo $this->Form->date('editWorkplaceEndDate', [
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
                  </br>
                    <div class="row">
                      <div class="col-md-8">
                        <?php echo $this->Form->input('editWorkplaceMisc', array('value' => $report->get('WorkplaceMisc'),'label' => 'Additional Information',
                         'maxLength' => 2000, 'title' => 'SocialMedia', 'type' => 'textarea')); ?>
                      </div>
                    </div>
              </div>
      </div>
    </fieldset>
</div>
</body>
</html>
