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
    <th>Date Submitted</th>
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
      <td><input id="checkBox" type="checkbox"></td>
    </tr>
  <?php endforeach; ?>
</table>
<input class="approve-button" type="button" value="Approve">
</div>
</body>
</html>
