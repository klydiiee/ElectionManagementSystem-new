
<?php
    session_start();
    include 'includes/conn.php';

    if(isset($_SESSION['admin'])){

        $count = 0;
        $id = 0;

        $sql = "SELECT * FROM election";
        $query = $conn->query($sql);

        while($row = $query->fetch_assoc()){
            $id = $id+1;

        }

        echo $id ;

        if($id == 0){
      header('location:election.php');
        }
        elseif($id >= 1){
        header('location:home.php');
        }

    }
?>








<?php include 'includes/header.php'; ?>
<head>
  <title>Login V1</title>
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
            <img style="max-width: 900px;  margin-left: -40px; height: 300px;" src="../images/sample.png" alt="IMG">
        </div>

        <form class="login100-form validate-form" action="login.php" method="POST">

          <span class="login100-form-title" style="margin-top: -120px;">
            Admin Login
          </span>

          <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">

            <input class="input100" type="text" name="username" placeholder="Email" required>
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
          
          <div class="container-login100-form-btn">


            <button type="submit" name = "login" class="login100-form-btn">
              Login
            </button>
          </div>

          <div class="text-center p-t-12">
            <p class="text-inverse text-left m-b-7">Login As <a href="../index.php"><b>Student</b></a> or  <a href="../staff/index.php"><b>Staff</b></a></p>
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
<?php include 'includes/scripts.php' ?>
</body>
</html>