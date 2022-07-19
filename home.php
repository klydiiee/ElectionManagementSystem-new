
<?php include 'includes/session.php'; ?>
<?php include 'includes/slugify.php'; ?>
<?php include 'includes/header.php'; ?>

 <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="../image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
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
          
            <a href="logout.php" style="margin-left: 710px">&nbsp;Sign out&nbsp;&nbsp;</a>            
</div>

         
          </span>
          <br>
        <br>
        <form>
















<div style="margin-top: -150px; margin-left: 20px;" class="flex-container">
  <div >

<!--box grey -->




<!-- Main content -->
        <section class="content ">
       
      <div class="text-center">
        <?php

        echo "<img src='image-name.png' >"; 

        ?>  
       </div> 

          <?php
              $sql = "SELECT * FROM votes WHERE voters_id = '".$voter['id']."'";
              $vquery = $conn->query($sql);
              if($vquery->num_rows > 0){
                ?>
                <div class="text-center">
                  <br>
                  <h3>You have already voted for this election. Thank You!</h3>
                  <div class = "text-center">
                    <a href = "#view" data-toggle="modal" type="button" class="login100-form-btn" id="votenow"><h2>View Ballot</h2></a></button>  
               
                <?php
              }
              else{
                ?>
                <div class="text-center">
                   
                   <br>

                </div>
                <div class = "text-center">
                    <a href = "vote.php" button  type="button" class="login100-form-btn" id="votenow"><h2> VOTE NOW</h2></a></button> 
                </div>
                <!--

                <div class = "text-center">
                    <button  type="button" style="font-size:30px" class="btn bg-white btn-flat" id="votenow"><a href = "candidates.php" style='background-color:lightgray;' ><i class="fa fa-black-tie"></i> VIEW CANDIDATES</a></button> 
                </div>
         -->
                <?php
              }

            ?>

     
        </section>

  </div>

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


    <?php include 'includes/ballot_modal.php'; ?>


<?php include 'includes/scripts.php'; ?>
<script>

$(function(){
  $('.content').iCheck({
    checkboxClass: 'icheckbox_flat-green',
    radioClass: 'iradio_flat-green'
  });

  $(document).on('click', '.reset', function(e){
      e.preventDefault();
      var desc = $(this).data('desc');
      $('.'+desc).iCheck('uncheck');
  });

  $(document).on('click', '.platform', function(e){
    e.preventDefault();
    $('#platform').modal('show');
    var platform = $(this).data('platform');
    var fullname = $(this).data('fullname');
    $('.candidate').html(fullname);
    $('#plat_view').html(platform);
  });

  $('#preview').click(function(e){
    e.preventDefault();
    var form = $('#ballotForm').serialize();
    if(form == ''){
      $('.message').html('You must vote atleast one candidate');
      $('#alert').show();
    }
    else{
      $.ajax({
        type: 'POST',
        url: 'preview.php',
        data: form,
        dataType: 'json',
        success: function(response){
          if(response.error){
            var errmsg = '';
            var messages = response.message;
            for (i in messages) {
              errmsg += messages[i]; 
            }
            $('.message').html(errmsg);
            $('#alert').show();
          }
          else{
            $('#preview_modal').modal('show');
            $('#preview_body').html(response.list);
          }
        }
      });
    }
    
  });

});

</script>


</body>
</html>
