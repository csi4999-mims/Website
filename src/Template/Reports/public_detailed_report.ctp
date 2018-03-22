<!DOCTYPE html>
<html>
<head>

</head>
<body>
<div class="page-header">
    <h1> Detailed Report </h1>
</div>
<div class="reports form">
    <?php echo $this->Form->create('$report'); ?>
    <fieldset>
      <div id="display-missing" class="container-fluid">
              <div class="row photo-row">
                <div class="col-md-6">
                    <?php echo $this->Html->image('usericon2.png', ['alt' => 'Image of missing person', 'class' => 'photos-missing']); ?>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-12">
                      <!-- Comment Button -->
                      <?php echo $this->Html->link("Comment", array('controller' => 'comments','action'=> 'commentModal', $report->Report_ID), array( 'class' => 'comment-button button')) ?>
                    </div>
                  </div>
                </div>
            </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <legend><?php echo __('Missing Person'); ?></legend>
                    <ul>
                      <div class="row">
                          <div class="col-md-6 inline-left">
                              <?php echo $this->Form->input('Report_ID', array('value' => $report->get('Report_ID'), 'readonly' => 'readonly')); ?>
                          </div>
                          <div class="col-md-6 inline-right">
                              <?php echo $this->Form->input('status', array('value' => $report->get('status'), 'readonly' => 'readonly')); ?>
                          </div>
                      </div>
                        <?php echo $this->Form->input('LastSeen', array('value' => $report->get('LastSeen'), 'readonly' => 'readonly')); ?>
                        <?php echo $this->Form->input('FirstName', array('value' => $report->get('FirstName'), 'readonly' => 'readonly')); ?>
                        <?php echo $this->Form->input('LastName', array('value' => $report->get('LastName'), 'readonly' => 'readonly')); ?>
                        <div class="row">
                            <div class="col-md-6 inline-left">
                                <?php echo $this->Form->input('Gender', array('value' => $report->get('Gender'), 'readonly' => 'readonly')); ?>
                            </div>
                            <div class="col-md-6 inline-right">
                                <?php echo $this->Form->input('Ethnicity', array('value' => $report->get('Ethnicity'), 'readonly' => 'readonly')); ?>
                            </div>
                        </div>
                        <?php echo $this->Form->input('DoB', array('value' => $report->get('DoB'), 'readonly' => 'readonly')); ?>
                        <div class="row">
                            <div class="col-md-6 inline-left">
                                <?php echo $this->Form->input('Feet', array('value' => $report->get('HeightFeet'), 'readonly' => 'readonly'));  ?>
                            </div>
                            <div class="col-md-6 inline-right">
                                <?php echo $this->Form->input('Inches', array('value' => $report->get('HeightInches'), 'readonly' => 'readonly'));  ?>
                            </div>
                        </div>
                        <?php echo $this->Form->input('MarksTattoos', array('value' => $report->get('MarksTattoos'), 'readonly' => 'readonly')); ?>
                        <div class="row">
                            <div class="col-md-4 inline-left">
                                <?php echo $this->Form->input('Weight', array('value' => $report->get('Weight'), 'readonly' => 'readonly')); ?>
                            </div>
                            <div class="col-md-4 inline-middle">
                                <?php echo $this->Form->input('EyeColor', array('value' => $report->get('EyeColor'), 'readonly' => 'readonly')); ?>
                            </div>
                            <div class="col-md-4 inline-right">
                                <?php echo $this->Form->input('HairColor', array('value' => $report->get('HairColor'), 'readonly' => 'readonly')); ?>
                            </div>
                        </div>
                        <?php echo $this->Form->input('Phone', array('value' => $report->get('Phone'), 'readonly' => 'readonly')); ?>
                        <?php echo $this->Form->input('SocialMediaAccount', array('value' => $report->get('SocialMediaAccounts'), 'readonly' => 'readonly')); ?>
                    </ul>
                </div>
                <div class="col-md-4">
                  <legend><?php echo __('Family/Friend'); ?></legend>
                    <ul>
                        <?php echo $this->Form->input('FamilyFirstName', array('value' => $report->get('FamilyFirstName'), 'readonly' => 'readonly')); ?>
                        <?php echo $this->Form->input('FamilyLastName', array('value' => $report->get('FamilyLastName'), 'readonly' => 'readonly')); ?>
                        <?php echo $this->Form->input('FamilyGender', array('value' => $report->get('FamilyGender'), 'readonly' => 'readonly')); ?>
                        <?php echo $this->Form->input('Relation', array('value' => $report->get('Relation'), 'readonly' => 'readonly')); ?>
                        <?php echo $this->Form->input('FamilyStreet', array('value' => $report->get('FamilyStreet'), 'readonly' => 'readonly')); ?>
                        <?php echo $this->Form->input('FamilyCity', array('value' => $report->get('FamilyCity'), 'readonly' => 'readonly')); ?>
                        <?php echo $this->Form->input('FamilyState', array('value' => $report->get('FamilyState'), 'readonly' => 'readonly')); ?>
                        <?php echo $this->Form->input('FamilyZip', array('value' => $report->get('FamilyZip'), 'readonly' => 'readonly')); ?>
                        <?php echo $this->Form->input('FamilyPhone', array('value' => $report->get('FamilyPhone'), 'readonly' => 'readonly')); ?>
                        <?php echo $this->Form->input('FamilyEmail', array('value' => $report->get('FamilyEmail'), 'readonly' => 'readonly')); ?>
                    </ul>
                </div>
                <div class="col-md-4">
                  <legend><?php echo __('Workplace/Hangout'); ?></legend>
                    <ul>
                        <?php echo $this->Form->input('PlaceName', array('value' => $report->get('PlaceName'), 'readonly' => 'readonly')); ?>
                        <?php echo $this->Form->input('PlaceStreet', array('value' => $report->get('PlaceStreet'), 'readonly' => 'readonly')); ?>
                        <?php echo $this->Form->input('PlaceCity', array('value' => $report->get('PlaceCity'), 'readonly' => 'readonly')); ?>
                        <?php echo $this->Form->input('PlaceState', array('value' => $report->get('PlaceState'), 'readonly' => 'readonly')); ?>
                        <?php echo $this->Form->input('PlaceZip', array('value' => $report->get('PlaceZip'), 'readonly' => 'readonly')); ?>
                    </ul>
                </div>
              </div>
      </div>
    </fieldset>
</div>
</body>
</html>
