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
                      echo $this->Form->submit('Update Case', array('class' => 'form-submit btn update-button',  'title' => 'Click here to update the user account') );
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
                  <div class="row">
                    <div class="col-md-12">
                      <!-- Comment Button -->
                      <button type="button" class="btn btn-primary comment-button" data-toggle="modal" data-target="#commentModal">
                        comment
                      </button>
                    </div>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="commentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Enter Your Comment</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="form-group">
                              <label for="sender-email" class="col-form-label">Email:</label>
                              <input type="text" class="form-control" id="sender-email">
                            </div>
                            <div class="form-group">
                              <label for="comment-text" class="col-form-label">Comment:</label>
                              <textarea class="form-control" id="comment-text"></textarea>
                            </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Send Comment</button>
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
                              <?php echo $this->Form->input('Report_ID', array('value' => $report->get('Report_ID'))); ?>
                          </div>
                          <div class="col-md-6 inline-right">
                              <?php echo $this->Form->input('status', array('value' => $report->get('status'))); ?>
                          </div>
                      </div>
                      <?php echo $this->Form->input('editLastSeen', array('value' => $report->get('LastSeen'))); ?>
                      <?php echo $this->Form->input('editFirstName', array('value' => $report->get('FirstName'))); ?>
                      <?php echo $this->Form->input('editLastName', array('value' => $report->get('LastName'))); ?>
                      <div class="row">
                          <div class="col-md-6 inline-left">
                              <?php echo $this->Form->input('editGender', array('value' => $report->get('Gender'))); ?>
                          </div>
                          <div class="col-md-6 inline-right">
                              <?php echo $this->Form->input('editEthnicity', array('value' => $report->get('Ethnicity'))); ?>
                          </div>
                      </div>
                      <?php echo $this->Form->input('editDoB', array('value' => $report->get('DoB'))); ?>
                      <div class="row">
                          <div class="col-md-6 inline-left">
                              <?php echo $this->Form->input('editFeet', array('value' => $report->get('HeightFeet')));  ?>
                          </div>
                          <div class="col-md-6 inline-right">
                              <?php echo $this->Form->input('editInches', array('value' => $report->get('HeightInches')));  ?>
                          </div>
                      </div>
                      <?php echo $this->Form->input('editMarksTattoos', array('value' => $report->get('MarksTattoos'))); ?>
                      <div class="row">
                          <div class="col-md-4 inline-left">
                              <?php echo $this->Form->input('editWeight', array('value' => $report->get('Weight'))); ?>
                          </div>
                          <div class="col-md-4 inline-middle">
                              <?php echo $this->Form->input('editEyeColor', array('value' => $report->get('EyeColor'))); ?>
                          </div>
                          <div class="col-md-4 inline-right">
                              <?php echo $this->Form->input('editHairColor', array('value' => $report->get('HairColor'))); ?>
                          </div>
                      </div>
                      <?php echo $this->Form->input('editPhone', array('value' => $report->get('Phone'))); ?>
                      <?php echo $this->Form->input('editSocialMediaAccount', array('value' => $report->get('SocialMediaAccounts'))); ?>
                    </ul>
                </div>
                <div class="col-md-4">
                  <legend><?php echo __('Family/Friend'); ?></legend>
                    <ul>
                      <?php echo $this->Form->input('editFamilyFirstName', array('value' => $report->get('FamilyFirstName'))); ?>
                      <?php echo $this->Form->input('editFamilyLastName', array('value' => $report->get('FamilyLastName'))); ?>
                      <?php echo $this->Form->input('editFamilyGender', array('value' => $report->get('FamilyGender'))); ?>
                      <?php echo $this->Form->input('editRelation', array('value' => $report->get('Relation'))); ?>
                      <?php echo $this->Form->input('editFamilyStreet', array('value' => $report->get('FamilyStreet'))); ?>
                      <?php echo $this->Form->input('editFamilyCity', array('value' => $report->get('FamilyCity'))); ?>
                      <?php echo $this->Form->input('editFamilyState', array('value' => $report->get('FamilyState'))); ?>
                      <?php echo $this->Form->input('editFamilyZip', array('value' => $report->get('FamilyZip'))); ?>
                      <?php echo $this->Form->input('editFamilyPhone', array('value' => $report->get('FamilyPhone'))); ?>
                      <?php echo $this->Form->input('editFamilyEmail', array('value' => $report->get('FamilyEmail'))); ?>
                    </ul>
                </div>
                <div class="col-md-4">
                  <legend><?php echo __('Workplace/Hangout'); ?></legend>
                    <ul>
                      <?php echo $this->Form->input('editPlaceName', array('value' => $report->get('PlaceName'))); ?>
                      <?php echo $this->Form->input('editPlaceStreet', array('value' => $report->get('PlaceStreet'))); ?>
                      <?php echo $this->Form->input('editPlaceCity', array('value' => $report->get('PlaceCity'))); ?>
                      <?php echo $this->Form->input('editPlaceState', array('value' => $report->get('PlaceState'))); ?>
                      <?php echo $this->Form->input('editPlaceZip', array('value' => $report->get('PlaceZip'))); ?>
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
