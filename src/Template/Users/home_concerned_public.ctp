<!DOCTYPE html>
<html>
<head>

</head>
<body>
  <div class="jumbotron jumbotron-public-home">
    <h2 class="home-title"> MIMS <h2>
  </div>
<div class="page-header">
    <h1> Welcome </h1>
</div>

<div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <div class="panel panel-default mising-panel">
            <div class="panel-heading">
                <h3 class="panel-title">My Case</h3>
            </div>
            <div class="panel-body">
              <div class=" row panel-img">
                <?php echo $this->Html->image('usericon2.png', ['alt' => 'Image of missing person', 'class' => 'photos-missing']); ?>
                <div class="row comment-row">
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary comment-button" data-toggle="modal" data-target="#commentModal">
                    comment
                  </button>

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
                <ul>
                    <li>Case Status:</li>
                    <li>Date Created:</li>
                    <li>Case Number:</li>
                    <li>Associated Officer(s):</li>
                    <li>Latest Update:</li>
                </ul>
              </div>
            </div>
        </div>
      </div>
      <legend><?php echo __('Missing People'); ?></legend>
      <div class="col-md-8 display-missing">
        <?php foreach ($reports as $report): ?>
          <div class="row well missing-info">
              <div class="col-md-6">
                  <?php echo $this->Html->image('usericon2.png', ['alt' => 'Image of missing person', 'class' => 'photos-missing']); ?>
              </div>
              <div class="col-md-6">
                  <ul>
                      <li>First Name: <?php echo $this->Form->label('FirstName', array('value' => $report->get('FirstName'))); ?></li>
                      <li>Last Name: <?php echo $this->Form->label('LastName', array('value' => $report->get('LastName'))); ?></li>
                      <li>Date of Birth: <?php echo $this->Form->label('DoB', array('value' => $report->get('DoB'))); ?></li>
                      <li>Height: <?php echo $this->Form->label('Height', array('value' => $report->get('Height'))); ?></li>
                      <li>Weight: <?php echo $this->Form->label('Weight', array('value' => $report->get('Weight'))); ?></li>
                      <li>Marks/Tattoos: <?php echo $this->Form->label('MarksTattoos', array('value' => $report->get('MarksTattoos'))); ?></li>
                      <li>Gender: <?php echo $this->Form->label('Gender', array('value' => $report->get('Gender'))); ?></li>
                      <li>Last Seen:</li>
                  </ul>
              </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
</div>
</body>
</html>
