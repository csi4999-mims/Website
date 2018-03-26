<!DOCTYPE html>
<html>
<head>
  <?= $this->Html->script("//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", [false]); ?>
  <?= $this->Html->script('http://maps.google.com/maps/api/js?key=AIzaSyD0h-HXglQ5F0qt0pCRanVJsPwO6EnJYBg&sensor=true', [false]); ?>
</head>
<body>
<div class="page-header">
    <h1> Welcome </h1>
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
      <td><input class="approve-button" type="button" value="Approve" data-toggle="modal" data-target="#approveModal" onclick="clearModalForm()"></td>
    </tr>
  <?php endforeach; ?>
</table>
<!-- Approve Modal -->
<div class="modal fade" id="approveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
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
        <form id="modal-form">
          <div class="form-group">
            <label for="report-number" class="col-form-label">Enter Case Number:</label>
            <input type="text" class="modal-form-control form-control" id="CaseNumber"></input>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary cancel-button" data-dismiss="modal" >Cancel</button>
        <button type="button" class="btn btn-primary" id="approveCase">Approve</button>
      </div>
    </div>
  </div>
</div>
</div>
<div class="containter-fluid map">
  <div class="row map-row law">
    <div class="col-md-6">
      <legend><?php echo __('Map of Missing People'); ?></legend>
      <p>
        The map to the right has the last seen locations of people who were reported missing.
      </br>
      </br>
        When you click on a map marker you can see the following information about the missing person:
      </br>
      <ul>
        <li>Name</li>
        <li>Date of Birth</li>
        <li>Last Seen Location</li>
        <li>Hair Color</li>
        <li>Eye Color</li>
        <li>Height</li>
        <li>Weight</li>
      </ul>
      </p>

    </div>
    <div class="col-md-6">
      <?=
        // Override any of the following default options to customize your map
        $map_options = array(
          'id' => 'map_canvas',
          'width' => '600px',
          'height' => '600px',
          'style' => '',
          'zoom' => 10,
          'type' => 'ROADMAP',
          'custom' => null,
          'localize' => true,
          'latitude' => 42.6666979,
          'longitude' => -83.399939,
          'marker' => true,
          'markerTitle' => '',
          'markerIcon' => 'http://google-maps-icons.googlecode.com/files/home.png',
          'markerShadow' => 'http://google-maps-icons.googlecode.com/files/shadow.png',
          'infoWindow' => true,
          'windowText' => '',
          'draggableMarker' => false
        );
      ?>
      <?= $this->GoogleMap->map($map_options); ?>
      <?php foreach ($reports as $report): ?>
            <?= $this->GoogleMap->addMarker("map_canvas", 1, $report->get('FamilyStreet') . $report->get('FamilyCity') . $report->get('FamilyState') . $report->get('FamilyZip'), array(
          "showWindow"   => true,
          "windowText"   => "Name: " . $report->get('FirstName') . " " . $report->get('LastName') .  " DOB: " . $report->get('DoB') . " Last Seen: "
          . $report->get('LastSeen') . " Hair Color: " . $report->get('HairColor') . " Eye Color: " . $report->get('EyeColor') . " Height: "
          . $report->get('Height') . " Weight: " . $report->get('Weight'),
          "markerTitle"  => "Title",
          "markerIcon"   => "http://labs.google.com/ridefinder/images/mm_20_purple.png",
          "markerShadow" => "http://labs.google.com/ridefinder/images/mm_20_purpleshadow.png"
        )); ?>
      <?php endforeach; ?>
    </div>
  </div>
</div>
</body>
</html>

<script>
//function to clear modal content
function clearModalForm(){
document.getElementById("modal-form").reset();
}
</script>
