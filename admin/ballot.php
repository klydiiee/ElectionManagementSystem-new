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

div.ex3 {
  background-color: lightgrey;
  width: 500px;
  height: 300px;
  overflow: auto;
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
  <h1><b>BALLOT FORMAT</b></h1>
              
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
        <a href="#print" style="margin-left: 0px;" data-toggle="modal" class="btn btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Print&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></button>
</div>
<div class="box-header with-border">
              <a href="#reset" style="margin-left: 0px;" data-toggle="modal" class="btn btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reset&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            </div>

<div class="box-header with-border">
              <a href="ballot.php" style="margin-left: 0px;" class="btn btn-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ballot Format&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            </div>

<div class="box-header with-border">


  
            </div>
  
     
    </form></div>




<!--Table here-->

 <div class="box-body">
  <div class="ex3">
              <section class="content">
 

      <div class="row">
        <div class="col-xs-10 col-xs-offset-1" id="content">
        </div>
      </div>
      
    </section>
            </div>
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


      </section>
      <!-- right col -->
    </div>
  

</div>
<!-- ./wrapper -->
<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
  fetch();

  $(document).on('click', '.reset', function(e){
    e.preventDefault();
    var desc = $(this).data('desc');
    $('.'+desc).iCheck('uncheck');
  });

  $(document).on('click', '.moveup', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    $('#'+id).animate({
      'marginTop' : "-300px"
    });
    $.ajax({
      type: 'POST',
      url: 'ballot_up.php',
      data:{id:id},
      dataType: 'json',
      success: function(response){
        if(!response.error){
          fetch();
        }
      }
    });
  });

  $(document).on('click', '.movedown', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    $('#'+id).animate({
      'marginTop' : "+300px"
    });
    $.ajax({
      type: 'POST',
      url: 'ballot_down.php',
      data:{id:id},
      dataType: 'json',
      success: function(response){
        if(!response.error){
          fetch();
        }
      }
    });
  });

});

function fetch(){
  $.ajax({
    type: 'POST',
    url: 'ballot_fetch.php',
    dataType: 'json',
    success: function(response){
      $('#content').html(response).iCheck({checkboxClass: 'icheckbox_flat-green',radioClass: 'iradio_flat-green'});
    }
  });
}
</script>
</body>
</html>
