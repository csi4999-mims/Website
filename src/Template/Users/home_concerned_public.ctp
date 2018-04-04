<!DOCTYPE html>
<html>
<head>
  <?= $this->Html->script("//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", [false]); ?>
  <?= $this->Html->script('http://maps.google.com/maps/api/js?key=AIzaSyD0h-HXglQ5F0qt0pCRanVJsPwO6EnJYBg&sensor=true', [false]); ?>
</head>
<body>
  <div class="jumbotron jumbotron-public-home">
    <h2 class="home-title"> MIMS <h2>
  </div>
<div class="page-header">
    <h1 class="welcome-banner"> Welcome </h1>
</div>

<div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <?php $count = 0 ?>
        <?php
        foreach ($myreports as $myreport):
          $count += 1;
          ?>
        <div class="panel panel-default mising-panel">
            <div class="panel-heading">
                <h3 class="panel-title">My Case <?php echo $count ?></h3>
            </div>
            <div class="panel-body">
              <div class=" row panel-img">
                <?php echo $this->Html->image('usericon2.png', ['alt' => 'Image of missing person', 'class' => 'photos-missing']); ?>
              </div>
              <div class="row">
                <ul>
                    <li>Case Status:<?php echo $this->Form->label('status', array('value' => $myreport->get('status'))); ?></li>
                    <li>Date Created:<?php echo $this->Form->label('date', array('value' => $myreport->get('date'))); ?></li>
                    <li>Case Number:<?= $this->Html->link($myreport->Report_ID, ['controller' => 'reports','action' => 'publicDetailedReport', $myreport->Report_ID]) ?></li>
                    <li>Latest Update:</li>
                </ul>
              </div>
              <!-- Comment Button -->
              <?php echo $this->Html->link("Comment", array('controller' => 'comments','action'=> 'commentModal', $myreport->Report_ID), array( 'class' => 'comment-button button')) ?>
            </div>
        </div>
        <?php endforeach; ?>
      </div>
      <div class="col-md-8 display-missing">
        <h1 class="map-banner">Missing People </h1>
        <?php foreach ($reports as $report): ?>
          <div class="row well missing-info">
              <div class="col-md-6">
                  <?php echo $this->Html->image('usericon2.png', ['alt' => 'Image of missing person', 'class' => 'photos-missing']); ?>
                  <div class="row comment-row">
                    <!-- Comment Button  -->
                    <?php echo $this->Html->link("Comment", array('controller' => 'comments','action'=> 'commentModal', $report->Report_ID), array( 'class' => 'comment-button button')) ?>
                  </div>
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
                      <li>Last Seen: <?php echo $this->Form->label('LastSeen', array('value' => $report->get('LastSeen'))); ?></li>
                  </ul>
              </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
</div>
<div class="containter-fluid map">
  <div class="row map-row">

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
    <div class="col-md-4">
      <?=
        // Override any of the following default options to customize your map
        $map_options = array(
          'id' => 'map_canvas',
          'width' => '500px',
          'height' => '500px',
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
