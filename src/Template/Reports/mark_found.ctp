<!DOCTYPE html>
<html>
<head>

</head>
  <?php echo $this->Form->create('$found');
  $this->Html->css('custom');
  ?>

  </br>
  <div class="well">
  <fieldset>
      <h4 class="found-heading">
        <?php echo __('This person has been marked as "Found":');?>
        <?php echo __($report->FirstName);?>
        <?php echo __($report->MiddleName);?>
        <?php echo __($report->LastName);?>
      </h4>
      <br>
      <h4 class="found-heading">
        <?php echo __('Edit Report:');?>

        <?= $this->Html->link($report->Report_ID, ['controller' => 'reports','action' => 'detailedReport', $report->Report_ID]) ?>

      </h4>
      <br>
      <?php
      echo $this->Form->hidden('Report_ID', array('value' => $report->get('Report_ID')));
      ?>
  </fieldset>
  <?php echo $this->Form->end(); ?>

  <?php
    if($user->get('role') == 'thepublic') {
      echo $this->Html->link("Return Home", array('controller' => 'users','action'=> 'homeConcernedPublic'), array( 'class' => 'return-home-button button'));
    }elseif($user->get('role') == 'lawenforcement') {
      echo $this->Html->link("Return Home", array('controller' => 'users','action'=> 'homeLawEnforcement'), array( 'class' => 'return-home-button button'));
    }
  ?>
</div>
  <div class="row photo-row">
    <div class="col-md-6">
        <?php echo $this->Html->image('usericon2.png', ['alt' => 'Image of missing person', 'class' => 'photos-missing']); ?>
    </div>
</div>
  <div class="row">
    <h1 class="report-legend">Missing Person Information</h1>
        <div class="row">
            <div class="col-md-4">
              <label class="report-label"> First Name: <span><?php echo $report->get('FirstName')?></span></label>
            </div>
            <div class="col-md-4">
              <label class="report-label"> Middle Name: <span><?php echo $report->get('MiddleName')?></span></label>
            </div>
            <div class="col-md-4">
              <label class="report-label"> Last Name: <span><?php echo $report->get('LastName')?></span></label>
            </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-12">
            <label class="report-label"> Alias: <span><?php echo $report->get('Alias')?></span></label>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-12">
            <label class="report-label"> Date of Birth: <span><?php echo $report->get('DoB')?></span></label>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-8">
            <label class="report-label"> Email: <span><?php echo $report->get('MissingEmail')?></span></label>
          </div>
          <div class="col-md-4">
            <label class="report-label"> Phone: <span><?php echo $report->get('Phone')?></span></label>
          </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-4">
              <label class="report-label"> Gender: <span><?php echo $report->get('Gender')?></span></label>
            </div>
            <div class="col-md-4">
              <label class="report-label"> Ethnicity: <span><?php echo $report->get('Ethinicity')?></span></label>
            </div>
            <div class="col-md-4">
              <label class="report-label"> Ethnicity Other: <span><?php echo $report->get('EthnicityOther')?></span></label>
            </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-6">
            <label class="report-label"> Eye Color: <span><?php echo $report->get('EyeColor')?></span></label>
          </div>
          <div class="col-md-6">
            <label class="report-label"> Eye Color Other: <span><?php echo $report->get('EyeColorOther')?></span></label>
          </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
              <label class="report-label"> Hair Color: <span><?php echo $report->get('HairColor')?></span></label>
            </div>
            <div class="col-md-6">
              <label class="report-label"> Hair Color Other: <span><?php echo $report->get('HairColorOther')?></span></label>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
              <label class="report-label"> Marks and Tattoos: <span><?php echo $report->get('MarksTattoos')?></span></label>
            </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-4">
            <label class="report-label"> Weight (lbs): <span><?php echo $report->get('Weight')?></span></label>
          </div>
          <div class="col-md-4">
            <label class="report-label"> Height (ft): <span><?php echo $report->get('HeightFeet')?></span></label>
          </div>
          <div class="col-md-4">
            <label class="report-label"> Height (in): <span><?php echo $report->get('HeightInches')?></span></label>
          </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
              <label class="report-label"> Facebook Account Name: <span><?php echo $report->get('missing_facebook_username')?></span></label>
            </div>
            <div class="col-md-6">
              <label class="report-label"> Twitter Account Name: <span><?php echo $report->get('missing_twitter_username')?></span></label>
            </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-6">
            <label class="report-label"> Snapchat Account Name: <span><?php echo $report->get('missing_snapchat_username')?></span></label>
          </div>
          <div class="col-md-6">
            <label class="report-label"> Instagram Account Name: <span><?php echo $report->get('missing_instagram_username')?></span></label>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-12">
            <label class="report-label"> Additional Information: <span><?php echo $report->get('ReportMiscInfo')?></span></label>
          </div>
        </div>
      </br>
      <div class="row ">
        <h1 class="report-legend">Missing Person Last Seen</h1>
        <div class="row">
            <div class="col-md-4">
              <label class="report-label"> Last Seen At: <span><?php echo $report->get('SeenName')?></span></label>
            </div>
            <div class="col-md-4">
              <label class="report-label"> Street Number: <span><?php echo $report->get('SeenNumber')?></span></label>
            </div>
            <div class="col-md-4">
              <label class="report-label"> Street Name: <span><?php echo $report->get('SeenStreet')?></span></label>
            </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-4">
            <label class="report-label"> City: <span><?php echo $report->get('SeenCity')?></span></label>
          </div>
          <div class="col-md-4">
            <label class="report-label"> State: <span><?php echo $report->get('SeenState')?></span></label>
          </div>
          <div class="col-md-4">
            <label class="report-label"> Zipcode: <span><?php echo $report->get('SeenZip')?></span></label>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-12">
            <label class="report-label"> Date Last Seen: <span><?php echo $report->get('SeenWhen')?></span></label>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-12">
            <label class="report-label"> Notes About Last Seen: <span><?php echo $report->get('SeenNotes')?></span></label>
          </div>
        </div>
      </div>
      </br>
      <div class="row ">
        <h1 class="report-legend">Missing Person Family/Friend Information</h1>
        <div class="row">
          <div class="col-md-4">
            <label class="report-label"> First Name: <span><?php echo $report->get('FamilyFirstName')?></span></label>
          </div>
          <div class="col-md-4">
            <label class="report-label"> Middle Name: <span><?php echo $report->get('FamilyMiddleName')?></span></label>
          </div>
          <div class="col-md-4">
            <label class="report-label"> Last Name: <span><?php echo $report->get('FamilyLastName')?></span></label>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-6">
            <label class="report-label"> Phone: <span><?php echo $report->get('FamilyPhone')?></span></label>
          </div>
          <div class="col-md-6">
            <label class="report-label"> Email: <span><?php echo $report->get('FamilyEmail')?></span></label>
          </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
              <label class="report-label"> Gender: <span><?php echo $report->get('FamilyGender')?></span></label>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
              <label class="report-label"> Ethnicity: <span><?php echo $report->get('FamilyEthnicity')?></span></label>
            </div>
            <div class="col-md-6">
              <label class="report-label"> Ethnicity Other: <span><?php echo $report->get('FamilyEthnicityOther')?></span></label>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
              <label class="report-label"> Realtion To Missing: <span><?php echo $report->get('Relation')?></span></label>
            </div>
            <div class="col-md-6">
              <label class="report-label"> Relation To Missing Other: <span><?php echo $report->get('RelationOther')?></span></label>
            </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-6">
            <label class="report-label"> Street: <span><?php echo $report->get('FamilyStreet')?></span></label>
          </div>
          <div class="col-md-6">
            <label class="report-label"> City: <span><?php echo $report->get('FamilyCity')?></span></label>
          </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
              <label class="report-label"> State: <span><?php echo $report->get('FamilyState')?></span></label>
            </div>
            <div class="col-md-6">
              <label class="report-label"> Zipcode: <span><?php echo $report->get('FamilyZip')?></span></label>
            </div>
        </div>
      </div>
      </br>
      <div class="row ">
        <h1 class="report-legend">Missing Person Hangouts</h1>
          <div class="row">
              <div class="col-md-4">
                <label class="report-label"> Name: <span><?php echo $report->get('HangoutName')?></span></label>
              </div>
              <div class="col-md-4">
                <label class="report-label"> Street: <span><?php echo $report->get('HangoutStreet')?></span></label>
              </div>
              <div class="col-md-4">
                <label class="report-label"> Street Number: <span><?php echo $report->get('HangoutNumber')?></span></label>
              </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-4">
              <label class="report-label"> City: <span><?php echo $report->get('HangoutCity')?></span></label>
            </div>
            <div class="col-md-4">
              <label class="report-label"> State: <span><?php echo $report->get('HangoutState')?></span></label>
            </div>
            <div class="col-md-4">
              <label class="report-label"> Zipcode: <span><?php echo $report->get('HangoutZip')?></span></label>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-12">
              <label class="report-label"> Miscellaneous Info: <span><?php echo $report->get('HangoutMisc')?></span></label>
            </div>
          </div>
      </div>
      </br>
      <div class="row ">
        <h1 class="report-legend">Missing Person Workplace</h1>
          <div class="row">
              <div class="col-md-4">
                <label class="report-label">  Name: <span><?php echo $report->get('WorkplaceName')?></span></label>
              </div>
              <div class="col-md-4">
                <label class="report-label">  Street Name: <span><?php echo $report->get('WorkplaceStreet')?></span></label>
              </div>
              <div class="col-md-4">
                <label class="report-label">  Street Number: <span><?php echo $report->get('WorkplaceNumber')?></span></label>
              </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-4">
              <label class="report-label">  City: <span><?php echo $report->get('WorkplaceCity')?></span></label>
            </div>
            <div class="col-md-4">
              <label class="report-label">  State: <span><?php echo $report->get('WorkplaceState')?></span></label>
            </div>
            <div class="col-md-4">
              <label class="report-label">  Zipcode: <span><?php echo $report->get('WorkplaceZip')?></span></label>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-12">
              <label class="report-label">  Started Working Date: <span><?php echo $report->get('WorkplaceStartDate')?></span></label>
            </div>
            </div>
          </row>
          <hr>
          <div class="row">
            <div class="col-md-12">
              <label class="report-label">  End Working Date: <span><?php echo $report->get('WorkplaceEndDate')?></span></label>
            </div>
            </div>
          </row>
          <hr>
          <div class="row">
            <div class="col-md-12">
              <label class="report-label">  Miscellaneous Info: <span><?php echo $report->get('WorkplaceMisc')?></span></label>
            </div>
          </div>
      </div>
      </br>
  </div>
</html>
