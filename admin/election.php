<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
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
<!--===============================================================================================-->
</head>
<body >
  
  <div class="limiter">

    <div class="container-login100">
 <div class="text-center">
  <!--<img src="images/UNC1.png" alt="UNC" style="width:40%;">  -->         
          </div>
      <div class="wrap-login100" style="width: 500px; margin-top:30px">
        <span class="login100-form-title" style="margin-top: -120px">
            CREATE ELECTION
          </span>
        <form class="login100-form validate-form" action="election_add.php" method="POST" style="margin-top: -50px">

          <div class="startDate" data-validate = "Start Date is required: mm-dd-yyyy">
           <label>Start Date</label>
            <input class="input100" id="startDate" class="startDate" style= "font-size: 18px;" type="date" name="startDate" placeholder="StartDate" required>
               <label>End Date</label>
            <input class="input100"id="endDate" style= "font-size: 18px;" type="date" name="endDate" placeholder="endDate" required>

            <label>Election Name</label>
            <input class="input100" id="election_name"style= "font-size: 18px; width: 350px;"  type="input" name="election_name" placeholder="Please enter the election name" required>
            
          </div>

  
          
          <div class="container-login100-form-btn">


            <button type="submit" id="create_election" action="election_add.php" name = "create_election" class="login100-form-btn">
              CREATE
            </button>
          </div>

        </form>
      </div>
    </div>
  </div>
  
   

</body>


</html>