<!DOCTYPE html>
<html>
<head>

</head>
<body>
  <h1> Welcome <span class="display-user"><?php echo $this->Form->label('FirstName', array('value' => $user->get('FirstName'))); ?></span></h1>
<br/>
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
  <tr>
    <td><a href="/reports/detailed_report"><?php echo $this->Form->label('CaseNumber', array('value' => $report->get('CaseNumber'))); ?></a></td>
    <td><?php echo $this->Form->label('FirstName', array('value' => $report->get('FirstName'))); ?></td>
    <td><?php echo $this->Form->label('LastName', array('value' => $report->get('LastName'))); ?></td>
    <td><?php echo $this->Form->label('DoB', array('value' => $report->get('DoB'))); ?></td>
    <td>Insert Here</td>
    <td>Insert Here</td>
    <td><input id="checkBox" type="checkbox"></td>
  </tr>
</table>
</body>
</html>
