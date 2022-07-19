<!--
auth_username=studentelectioncommision@gmail.com
auth_password=1706560Klyde
-->

<!--new account for SEC-->

  <!--
auth_username=studentelectioncommision@gmail.com
auth_password=1706560Klyde
-->
<?php
   // session_start();
    include 'includes/conn.php';
    include 'login.php';

    if(isset($_SESSION['admin'])){
      header('location: admin/home.php');
    }

    if(isset($_SESSION['voter'])){
      $sql = "SELECT startDate,endDate FROM election";
      $query = $conn->query($sql);
      $row = $query->fetch_assoc();

      $start = $row['startDate'];
      $end = $row['endDate'];

        $timezone = date("Y-m-d");

      if($start > $timezone){
         echo '<script type="text/javascript">';
          echo 'alert("Sorry, voting has not yet starting")';

          echo '</script>';
      }
      else{
        if($end < $timezone){
            echo '<script type="text/javascript">';
            echo 'alert("Sorry the voting has ENDED")';

            echo '</script>';

            exit;

        //     header('location: index.php');
        }
      
  }
    }
?>
<?php include 'includes/header.php'; ?>




<!DOCTYPE html>
<html lang="en">


<head>
  <title>Election Management System</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
 


 
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/ ncss" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
  
  <div class="limiter">

    <div class="container-login100">
      <div class="text-center">
                               <img src="images/UNC1.png" alt="UNC" style="width:50%;">
                     
                            
                            </div>
      <div class="wrap-login100">
        <div class="login100-pic" style="margin-top: -120px;">
          <img style="max-width: 900px;  margin-left: -40px; height: 300px;" src="images/sample.png" alt="IMG">
        </div>

        <form class="login100-form validate-form" action="index.php" method="POST">

          <span class="login100-form-title" style="margin-top: -120px;">
            Student Login
          </span>
          <?php
              if(count($errors) > 0){
          ?>
              <div class="alert alert-danger text-center">
                  <?php
                    foreach($errors as $showerror){
                      echo $showerror;
                    }
                  ?>
              </div>
          <?php
              }
          ?>

          <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">

            <input class="input100" type="email" name="voter" placeholder="Email" required>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
          </div>

         <div class="wrap-input100 validate-input" data-validate = "Password is required">

      
            <input class="input100" type="password" name="password" placeholder="Password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
          </div>


          <div class="form-group">
                        <input class="login100-form-btn" type="submit" name="login" value="Login">
                    </div>

          <div class="text-center p-t-12">
            <p class="text-inverse text-left m-b-7">Login As <a href="admin/index.php"><b>Admin</b></a> or  <a href="staff/index.php"><b>Staff</b></a></p>
          </div>

          
        </form>
      </div>
    </div>
  </div>
  
  

  
<!--===============================================================================================-->  
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/tilt/tilt.jquery.min.js"></script>
  <script >
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>

</body>


</html>