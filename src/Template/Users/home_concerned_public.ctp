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
    <h1> Welcome </h1>
</div>

<div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
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
              <!-- View Comment Button trigger modal -->
              <button type="button" class="btn btn-primary view-comment-button" data-toggle="modal" data-target="#viewCommentModal">
                View Comments
              </button>
              <!-- Comment Button trigger modal -->
              <?php echo $this->Html->link("Comment", array('controller' => 'comments','action'=> 'commentModal', $myreport->Report_ID), array( 'class' => 'comment-button button')) ?>
            </div>
        </div>
        <?php endforeach; ?>
      </div>
      <legend><?php echo __('Missing People'); ?></legend>
      <div class="col-md-8 display-missing">
        <?php foreach ($reports as $report): ?>
          <div class="row well missing-info">
              <div class="col-md-6">
                  <?php echo $this->Html->image('usericon2.png', ['alt' => 'Image of missing person', 'class' => 'photos-missing']); ?>
                  <div class="row view-comment-row">
                    <!-- View Comment Button trigger modal -->
                    <button  type="button" class="btn btn-primary comment-button" data-toggle="modal" data-target="#viewCommentModal">
                      View Comments
                    </button>
                  </div>
                  <div class="row comment-row">
                    <!-- Comment Button trigger modal -->
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
          'width' => '400px',
          'height' => '400px',
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
