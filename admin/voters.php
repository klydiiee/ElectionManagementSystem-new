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
  
  div.ex3 {
  background-color: lightgrey;
  width: 800px;
  height: 350px;
  font-size: 10px;
  overflow: auto;

}

#student_table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#student_table td, #student_table th {
  border: 1px solid #ddd;
  padding: 8px;
}

#student_table tr:nth-child(even){background-color: #f2f2f2;}

#student_table tr:hover {background-color: #ddd;}

#student_table th {
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
            <a href="partylist.php">Partylist&nbsp;&nbsp;</a>
            <a href="positions.php">&nbsp;Positions</a>
            <a href="votes.php">&nbsp;&nbsp;Reports</a>
            <a href="logout.php">&nbsp;Sign out&nbsp;&nbsp;</a>            
</div>
 <div class="box-header with-border">
              <!--
              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
-->
              <h1><b>STUDENT</b></h1>
</div>

          <div style="width: 820px; margin-top:20px">
                   <section class="content">
    

  <!-- for spacing after student   
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

           
</div>
-->

<br>


          </span>
          <br>
        <br>

<div style="margin-top: -120px; margin-left: -90px;"  class="flex-container">
<div class="flex-container">
    <form method="POST" action="excelUpload.php" enctype="multipart/form-data">
      <div class="form-group" style="width:149px">
        <label>Import Student</label>
        <input type="file" name="file" class="form-control" required="">
      </div>
      <div class="form-group">
        <button type="submit" style="margin-left: 0px;" name="Submit" class="btn btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Upload&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
</div>
<br>
  <!--<div class="box-header with-border">

              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manual Input&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            </div> -->
<br>
  
        <div class="form-group">
               <label  for="voters" class="col-sm-3 control-label">Filter&nbsp;By&nbsp;Dept.</label>
                 <select name="career" id="career" onchange="location = this.value;">
                 
                  <option value="voters_CSS.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CCS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>

                  <option value="voters_CAS.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CAS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>

                  <option value="voters_CBA.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CBA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>

                  <option value="voters_CEA.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CEA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>

                  <option value="voters_CN.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>

                  <option value="voters_CJE.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CJE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>

                  <option value="voters_CED.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CED&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>

                  <option value="voters.php" selected disabled>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ALL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>

                  </select>
              </div>










    </form></div>

<!--Table here-->
 <div class="box-body">
  <div class="ex3">
              <table id="student_table" class="table table-bordered">
                <thead>
                  <th><center>Student&nbsp;ID</center></th>
                  <th><center>Lastname</center></th>
                  <th><center>Firstname</center></th>
                  <th><center>Year&nbsp;Level</center></th>
                  <th><center>Department</center></th>
                  <th><center>Email</center></th>
                  <th><center>Actions</center></th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT * FROM voters";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      
                      echo "
                        <tr>
                          <td>".$row['student_id']."</td>
                          <td>".$row['lastname']."</td>
                          <td>".$row['firstname']."</td>
                          <td>".$row['year_level']."</td>
                          <td>".$row['department']."</td>
                          <td>".$row['email']."</td>
                          <td>
                            <button class='btn edit btn-flat' data-id='".$row['id']."'>Edit</button>

                            <button class='btn delete btn-flat' data-id='".$row['id']."'> Delete</button>
                          </td>
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
  </div>
    
  <?php include 'includes/voters_modal.php'; ?>
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
  }); $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  }); $(document).on('click', '.delete', function(e){
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

});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'voters_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.id').val(response.id);
      $('#edit_student_id').val(response.student_id);
      $('#edit_firstname').val(response.firstname);
      $('#edit_lastname').val(response.lastname);
      $('#edit_year_level').val(response.year_level);
      $('#edit_email').val(response.email);
      $('#edit_department').val(response.department);
      $('#edit_password').val(response.password);
      $('.fullname').html(response.firstname+' '+response.lastname);
    }
  });
}
</script>
</body>
</html>