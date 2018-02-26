<!DOCTYPE html>
<html>
<head>

</head>
<body>
<div class="page-header">
    <h1> Detailed Report View </h1>
</div>

<div id="display-missing" class="container-fluid">
      <div class="row well">
        <div class ="row">
          <div class="col-md-12">
              <?php echo $this->Html->image('usericon.png', ['alt' => 'Image of missing person', 'class' => 'photos-missing']); ?>
          </div>
        </div>
        <div class ="row">
          <div class="col-md-4">
            <h3> Missing Person Info </h3>
              <ul>
                  <li>Report ID: <?php echo $this->Form->label('Report_ID', array('value' => $report->get('Report_ID'))); ?></li>
                  <li>Status: <?php echo $this->Form->label('status', array('value' => $report->get('status'))); ?></li>
                  <li>Last Seen: <?php echo $this->Form->label('LastSeen', array('value' => $report->get('LastSeen'))); ?></li>
                  <li>First Name: <?php echo $this->Form->label('FirstName', array('value' => $report->get('FirstName'))); ?></li>
                  <li>Last Name: <?php echo $this->Form->label('LastName', array('value' => $report->get('LastName'))); ?></li>
                  <li>Gender: <?php echo $this->Form->label('Gender', array('value' => $report->get('Gender'))); ?></li>
                  <li>Ethnicity: <?php echo $this->Form->label('Ethnicity', array('value' => $report->get('Ethnicity'))); ?></li>
                  <li>Date of Birth: <?php echo $this->Form->label('DoB', array('value' => $report->get('DoB'))); ?></li>
                  <li>Height: <?php echo $this->Form->label('Height', array('value' => $report->get('Height'))); ?></li>
                  <li>Weight: <?php echo $this->Form->label('Weight', array('value' => $report->get('Weight'))); ?></li>
                  <li>Marks/Tattoos: <?php echo $this->Form->label('MarksTattoos', array('value' => $report->get('MarksTattoos'))); ?></li>
                  <li>Hair Color: <?php echo $this->Form->label('HairColor', array('value' => $report->get('HairColor'))); ?></li>
                  <li>Eye Color: <?php echo $this->Form->label('EyeColor', array('value' => $report->get('EyeColor'))); ?></li>
                  <li>Phone: <?php echo $this->Form->label('Phone', array('value' => $report->get('Phone'))); ?></li>
                  <li>Socila Media Account(s): <?php echo $this->Form->label('SocialMediaAccount', array('value' => $report->get('SocialMediaAccounts'))); ?></li>
              </ul>
          </div>
          <div class="col-md-4">
            <h3> Family/Friend Info </h3>
              <ul>
                  <li>First Name: <?php echo $this->Form->label('FamilyFirstName', array('value' => $report->get('FamilyFirstName'))); ?></li>
                  <li>Last Name: <?php echo $this->Form->label('FamilyLastName', array('value' => $report->get('FamilyLastName'))); ?></li>
                  <li>Gender: <?php echo $this->Form->label('FamilyGender', array('value' => $report->get('FamilyGender'))); ?></li>
                  <li>Relation to Missing: <?php echo $this->Form->label('Relation', array('value' => $report->get('Relation'))); ?></li>
                  <li>Street: <?php echo $this->Form->label('FamilyStreet', array('value' => $report->get('FamilyStreet'))); ?></li>
                  <li>City: <?php echo $this->Form->label('FamilyCity', array('value' => $report->get('FamilyCity'))); ?></li>
                  <li>State: <?php echo $this->Form->label('FamilyState', array('value' => $report->get('FamilyState'))); ?></li>
                  <li>Zip: <?php echo $this->Form->label('FamilyZip', array('value' => $report->get('FamilyZip'))); ?></li>
                  <li>Phone: <?php echo $this->Form->label('FamilyPhone', array('value' => $report->get('FamilyPhone'))); ?></li>
                  <li>Email: <?php echo $this->Form->label('FamilyEmail', array('value' => $report->get('FamilyEmail'))); ?></li>
              </ul>
          </div>
          <div class="col-md-4">
            <h3> Workplace/Hangout Info </h3>
              <ul>
                  <li>Name: <?php echo $this->Form->label('PlaceName', array('value' => $report->get('PlaceName'))); ?></li>
                  <li>Street: <?php echo $this->Form->label('PlaceStreet', array('value' => $report->get('PlaceStreet'))); ?></li>
                  <li>City: <?php echo $this->Form->label('PlaceCity', array('value' => $report->get('PlaceCity'))); ?></li>
                  <li>State: <?php echo $this->Form->label('FamilyState', array('value' => $report->get('PlaceState'))); ?></li>
                  <li>Zip: <?php echo $this->Form->label('PlaceState', array('value' => $report->get('PlaceState'))); ?></li>
              </ul>
          </div>
        </div>
    </div>
</div>
</body>
</html>
