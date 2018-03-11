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
                  <div class="row">
                    <div class="col-md-12">
                      <!-- Update Case Button trigger modal -->
                      <?php
                      echo $this->Form->submit('Update Case', array('class' => 'form-submit btn categorize-button',  'title' => 'Click here to update the user account') );
                      ?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <!-- Categorize Button trigger modal -->
                      <button type="button" class="button btn categorize-button" data-toggle="modal" data-target="#categorizeModal">
                        Categorize
                      </button>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <!-- Mark As Found Button trigger modal -->
                      <button type="button" class="button btn found-button" data-toggle="modal" data-target="#foundModal">
                        Mark As Found
                      </button>
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
                              <?php echo $this->Form->input('Report_ID', array('value' => $report->get('Report_ID'))); ?>
                          </div>
                          <div class="col-md-6 inline-right">
                              <?php echo $this->Form->input('status', array('value' => $report->get('status'))); ?>
                          </div>
                      </div>
                        <?php echo $this->Form->input('newLastSeen', array('value' => $report->get('LastSeen'))); ?>
                        <?php echo $this->Form->input('newFirstName', array('value' => $report->get('FirstName'))); ?>
                        <?php echo $this->Form->input('newLastName', array('value' => $report->get('LastName'))); ?>
                        <div class="row">
                            <div class="col-md-6 inline-left">
                                <?php echo $this->Form->input('newGender', array('value' => $report->get('Gender'))); ?>
                            </div>
                            <div class="col-md-6 inline-right">
                                <?php echo $this->Form->input('newEthnicity', array('value' => $report->get('Ethnicity'))); ?>
                            </div>
                        </div>
                        <?php echo $this->Form->input('DoB', array('value' => $report->get('DoB'))); ?>
                        <div class="row">
                            <div class="col-md-6 inline-left">
                                <?php echo $this->Form->input('newFeet', array('value' => $report->get('HeightFeet')));  ?>
                            </div>
                            <div class="col-md-6 inline-right">
                                <?php echo $this->Form->input('newInches', array('value' => $report->get('HeightInches')));  ?>
                            </div>
                        </div>
                        <?php echo $this->Form->input('newMarksTattoos', array('value' => $report->get('MarksTattoos'))); ?>
                        <div class="row">
                            <div class="col-md-4 inline-left">
                                <?php echo $this->Form->input('newWeight', array('value' => $report->get('Weight'))); ?>
                            </div>
                            <div class="col-md-4 inline-middle">
                                <?php echo $this->Form->input('newEyeColor', array('value' => $report->get('EyeColor'))); ?>
                            </div>
                            <div class="col-md-4 inline-right">
                                <?php echo $this->Form->input('newHairColor', array('value' => $report->get('HairColor'))); ?>
                            </div>
                        </div>
                        <?php echo $this->Form->input('newPhone', array('value' => $report->get('Phone'))); ?>
                        <?php echo $this->Form->input('newSocialMediaAccount', array('value' => $report->get('SocialMediaAccounts'))); ?>
                    </ul>
                </div>
                <div class="col-md-4">
                  <legend><?php echo __('Family/Friend'); ?></legend>
                    <ul>
                        <?php echo $this->Form->input('newFamilyFirstName', array('value' => $report->get('FamilyFirstName'))); ?>
                        <?php echo $this->Form->input('newFamilyLastName', array('value' => $report->get('FamilyLastName'))); ?>
                        <?php echo $this->Form->input('newFamilyGender', array('value' => $report->get('FamilyGender'))); ?>
                        <?php echo $this->Form->input('newRelation', array('value' => $report->get('Relation'))); ?>
                        <?php echo $this->Form->input('newFamilyStreet', array('value' => $report->get('FamilyStreet'))); ?>
                        <?php echo $this->Form->input('newFamilyCity', array('value' => $report->get('FamilyCity'))); ?>
                        <?php echo $this->Form->input('newFamilyState', array('value' => $report->get('FamilyState'))); ?>
                        <?php echo $this->Form->input('newFamilyZip', array('value' => $report->get('FamilyZip'))); ?>
                        <?php echo $this->Form->input('newFamilyPhone', array('value' => $report->get('FamilyPhone'))); ?>
                        <?php echo $this->Form->input('newFamilyEmail', array('value' => $report->get('FamilyEmail'))); ?>
                    </ul>
                </div>
                <div class="col-md-4">
                  <legend><?php echo __('Workplace/Hangout'); ?></legend>
                    <ul>
                        <?php echo $this->Form->input('newPlaceName', array('value' => $report->get('PlaceName'))); ?>
                        <?php echo $this->Form->input('newPlaceStreet', array('value' => $report->get('PlaceStreet'))); ?>
                        <?php echo $this->Form->input('newPlaceCity', array('value' => $report->get('PlaceCity'))); ?>
                        <?php echo $this->Form->input('newFamilyState', array('value' => $report->get('PlaceState'))); ?>
                        <?php echo $this->Form->input('newPlaceState', array('value' => $report->get('PlaceState'))); ?>
                    </ul>
                </div>
              </div>
      </div>
    </fieldset>
</div>
<!-- Categorize Modal -->
<div class="modal fade" id="categorizeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Categorize Missing Person</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
          Are you sure you want to approve this case? If so, enter the Official Report Number.
        </p>
        <form>
          <div class="form-group">
            <label for="category" class="col-form-label">Pick A Category:</label>
            <form action="/action_page.php">
            <select name="cars">
              <option value="Runaway">Runaway</option>
              <option value="HumanTrafficking">Human Trafficking</option>
              <option value="SubstanceAbuser">Substance Abuser</option>
              <option value="RomeoJuliet">Romeo & Juliet</option>
            </select>
          </form>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Confirm</button>
      </div>
    </div>
  </div>
</div>
<!-- Found Modal -->
<div class="modal fade" id="foundModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mark As Found</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
          Are you sure you want to mark this person as found?
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Confirm</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>
