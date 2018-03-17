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
                      <button type="button" class="button btn categorize-button">
                        Update Case
                      </button>
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
