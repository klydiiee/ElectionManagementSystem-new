
<?php include 'includes/session.php'; ?>
<?php include 'includes/slugify.php'; ?>
<?php include 'includes/header.php'; ?>

 <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  

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


<!--Container Design-->
<style>

   div.ex3 {
  background-color: lightgrey;
  width: 800px;
  height: 100px;
  font-size: 10px;
  overflow: auto;

}

#election_dashboard {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#election_dashboard td, #election_dashboard th {
  border: 1px solid #ddd;
  padding: 8px;
}

#election_dashboard tr:nth-child(even){background-color: #f2f2f2;}

#election_dashboard tr:hover {background-color: #ddd;}

#election_dashboard th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

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

/* CSS */
.button-41 {
  background-color: initial;
  background-image: linear-gradient(-180deg, #00D775, #00BD68);
  border-radius: 5px;
  box-shadow: rgba(0, 0, 0, 0.1) 0 2px 4px;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: Inter,-apple-system,system-ui,Roboto,"Helvetica Neue",Arial,sans-serif;
  height: 44px;
  line-height: 44px;
  outline: 0;
  overflow: hidden;
  padding: 0 20px;
  pointer-events: auto;
  position: relative;
  text-align: center;
  touch-action: manipulation;
  user-select: none;
  -webkit-user-select: none;
  vertical-align: top;
  white-space: nowrap;
  width: 30%;
  z-index: 9;
  border: 0;
}

.button-41:hover {
  background: #00bd68;
}

/* CSS */
.button-43 {
  background-color: initial;
  background-image: linear-gradient(-130deg, black, grey);
  border-radius: 5px;
  box-shadow: rgba(0, 0, 0, 0.1) 0 2px 4px;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: Inter,-apple-system,system-ui,Roboto,"Helvetica Neue",Arial,sans-serif;
  height: 50px;
  line-height: 44px;
  outline: 0;
  overflow: hidden;
  padding: 0 20px;
  pointer-events: auto;
  position: relative;
  text-align: center;
  touch-action: manipulation;
  user-select: none;
  -webkit-user-select: none;
  vertical-align: top;
  white-space: nowrap;
  width: 102%;
  z-index: 9;
  border: 0;
}

.button-43:hover {
  background-image: linear-gradient(-130deg, black, grey);
}

/* CSS */
.button-42 {
  background-color: initial;
  background-image: linear-gradient(-60deg, black, grey);
  border-radius: 5px;
  box-shadow: rgba(0, 0, 0, 0.1) 0 2px 4px;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: Inter,-apple-system,system-ui,Roboto,"Helvetica Neue",Arial,sans-serif;
  height: 50px;
  line-height: 44px;
  outline: 0;
  overflow: hidden;
  padding: 0 20px;
  pointer-events: auto;
  position: relative;
  text-align: center;
  touch-action: manipulation;
  user-select: none;
  -webkit-user-select: none;
  vertical-align: top;
  white-space: nowrap;
  width: 50%;
  z-index: 9;
  border: 0;
}

.button-42:hover {
  background-image: linear-gradient(-60deg, black, grey);
}

  </style>


<!--LIVERESULT CIRCLE ICON DESIGN-->
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

          <div style="width: 850px; margin-top:20px">
                <a style="margin-top: 50px; margin-left: -650px">
            <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/unclogo.png'; ?>" class="user-image" alt="User Image" style="width:40px">
           <b> <span class="hidden-xs" style="font-size: 20px;"><?php echo "WELCOME   "; echo $user['firstname'].' '.$user['lastname']; ?></span> </b>
          </a></div>
          </span>
          <br>
        <br>

<form>
<div style="margin-top: -70px;" class="flex-container">
  <div >
<h3 class="text-center" > 
   <b><p style="font-size :20px; color: black;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ELECTION DATA CENTRE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p> </b></h3>
   <br>
<h3>__________________________________<p> 
    <h3><p style="margin-top: 15px;">
      Voters  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <b><?php
                $sql = "SELECT * FROM voters";
                $query = $conn->query($sql);

                echo "".$query->num_rows."";
              ?><a href="voters.php" button class="button-41" style="margin-top: -10px; margin-left: 88px"> VIEW</a></button>
     </b></h3> </p>


    <h3 style="margin-top: -10px;">__________________________________ <p>
      <h3><p style="margin-top: 15px;">
      Candidates &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <b><?php
                $sql = "SELECT * FROM candidates";
                $query = $conn->query($sql);

                echo "".$query->num_rows."";
              ?><a href="candidates.php" button class="button-41" style="margin-top: -10px; margin-left: 88px"> VIEW</a></button></b></h3></p>
             
    <h3 style="margin-top: -10px;">__________________________________ <p>
      <h3><p style="margin-top: 15px;">
        Position &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b><?php
                $sql = "SELECT * FROM positions";
                $query = $conn->query($sql);

                echo "".$query->num_rows."";
              ?><a href="position.php" button class="button-41" style="margin-top: -10px; margin-left: 88px">VIEW</a></button></b></h3> </p>

    <h3 style="margin-top: -10px;">__________________________________ <p>
      <h3><p style="margin-top: 15px;">
      Partylist &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b> <?php
                $sql = "SELECT * FROM partylist";
                $query = $conn->query($sql);

                echo "".$query->num_rows."";
              ?><a href="partylist.php" button class="button-41" style="margin-top: -10px; margin-left: 88px"> VIEW</a></button></b></h3></p>
              <h3 style="margin-top: -10px;">__________________________________ <p> 
  </div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;





<div style="margin-top: 4px;" class="flex-container">
  <div>

  <h3 class="text-center" > 
   <b><p style="font-size :20px; color: black; margin-top: -13px;" >NUMBER&nbsp;OF&nbsp;STUDENT&nbsp;BY&nbsp;DEPARTMENT </p> </b></h3>

<br><br>

<h3>
  <button class="button-42" style="margin-top: -10px;">
    <?php
 
 $sql = "SELECT * FROM voters WHERE department='CAS'";
                $query = $conn->query($sql);

                echo "CAS ".$query->num_rows."";
                ?></button>


<button class="button-42" style="margin-top: 10px;">
  
 <?php
  $sql = "SELECT * FROM voters WHERE department='CEA'";
                $query = $conn->query($sql);

                echo "CEA ".$query->num_rows."";


                ?>
</button>


<button class="button-42" style="margin-top: 10px;">
  <?php
  $sql = "SELECT * FROM voters WHERE department='CJE'";
                $query = $conn->query($sql);

                echo "CJE ".$query->num_rows."";
                ?>
</button>

<button class="button-42" style="margin-top: -170px; margin-left: 185px;">
  <?php
  $sql = "SELECT * FROM voters WHERE department='CBA'";
                $query = $conn->query($sql);

                echo "CBA ".$query->num_rows."";
                ?>
</button>

<button class="button-42" style="margin-top: -130px; margin-left: 185px;">
  <?php
  $sql = "SELECT * FROM voters WHERE department='CN'";
                $query = $conn->query($sql);

                echo "CN ".$query->num_rows."";
                ?>
</button>


<button class="button-42" style="margin-top: -90px; margin-left: 185px;">
 <?php
  $sql = "SELECT * FROM voters WHERE department='CED'";
                $query = $conn->query($sql);

                echo "CED ".$query->num_rows."";
                ?>
</button>

<button class="button-43" style="margin-top: -50px;">
<?php
 $sql = "SELECT * FROM voters WHERE department='CCS'";
                $query = $conn->query($sql);

                echo "CCS ".$query->num_rows."";
                ?>
</button>

 
</div>
</div>

</div>

  
</body>

<section class="box bg-gray" style="border-radius: 10px; margin-top:5px;">
  <h3><br>
   <b>&nbsp;&nbsp;&nbsp;ELECTION TURNOUT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="form-group" style="margin-top: -25px; margin-left: 200px;">
              
                 <select name="career" id="career" onchange="location = this.value;">
                 
                  <option value="home_turnout_departments.php" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;DEPARTMENTS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>

                  <option value="home_turnout_positions.php" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;POSITIONS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>

                  <option value="home.php" selected disabled>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ALL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>

                  </select>
              </div></b></h3>
<br>
&nbsp;&nbsp;&nbsp;

<?php 
//Election turnout for president

$sq = "SELECT * FROM voters";
 $query = $conn->query($sq);
                 $totalvoter = $query->num_rows;
$sql = "SELECT * FROM votes WHERE position_id='11'";
                $query = $conn->query($sql);
                 


                
                $totalGov = $query->num_rows;

                if($totalGov == 0 || $totalvoter == 0){

                  echo "PRESIDENT  0%";
                }

                else{
                  $per=0.00;
                $per = 100/($totalvoter / $totalGov); 

               // echo number_format((float)$foo, 2, '.', '');

                echo "PRESIDENT  ".number_format((float)$per, 2, '.', '')."%";
              }
              ?><br>
&nbsp;&nbsp;&nbsp;&nbsp;<?php 
//Election turnout for vicepresident
$sq = "SELECT * FROM voters";
 $query = $conn->query($sq);
                 $totalvoter = $query->num_rows;
$sql = "SELECT * FROM votes WHERE position_id='12'";
                $query = $conn->query($sql);
                 
                $totalGov = $query->num_rows;

                if($totalGov == 0 || $totalvoter == 0){

                  echo "VICE PRESIDENT  0%";
                }

                else{
                  $per=0.00;
                $per = 100/($totalvoter / $totalGov); 

                echo "VICE PRESIDENT  ".number_format((float)$per, 2, '.', '')."%";
              }
?><br>
&nbsp;&nbsp;&nbsp;&nbsp;<?php 
//Election turnout for CCS
$sq = "SELECT * FROM voters";
 $query = $conn->query($sq);
                 $totalvoter = $query->num_rows;
$sql = "SELECT * FROM votes WHERE department='CAS'";
                $query = $conn->query($sql);
                 
                $totalGov = $query->num_rows;

                if($totalGov == 0 || $totalvoter == 0){

                  echo "CAS  0%";
                }

                else{
                $per=0.00;
                $per = 100/($totalvoter / $totalGov); 

                echo "CAS  ".number_format((float)$per, 2, '.', '')."%";
              }

?><br>
&nbsp;&nbsp;&nbsp;


<?php 
//Election turnout for CCS
$sq = "SELECT * FROM voters";
 $query = $conn->query($sq);
                 $totalvoter = $query->num_rows;
$sql = "SELECT * FROM votes WHERE department='CCS'";
                $query = $conn->query($sql);
                 
                $totalGov = $query->num_rows;

                if($totalGov == 0 || $totalvoter == 0){

                  echo "CCS  0%";
                }

                else{
                $per=0.00;
                $per = 100/($totalvoter / $totalGov); 

                echo "CCS  ".number_format((float)$per, 2, '.', '')."%";
              }

?><br>
&nbsp;&nbsp;&nbsp;


<?php 
//Election turnout for CCS
$sq = "SELECT * FROM voters";
 $query = $conn->query($sq);
                 $totalvoter = $query->num_rows;
$sql = "SELECT * FROM votes WHERE department='CJE'";
                $query = $conn->query($sql);
                 
                $totalGov = $query->num_rows;

                if($totalGov == 0 || $totalvoter == 0){

                  echo "CJE  0%";
                }

                else{
                $per=0.00;
                $per = 100/($totalvoter / $totalGov); 

                echo "CJE  ".number_format((float)$per, 2, '.', '')."%";
              }

?><br>
&nbsp;&nbsp;&nbsp;


<?php 
//Election turnout for CBA
$sq = "SELECT * FROM voters";
 $query = $conn->query($sq);
                 $totalvoter = $query->num_rows;
$sql = "SELECT * FROM votes WHERE department='CBA'";
                $query = $conn->query($sql);
                 
                $totalGov = $query->num_rows;

                if($totalGov == 0 || $totalvoter == 0){

                  echo "CBA  0%";
                }

                else{
                $per=0.00;
                $per = 100/($totalvoter / $totalGov); 

                echo "CBA  ".number_format((float)$per, 2, '.', '')."%";
              }

?><br>
&nbsp;&nbsp;&nbsp;


<?php 
//Election turnout for CN
$sq = "SELECT * FROM voters";
 $query = $conn->query($sq);
                 $totalvoter = $query->num_rows;
$sql = "SELECT * FROM votes WHERE department='CN'";
                $query = $conn->query($sql);
                 
                $totalGov = $query->num_rows;

                if($totalGov == 0 || $totalvoter == 0){

                  echo "CN  0%";
                }

                else{
                $per=0.00;
                $per = 100/($totalvoter / $totalGov); 

                echo "CN  ".number_format((float)$per, 2, '.', '')."%";
              }

?><br>
&nbsp;&nbsp;&nbsp;


<?php 
//Election turnout for CED
$sq = "SELECT * FROM voters";
 $query = $conn->query($sq);
                 $totalvoter = $query->num_rows;
$sql = "SELECT * FROM votes WHERE department='CED'";
                $query = $conn->query($sql);
                 
                $totalGov = $query->num_rows;

                if($totalGov == 0 || $totalvoter == 0){

                  echo "CED  0%";
                }

                else{
                $per=0.00;
                $per = 100/($totalvoter / $totalGov); 

                echo "CED  ".number_format((float)$per, 2, '.', '')."%";
              }

?><br>
&nbsp;&nbsp;&nbsp;


<?php 
//Election turnout for CEA
$sq = "SELECT * FROM voters WHERE department = 'CEA'";
 $query = $conn->query($sq);
                 $totalvoter = $query->num_rows;
$sql = "SELECT * FROM votes WHERE department='CEA'";
                $query = $conn->query($sql);
                 
                $totalGov = $query->num_rows;

                if($totalGov == 0 || $totalvoter == 0){

                  echo "CEA  0%";
                }

                else{
                $per=0.00;
                $per = 100/($totalvoter / $totalGov); 

                echo "CEA  ".number_format((float)$per, 2, '.', '')."%";
              }

?>


    <br><br>
  </section>






































<!--NEW DASHBOARD-->
<section class="box bg-gray" style="border-radius: 10px; margin-top:5px;">

<div class="box-header with-border">
              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat">ADD ELECTION</a>
            </div>

<!--Table here-->
 <div class="box-body">
  <div class="ex3">
              <table id="election_dashboard" class="table table-bordered">
                <thead>
                  <th><center>NAME&nbsp;OF&nbsp;ELECTION</center></th>
                  <th><center>START</center></th>
                  <th><center>END</center></th>
                  <th><center>STATUS</center></th>
                  <th><center>ACTIONS</center></th>
               
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT * FROM election";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      
                      echo "
                        <tr>
                          <td>".$row['election_name']."</td>
                          <td>".$row['startDate']."</td>
                          <td>".$row['endDate']."</td>
                          <td></td>
             
                          <td>
                           
                          </td>
                        </tr>
                      ";
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>


  </section>
<!--END OF NEW DASHBOARD-->



















































    <section class="box bg-gray" style="border-radius: 10px; margin-top:5px;">
  <div class="video__icon" style= "margin-top:-10px;">
  <div class="circle--outer"></div>
  <div class="circle--inner"></div>
  </div>  
   <br><br>
    <section style= "margin-top:-10px;"> <H2 ><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LIVE RESULT</b> </H2></section>
    <br>
  </section>


      <?php
      echo "";
        $sql = "SELECT * FROM positions ORDER BY priority ASC";
        $query = $conn->query($sql);
        $inc = 2;
        while($row = $query->fetch_assoc()){
          $inc = ($inc == 2) ? 1 : $inc+1; 
          if($inc == 1) echo "<div class='row'>";
          echo "
            <div class='col-sm-6'>
              <div class='box box-solid'>
                <div class='box-header with-border'>
                  <h4 class='box-title'><b>".$row['description']."</b></h4>
                </div>
                <div class='box-body'>
                  <div class='chart'>
                    <canvas id='".slugify($row['description'])."' style='height:200px'></canvas>
                  </div>
                </div>
              </div>
            </div>
          ";
          if($inc == 2) echo "</div>";  
        }
        if($inc == 1) echo "<div class='col-sm-6'></div></div>";
      ?>

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