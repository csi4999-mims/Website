<!DOCTYPE html>
<html>
<head>
  <?= $this->Html->script("//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", [false]); ?>
  <?= $this->Html->script('https://maps.google.com/maps/api/js?key=AIzaSyD0h-HXglQ5F0qt0pCRanVJsPwO6EnJYBg&sensor=true', [false]); ?>
  <?= $this->Html->script("https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"); ?>
  <?= $this->Html->script("https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"); ?>
  <?= $this->Html->script("https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"); ?>
  <?= $this->Html->script("https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"); ?>
  <?= $this->Html->css('custom'); ?>
</head>
<body>
<div class="page-header">
    <h1> Welcome </h1>
</div>
<div class="containter-fluid">
  <div class="le-table">
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Cases By Name...">
  <table id="myTable">
  <tr class = "column-titles">
    <th class = "column-titles">Report ID</th>
    <th class = "column-titles">First Name</th>
    <th class = "column-titles">Last Name</th>
    <th class = "column-titles">DOB</th>
    <th class = "column-titles">Last Seen:</th>
    <th class = "column-titles">Status</th>
    <th class = "column-titles">Approve Case</th>
    <th class = "column-titles">Found?</th>
  </tr>
  <?php foreach ($TableReports as $TableReport): ?>
    <tr>
      <td class="report-number">
            <?= $this->Html->link($TableReport->Report_ID, ['controller' => 'reports','action' => 'detailedReport', $TableReport->Report_ID]) ?>
      </td>
      <td><?php echo $this->Form->label('FirstName', array('value' => $TableReport->get('FirstName'))); ?></td>
      <td><?php echo $this->Form->label('LastName', array('value' => $TableReport->get('LastName'))); ?></td>
      <td><?php echo $this->Form->label('DoB', array('value' => $TableReport->get('DoB'))); ?></td>
      <td><?php echo $this->Form->label('SeenWhen', array('value' => $TableReport->get('SeenWhen'))); ?></td>
      <td><?php echo $this->Form->label('status', array('value' => $TableReport->get('status'))); ?></td>
      <td><?php echo $this->Html->link("Approve", array('controller' => 'reports','action'=> 'approveModal', $TableReport->Report_ID), array( 'class' => 'approve-button button')) ?></td>
      <td><?php echo $this->Html->link("Mark As Found", array('controller' => 'reports','action'=> 'markFound', $TableReport->Report_ID), array( 'class' => 'button')) ?></td>
    </tr>
  <?php endforeach; ?>
</table>
</div>
</br>
<div class="containter-fluid map">
  <div class="page-header">
      <h1> Map of Missing People </h1>
  </div>
  <div class="row map-row law">
    <div class="col-md-8">
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
      <?php foreach ($TableReports as $TableReport): ?>
            <?= $this->GoogleMap->addMarker("map_canvas", 1, $TableReport->get('FamilyStreet') . $TableReport->get('FamilyCity') . $TableReport->get('FamilyState') . $TableReport->get('FamilyZip'), array(
          "showWindow"   => true,
          "windowText"   => "Name: " . $TableReport->get('FirstName') . " " . $TableReport->get('LastName') .  " DOB: " . $TableReport->get('DoB') . " Last Seen: "
          . $TableReport->get('SeenWhen'),
          "markerTitle"  => "Title",
          "markerIcon"   => "http://labs.google.com/ridefinder/images/mm_20_purple.png",
          "markerShadow" => "http://labs.google.com/ridefinder/images/mm_20_purpleshadow.png"
        )); ?>
      <?php endforeach; ?>
      <?= $this->GoogleMap->addMarker("map_canvas", 1, "400 6th St, Rochester, Michigan 48307",array('showWindow'   => true,
      'windowText'   => "Rochester Police: 400 6th St, Rochester, MI 48307")); ?>
      <?= $this->GoogleMap->addMarker("map_canvas", 1, "1899 N Squirrel Rd, Auburn Hills, Michigan 48326",array('showWindow'   => true,
      'windowText'   => "Auburn Hills Police: 1899 N Squirrel Rd, Auburn Hills, MI 48326")); ?>
      <?= $this->GoogleMap->addMarker("map_canvas", 1, "7550 Auburn Rd, Utica, Michigan 48317",array('showWindow'   => true,
      'windowText'   => "Utica Police: 7550 Auburn Rd, Utica, MI 48317")); ?>
      <?= $this->GoogleMap->addMarker("map_canvas", 1, "52530 Van Dyke, Shelby Charter Township, Michigan 48316",array('showWindow'   => true,
      'windowText'   => "Shelby Township Police: 52530 Van Dyke, Shelby Charter Township, MI 48316")); ?>
      <?= $this->GoogleMap->addMarker("map_canvas", 1, "280 13 Mile Rd, Madison Heights, Michigan 48071",array('showWindow'   => true,
      'windowText'   => "Madison Heights Police: 280 13 Mile Rd, Madison Heights, MI 48071")); ?>
    </div>
  </div>
</div>
<div class="containter-fluid graphs">
  <div class="page-header">
      <h1> Missing People Analytics </h1>
  </div>
  <canvas id="categoryPieChart"></canvas>
  <canvas id="statusBarChart"></canvas>

  <?php $inProgress = array();
  $hold = array();
  $found = array();
  $runaway = array();
  $romeoJuliet = array();
  $substanceAbuser = array();
  $humanTrafficking = array();
  ?>
  <?php foreach($reports as $report):
    if($report->get('status') == "In Progress"){
      $newInProgress = $report->get('status');
      array_push($inProgress, $newInProgress);
    }
    elseif($report->get('status') == "On Hold"){
      $newHold = $report->get('status');
      array_push($hold, $newHold);
    }
    elseif($report->get('status') == "Found"){
      $newFound = $report->get('status');
      array_push($found, $newFound);
    }
  endforeach;
  ?>
  <?php foreach($reports as $report):
    if($report->get('category') == "runaway"){
      $newRunaway = $report->get('category');
      array_push($runaway, $newRunaway);
    }
    elseif($report->get('category') == "romeo_juliet"){
      $newRomeoJuliet = $report->get('category');
      array_push($romeoJuliet, $newRomeoJuliet);
    }
    elseif($report->get('category') == "substance_abuser"){
      $newSubstanceAbuser = $report->get('category');
      array_push($substanceAbuser, $newSubstanceAbuser);
    }
    elseif($report->get('category') == "human_trafficking"){
      $newHumanTrafficking = $report->get('status');
      array_push($humanTrafficking, $newHumanTrafficking);
    }
  endforeach;
  ?>

</div>
</body>
</html>

<script>
var inProgress = <?php echo json_encode($inProgress) ?>;
var inProgressCount = inProgress.length;

var hold = <?php echo json_encode($hold) ?>;
var holdCount = hold.length;

var found = <?php echo json_encode($found) ?>;
var foundCount = found.length;

var runaway = <?php echo json_encode($runaway) ?>;
var runawayCount = runaway.length;

var romeoJuliet = <?php echo json_encode($romeoJuliet) ?>;
var romeoJulietCount = romeoJuliet.length;

var substanceAbuser = <?php echo json_encode($substanceAbuser) ?>;
var substanceAbuserCount = substanceAbuser.length;

var humanTrafficking = <?php echo json_encode($humanTrafficking) ?>;
var humanTraffickingCount = humanTrafficking.length;

var maxValue = Math.max(inProgressCount,holdCount,foundCount);

var ctx = document.getElementById('statusBarChart').getContext('2d');
var myBarChart = new Chart(ctx, {

    type: 'bar',
    data: {
        label: ["Missing People Status'"],
        datasets: [{
            label: "On Hold",
            backgroundColor: ["#3e95cd"],
            data: [holdCount],
        },
        {
            label: "In Progress",
            backgroundColor: ["#8e5ea2"],
            data: [inProgressCount],
        },
        {
            label: "Found",
            backgroundColor: ["#3cba9f"],
            data: [foundCount],
        }]
      },
      options: {
       responsive: true,
       legend: {
           position: 'top',
       },
       hover: {
           mode: 'label'
       },
       scales: {
           yAxes: [{
                   display: true,
                   ticks: {beginAtZero:true,max:maxValue}
               }]
       },
       title: {
           display: true,
           text: 'Missing People Status'
       }
   }
});

var ctx = document.getElementById('categoryPieChart').getContext('2d');
var myPieChart = new Chart(ctx, {

    type: 'pie',
    data: {
        labels: ["Runaway", "Romeo and Juliet", "Substance Abuser", "Human Trafficking"],
        datasets: [{
            label: "Missing People Category",
            backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f", "#ff6384"],
            data: [runawayCount, romeoJulietCount, substanceAbuserCount, humanTraffickingCount],
        }]
      },
      options: {
       responsive: true,
       legend: {
           position: 'top',
       },
       hover: {
           mode: 'label'
       },
       title: {
           display: true,
           text: 'Missing People Category'
       }
   }
});

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

//search functionality
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
