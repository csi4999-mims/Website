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
    <th>Found?</th>
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
      <td><?php echo $this->Html->link("Approve", array('controller' => 'reports','action'=> 'approveModal', $report->Report_ID), array( 'class' => 'approve-button button')) ?></td>
      <td><?php echo $this->Html->link("Mark As Found", array('controller' => 'reports','action'=> 'markFound', $report->Report_ID), array( 'class' => 'button')) ?></td>
    </tr>
  <?php endforeach; ?>
</table>
<div class="containter-fluid map">
  <div class="row map-row law">
    <div class="col-md-8">
      <h1 class="map-banner"> Map of Missing People </h1>
      <p class="map-info">
        The map to the right has the last seen locations of people who were reported missing and adresses for local police stations.
      </br>
      </br>
        When you click on a purple map marker you can see the following information about the missing person:
      </br>
      <div class="purple-marker-icon">
        <?php echo $this->Html->image('purple-con.png', ['alt' => 'Purple Marker', 'class' => 'purple-marker']); ?>
      </div>
      <br>
      <br>
      <ul>
        <li>Name</li>
        <li>Date of Birth</li>
        <li>Last Seen Location</li>
        <li>Hair Color</li>
        <li>Eye Color</li>
        <li>Height</li>
        <li>Weight</li>
      </ul>
    </br>
      When you click on a red map marker you can see the following information about the police station:
    </br>
    <br>
      <div class="red-marker-icon">
        <?php echo $this->Html->image('red-icon.jpg', ['alt' => 'Red Marker', 'class' => 'red-marker']); ?>
      </div>
      <ul>
        <li>Name of Police Station</li>
        <li>Address of Police Station</li>
      </ul>
      </p>

    </div>
    <div class="col-md-4 map-column">
      <?php
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
          . $report->get('SeenWhen'),
          "markerTitle"  => "Title",
          "markerIcon"   => "http://labs.google.com/ridefinder/images/mm_20_purple.png",
          "markerShadow" => "http://labs.google.com/ridefinder/images/mm_20_purpleshadow.png"
        )); ?>
      <?php endforeach; ?>
      <?= $this->GoogleMap->addMarker("map_canvas", 1, "400 6th St, Rochester, Michigan 48307",array('showWindow'   => true,
      'windowText'   => "Rochester Police: 400 6th St, Rochester, MI 48307")); ?>
      <?= $this->GoogleMap->addMarker("map_canvas", 1, "1899 N Squirrel Rd, Auburn Hills, Michigan 48326",array('showWindow'   => true,
      'windowText'   => "Aubrun Hills Police: 1899 N Squirrel Rd, Auburn Hills, MI 48326")); ?>
      <?= $this->GoogleMap->addMarker("map_canvas", 1, "7550 Auburn Rd, Utica, Michigan 48317",array('showWindow'   => true,
      'windowText'   => "Utica Police: 7550 Auburn Rd, Utica, MI 48317")); ?>
      <?= $this->GoogleMap->addMarker("map_canvas", 1, "52530 Van Dyke, Shelby Charter Township, Michigan 48316",array('showWindow'   => true,
      'windowText'   => "Shelby Township Police: 52530 Van Dyke, Shelby Charter Township, MI 48316")); ?>
      <?= $this->GoogleMap->addMarker("map_canvas", 1, "280 13 Mile Rd, Madison Heights, Michigan 48071",array('showWindow'   => true,
      'windowText'   => "Madison Heights Police: 280 13 Mile Rd, Madison Heights, MI 48071")); ?>
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

<script>
//function to make unique modal for each report
function ogModals(clickedBtn){
  document.getElementById("approveModalmodal").value = clickedBtn;
}
</script>
