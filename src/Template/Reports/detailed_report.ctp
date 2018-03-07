<!DOCTYPE html>
<html>
<head>

</head>
<body>
<div class="page-header">
    <h1> Detailed Report </h1>
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
                    <?= $this->Form->button('Update Report', array( 'class' => 'button update-button')); ?>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <legend><?php echo __('Missing Person'); ?></legend>
                    <ul>
                      <div class="row">
                          <div class="col-md-6 inline-left">
                              <?php echo $this->Form->input('Report_ID', array('value' => $report->get('Report_ID'))); ?>
                          </div>
                          <div class="col-md-6 inline-right">
                              <?php echo $this->Form->input('status', array('value' => $report->get('status'))); ?>
                          </div>
                      </div>
                        <?php echo $this->Form->input('LastSeen', array('value' => $report->get('LastSeen'))); ?>
                        <?php echo $this->Form->input('FirstName', array('value' => $report->get('FirstName'))); ?>
                        <?php echo $this->Form->input('LastName', array('value' => $report->get('LastName'))); ?>
                        <div class="row">
                            <div class="col-md-6 inline-left">
                                <?php echo $this->Form->input('Gender', array('value' => $report->get('Gender'))); ?>
                            </div>
                            <div class="col-md-6 inline-right">
                                <?php echo $this->Form->input('Ethnicity', array('value' => $report->get('Ethnicity'))); ?>
                            </div>
                        </div>
                        <?php echo $this->Form->input('DoB', array('value' => $report->get('DoB'))); ?>
                        <div class="row">
                            <div class="col-md-6 inline-left">
                                <?php echo $this->Form->input('Feet', array('value' => $report->get('HeightFeet')));  ?>
                            </div>
                            <div class="col-md-6 inline-right">
                                <?php echo $this->Form->input('Inches', array('value' => $report->get('HeightInches')));  ?>
                            </div>
                        </div>
                        <?php echo $this->Form->input('MarksTattoos', array('value' => $report->get('MarksTattoos'))); ?>
                        <div class="row">
                            <div class="col-md-4 inline-left">
                                <?php echo $this->Form->input('Weight', array('value' => $report->get('Weight'))); ?>
                            </div>
                            <div class="col-md-4 inline-middle">
                                <?php echo $this->Form->input('EyeColor', array('value' => $report->get('EyeColor'))); ?>
                            </div>
                            <div class="col-md-4 inline-right">
                                <?php echo $this->Form->input('HairColor', array('value' => $report->get('HairColor'))); ?>
                            </div>
                        </div>
                        <?php echo $this->Form->input('Phone', array('value' => $report->get('Phone'))); ?>
                        <?php echo $this->Form->input('SocialMediaAccount', array('value' => $report->get('SocialMediaAccounts'))); ?>
                    </ul>
                </div>
                <div class="col-md-4">
                  <legend><?php echo __('Family/Friend'); ?></legend>
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
                  <legend><?php echo __('Workplace/Hangout'); ?></legend>
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
    </fieldset>
</div>
</body>
</html>
