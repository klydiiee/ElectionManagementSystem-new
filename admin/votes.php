<?php include 'includes/session.php'; ?>
<?php include 'includes/slugify.php'; ?>
<?php include 'includes/header.php'; ?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="../image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../css/util.css">
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  

  .flex-container {
  display: flex;
}

.flex-container > div {
  background-color: lightgrey;
  margin: 5px;
  padding: 10px;
  font-size: 15px;
  box-shadow: black;
  border-radius: 10px;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
  </style>


<body >
  
  <div class="limiter">

    <div class="container-login100">



 <div class="text-center">



  <!--<img src="images/UNC1.png" alt="UNC" style="width:40%;">  -->         
          </div>
      <div class="wrap-login100" style="width: 1050px; margin-top:70px">

        <span class="login100-form-title" style="margin-top: -180px">
<div class="topnav">
            <a href="home.php">&nbsp;Dashboard</a>
            <a href="voters.php">&nbsp;Students&nbsp;</a>
            <a href="candidates.php">&nbsp;Candidates&nbsp;</a>
            <a href="partylist.php">Partylist&nbsp&nbsp;</a>
            <a href="positions.php">&nbsp;Positions</a>
            <a href="votes.php">&nbsp;&nbsp;Reports</a>
            <a href="logout.php">&nbsp;Sign out&nbsp;&nbsp;</a>            
</div>
 <div class="box-header with-border">
              <!--
              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
-->
  <h1><b>VOTE LOGS</b></h1>
              
</div>

          <div style="width: 820px; margin-top:20px">
                   <section class="content">
     

      
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

           
</div>
<br>
<br>

          </span>
          <br>
        <br>


<div style="margin-top: -120px; margin-left: 50px;"  class="flex-container">
<div class="flex-container">
    <form method="POST" action="excelUpload.php" enctype="multipart/form-data">
     
      <div class="form-group">
        <a href="print.php" style="margin-left: 0px;" class="btn btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRINT RESULT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></button>
</div>
<div class="box-header with-border">
              <a href="#reset" style="margin-left: 0px;" data-toggle="modal" class="btn btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CLEAR VOTES&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            </div>

<div class="box-header with-border">
              <a href="ballot.php" style="margin-left: 0px;" class="btn btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BALLOT FORMAT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            </div>
     
    </form></div>




<!--Table here-->
 <div class="box-body">
              <table  class="table table-bordered">
                <thead>
                  <th class="hidden"></th>
                  <th>Position</th>
                  <th>Candidate</th>
                  <th>Voter</th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT *, candidates.firstname AS canfirst, candidates.lastname AS canlast, voters.firstname AS votfirst, voters.lastname AS votlast FROM votes LEFT JOIN positions ON positions.id=votes.position_id LEFT JOIN candidates ON candidates.id=votes.candidate_id LEFT JOIN voters ON voters.id=votes.voters_id ORDER BY positions.priority ASC";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      echo "
                        <tr>
                          <td class='hidden'></td>
                          <td>".$row['description']."</td>
                          <td>".$row['canfirst'].' '.$row['canlast']."</td>
                          <td>".$row['votfirst'].' '.$row['votlast']."</td>
                        </tr>
                      ";
                    }
                  ?>
                </tbody>
              </table>
            </div>








          </div>
        </div>
      </div>
    </section>   
  </div>
    
  <?php include 'includes/votes_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>


</div>

  
</body>
















<style>
  *:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.video__icon {
  position: absolute;
  width: 50px;
  left: 20px;
  top: 20px; }
  .video__icon .circle--outer {
    border: 1px solid #e50040;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    margin: 0 auto 5px;
    position: relative;
    opacity: .8;
    -webkit-animation: circle 2s ease-in-out infinite;
            animation: circle 2s ease-in-out infinite; }
  .video__icon .circle--inner {
    background: #e50040;
    left: 15px;
    top: 10px;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    position: absolute;
    opacity: .8; }
    .video__icon .circle--inner:after {
      content: '';
      display: block;
      border: 2px solid #e50040;
      border-radius: 50%;
      width: 28px;
      height: 28px;
      top: -4px;
      left: -4px;
      position: absolute;
      opacity: .8;
      -webkit-animation: circle 2s ease-in-out .2s infinite;
              animation: circle 2s ease-in-out .2s infinite; }
  .video__icon p {
    color: #000;
    text-align: center; }

@-webkit-keyframes circle {
  from {
    -webkit-transform: scale(1);
            transform: scale(1); }
  
  to {
    -webkit-transform: scale(1.5);
            transform: scale(1.5);
    opacity: 0; } }

@keyframes circle {
  from {
    -webkit-transform: scale(1);
    transform: scale(1);
    }
  
  to {
    -webkit-transform: scale(1.5);
    transform: scale(1.5);
    opacity: 0;
    } }

</style>


      </section>
      <!-- right col -->
    </div>
  

</div>
<!-- ./wrapper -->

<?php include 'includes/scripts.php'; ?>
<?php
  $sql = "SELECT * FROM positions ORDER BY priority ASC";
  $query = $conn->query($sql);
  while($row = $query->fetch_assoc()){
    $sql = "SELECT * FROM candidates WHERE position_id = '".$row['id']."'";
    $cquery = $conn->query($sql);
    $carray = array();
    $varray = array();
    while($crow = $cquery->fetch_assoc()){
      array_push($carray, $crow['lastname']);
      $sql = "SELECT * FROM votes WHERE candidate_id = '".$crow['id']."'";
      $vquery = $conn->query($sql);
      array_push($varray, $vquery->num_rows);
    }
    $carray = json_encode($carray);
    $varray = json_encode($varray);
    ?>
    <script>
    $(function(){
      var rowid = '<?php echo $row['id']; ?>';
      var description = '<?php echo slugify($row['description']); ?>';
      var barChartCanvas = $('#'+description).get(0).getContext('2d')
      var barChart = new Chart(barChartCanvas)
      var barChartData = {
        labels  : <?php echo $carray; ?>,
        datasets: [
          {
            label               : 'Votes',
            fillColor           : 'rgba(60,141,188,0.9)',
            strokeColor         : 'rgba(60,141,188,0.8)',
            pointColor          : '#3b8bba',
            pointStrokeColor    : 'rgba(60,141,188,1)',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data                : <?php echo $varray; ?>
          }
        ]
      }
      var barChartOptions                  = {
        //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
        scaleBeginAtZero        : true,
        //Boolean - Whether grid lines are shown across the chart
        scaleShowGridLines      : true,
        //String - Colour of the grid lines
        scaleGridLineColor      : 'rgba(0,0,0,.05)',
        //Number - Width of the grid lines
        scaleGridLineWidth      : 1,
        //Boolean - Whether to show horizontal lines (except X axis)
        scaleShowHorizontalLines: true,
        //Boolean - Whether to show vertical lines (except Y axis)
        scaleShowVerticalLines  : true,
        //Boolean - If there is a stroke on each bar
        barShowStroke           : true,
        //Number - Pixel width of the bar stroke
        barStrokeWidth          : 2,
        //Number - Spacing between each of the X value sets
        barValueSpacing         : 5,
        //Number - Spacing between data sets within X values
        barDatasetSpacing       : 1,
        //String - A legend template
        legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
        //Boolean - whether to make the chart responsive
        responsive              : true,
        maintainAspectRatio     : true
      }

      barChartOptions.datasetFill = false
      var myChart = barChart.HorizontalBar(barChartData, barChartOptions)
      //document.getElementById('legend_'+rowid).innerHTML = myChart.generateLegend();
    });
    </script>
    <?php

  }
?>
</body>
</html>