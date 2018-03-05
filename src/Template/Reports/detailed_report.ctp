<!DOCTYPE html>
<html>
<head>

</head>
<body>
<div class="page-header">
    <h1> Detailed Report </h1>
</div>

<div id="display-missing" class="container-fluid">
  <div class="row">
    <div class="col-md-6">
        <?php echo $this->Html->image('usericon.png', ['alt' => 'Image of missing person', 'class' => 'photos-missing']); ?>
    </div>
    <div class="col-md-6">
        <?= $this->Form->button('Update Report', array( 'class' => 'button update-button')); ?>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <h3 class="report-heading"> Missing Person Info </h3>
        <ul>
            <?php echo $this->Form->input('Report_ID', array('value' => $report->get('Report_ID'))); ?>
            <?php echo $this->Form->input('status', array('value' => $report->get('status'))); ?>
            <?php echo $this->Form->input('LastSeen', array('value' => $report->get('LastSeen'))); ?>
            <?php echo $this->Form->input('FirstName', array('value' => $report->get('FirstName'))); ?>
            <?php echo $this->Form->input('LastName', array('value' => $report->get('LastName'))); ?>
            <?php echo $this->Form->input('Gender', array('value' => $report->get('Gender'))); ?>
            <?php echo $this->Form->input('Ethnicity', array('value' => $report->get('Ethnicity'))); ?>
            <?php echo $this->Form->input('DoB', array('value' => $report->get('DoB'))); ?>
            <?php echo $this->Form->input('Height', array('value' => $report->get('Height'))); ?>
            <?php echo $this->Form->input('Weight', array('value' => $report->get('Weight'))); ?>
            <?php echo $this->Form->input('MarksTattoos', array('value' => $report->get('MarksTattoos'))); ?>
            <?php echo $this->Form->input('HairColor', array('value' => $report->get('HairColor'))); ?>
            <?php echo $this->Form->input('EyeColor', array('value' => $report->get('EyeColor'))); ?>
            <?php echo $this->Form->input('Phone', array('value' => $report->get('Phone'))); ?>
            <?php echo $this->Form->input('SocialMediaAccount', array('value' => $report->get('SocialMediaAccounts'))); ?>
        </ul>
    </div>
    <div class="col-md-4">
      <h3 class="report-heading"> Family/Friend Info </h3>
        <ul>
            <?php echo $this->Form->input('FamilyFirstName', array('value' => $report->get('FamilyFirstName'))); ?>
            <?php echo $this->Form->input('FamilyLastName', array('value' => $report->get('FamilyLastName'))); ?>
            <?php echo $this->Form->input('FamilyGender', array('value' => $report->get('FamilyGender'))); ?>
            <?php echo $this->Form->input('Relation', array('value' => $report->get('Relation'))); ?>
            <?php echo $this->Form->input('FamilyStreet', array('value' => $report->get('FamilyStreet'))); ?>
            <?php echo $this->Form->input('FamilyCity', array('value' => $report->get('FamilyCity'))); ?>
            <?php echo $this->Form->input('FamilyState', array('value' => $report->get('FamilyState'))); ?>
            <?php echo $this->Form->input('FamilyZip', array('value' => $report->get('FamilyZip'))); ?>
            <?php echo $this->Form->input('FamilyPhone', array('value' => $report->get('FamilyPhone'))); ?>
            <?php echo $this->Form->input('FamilyEmail', array('value' => $report->get('FamilyEmail'))); ?>
        </ul>
    </div>
    <div class="col-md-4">
      <h3 class="report-heading"> Workplace/Hangout Info </h3>
        <ul>
            <?php echo $this->Form->input('PlaceName', array('value' => $report->get('PlaceName'))); ?>
            <?php echo $this->Form->input('PlaceStreet', array('value' => $report->get('PlaceStreet'))); ?>
            <?php echo $this->Form->input('PlaceCity', array('value' => $report->get('PlaceCity'))); ?>
            <?php echo $this->Form->input('FamilyState', array('value' => $report->get('PlaceState'))); ?>
            <?php echo $this->Form->input('PlaceState', array('value' => $report->get('PlaceState'))); ?>
        </ul>
    </div>
  </div>
</div>
</body>
</html>
