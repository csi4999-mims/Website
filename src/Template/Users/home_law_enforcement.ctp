<!DOCTYPE html>
<html>
<head>

</head>
<body>
<div class="page-header">
    <h1> Welcome <span class="display-user"><?php echo $this->Form->label('FirstName', array('value' => $user->get('FirstName'))); ?></span></h1>
</div>
<div class="containter-fluid">
    <table>
  <tr>
    <th>Report Number</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>DOB</th>
    <th>Last Seen:</th>
    <th>Status</th>
    <th>Approve Case</th>
  </tr>
  <?php foreach ($reports as $report): ?>
    <tr>
      <td>
            <?= $this->Html->link($report->Report_ID, ['controller' => 'reports','action' => 'detailedReport', $report->Report_ID]) ?>
      </td>
      <td><?php echo $this->Form->label('FirstName', array('value' => $report->get('FirstName'))); ?></td>
      <td><?php echo $this->Form->label('LastName', array('value' => $report->get('LastName'))); ?></td>
      <td><?php echo $this->Form->label('DoB', array('value' => $report->get('DoB'))); ?></td>
      <td><?php echo $this->Form->label('LastSeen', array('value' => $report->get('LastSeen'))); ?></td>
      <td><?php echo $this->Form->label('status', array('value' => $report->get('status'))); ?></td>
      <td><input class="approve-button" type="button" value="Approve" data-toggle="modal" data-target="#approveModal"></td>
    </tr>
  <?php endforeach; ?>
</table>
<!-- Approve Modal -->
<div class="modal fade" id="approveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Approve Case</h5>
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
            <label for="report-number" class="col-form-label">Enter Report Number:</label>
            <input type="text" class="form-control" id="report-number"></input>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Approve</button>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>
