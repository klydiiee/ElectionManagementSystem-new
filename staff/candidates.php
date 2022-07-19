
 <?php include 'includes/session.php'; ?>
<?php include 'includes/slugify.php'; ?>
<?php include 'includes/header.php'; ?>

 <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
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
              <h1><b>CANDIDATES</b></h1>
</div>

          <div style="width: 820px; margin-top:20px">
                   <section class="content">
       <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

           
</div>
<br>
<br>

          </span>
          <br>
        <br>


<div style="margin-top: -120px; margin-left: -40px;"  class="flex-container">
<div class="flex-container">
    <form method="POST" action="excelUpload.php" enctype="multipart/form-data">
      <div class="form-group" style="width:169px">
        <label>Import Student</label>
        <input type="file" name="file" class="form-control" required="">
      </div>
     
      <div class="form-group">
        <button type="submit" style="margin-left: 0px;" name="Submit" class="btn btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Upload&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
   
        <div class="box-header with-border">

              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Position&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            </div>
</div>
<br>
        <div class="form-group">
               <label for="voters" class="col-sm-3 control-label">Filter</label>
                <select name="department" id="department" style="width: 149px !important; min-width: 149px; max-width: 400px;">
                    <option value="">filter by:</option>
                    <option value="year_level">Year Level</option>
                    <option value="department">Department</option>
                    <option value="position">Position</option>
                    <option value="partylist">Partylist</option>
                   
                </select>
              </div>
    </form></div>




<!--Table here-->
<table id="example1" class="table table-bordered">
                <thead>
                  <th class="hidden"></th>
                  <th>Photo</th>
                  <th>Voters&nbsp;Id</th>
                  <th>Fullname</th>
                  <th>Platform</th>
                  <th>Position</th>
                  <th>Partylist</th>
                  
                </thead>
                <tbody>
                  <?php
                  
                     $sql = "SELECT *, candidates.id AS canid FROM candidates LEFT JOIN voters ON voters.id=candidates.voter_id LEFT JOIN positions ON positions.id=candidates.position_id LEFT JOIN partylist ON partylist.id=candidates.party_id ORDER BY positions.priority ASC";


                    $query = $conn->query($sql);
                   
                    while($row = $query->fetch_assoc()){
                  
                      $image = (!empty($row['photo'])) ? '../images/'.$row['photo'] : '../images/profile.jpg';
                      echo "
                        <tr>
                          <td class='hidden'></td>
                          <td>
                            <img src='".$image."' width='40px' height='40px'>
                            <a href='#edit_photo' data-toggle='modal' class='pull-right photo' data-id='".$row['canid']."'><span class='fa fa-edit'></span></a>
                          </td>
                          <td>".$row['student_id']."</td>
                          <td>".$row['firstname']." ".$row['lastname']."</td>
                          <td><a href='#platform' data-toggle='modal' class='btn btn-info btn-sm btn-flat bg-gray platform' data-id='".$row['canid']."'><i class='fa fa-search'></i> View</a></td>
                          <td>".$row['description']."</td>
                          <td>".$row['partyname']."</td>
                          
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
  <?php include 'includes/candidates_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.photo', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.platform', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'candidates_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.id').val(response.canid);
      $('#edit_voter').val(response.voter_id).html(response.voters_id);;
      $('#posselect').val(response.position_id).html(response.description); 
      $('#parselect').val(response.party_id).html(response.partyname);         
      $('#edit_platform').val(response.platform);
     
      $('.fullname').html(response.firstname+' '+response.lastname);
      $('#desc').html(response.platform);
    }
  });
}
</script>

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
 
</body>
</html>




