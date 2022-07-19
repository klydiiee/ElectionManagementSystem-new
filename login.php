<?php
	session_start();
	include 'includes/conn.php';



 $email = "kl.olitoquit123@gmail.com";

$errors = array();


	if(isset($_POST['login'])){

    $email = mysqli_real_escape_string($conn, $_POST['voter']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_query($conn, "SELECT password FROM user WHERE email = '$email'");
    $pass_check = mysqli_fetch_row($cpassword);

    $email_check = "SELECT * FROM user WHERE email = '$email'";
    $res = mysqli_query($conn, $email_check);

    
    if(mysqli_num_rows($res) == 1){
   
    if($password == $pass_check[0]){
         $code = rand(999999, 111111);
        $status = "notverified";
        $insert_data = "UPDATE user SET code='$code', status='$status'
                        WHERE email='$email'";
        $data_check = mysqli_query($conn, $insert_data);
        
        $data1 = "For security reasons, this code will expire within 1 hour.";
                        $data2 = "Greetings, Your OTP code is: $code";

        if($data_check){
            $subject = "UNC One Time Password";
            $message =   "{$data2}\r\n\r\n{$data1}" ;
            $sender = "From: Student Election Commision";
           // ini_set('SMTP','myserver');
            ini_set('smtp_port',587);

            if(mail($email, $subject, $message,$sender)){
                $info = "We've sent an OTP code to your email $email";
                $_SESSION['info'] = $info;
                $_SESSION['voter'] = $email;
                header('location: user-otp.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while sending code!";
            }
        }else{
            $errors['db-error'] = "Failed while inserting data into database!";
        }
       
        }
        else{
           // echo $pass_check[0];
           $errors['password'] = "Incorrect password!";
        }
    }
    else{
        $errors['email'] = "INCORRECT email. Try Again.";
    }

    

}




//date_default_timezone_set('GMT');

///Something to write to txt log
//$log  = "|".date("   n-j-Y   |   g:i a")."  |  ".$voter." |      ".($result[0]=='1'?'Success':'Failed ')."     |".PHP_EOL.
		
        
        
   //     "--------------------------------------------------------------------".PHP_EOL;
//Save string to log, use FILE_APPEND to append.
//file_put_contents('./log_'.date("j.n.Y").'.txt', $log, FILE_APPEND);

//if user click verification code submit button


    if(isset($_POST['check'])){
        $_SESSION['info'] = "";

      //  $email = mysqli_real_escape_string($conn, $_POST['voter']); //for email
        $otp_code = mysqli_real_escape_string($conn, $_POST['otp']); //checking inputted otp
        $check_code = "SELECT code FROM user WHERE email = '$email'";
        $code_res = mysqli_query($conn, $check_code);
        $fetch_data = mysqli_fetch_row($code_res);
         //$fetch_code = $fetch_data['code'];

        // echo $otp_code;
       //  echo $email;

        if($otp_code == $fetch_data[0]){
            $status = 'verified';
            $update_otp = "UPDATE user SET status = '$status' WHERE code = $fetch_data[0]";
            $update_res = mysqli_query($conn, $update_otp);
          //  if($update_res){
              //  $_SESSION['firstname'] = $firstname;
             //   $_SESSION['voter'] = $email;
               header('location: home.php');
             //   exit();
        //    }else{
        //        $errors['otp-error'] = "Failed while updating code!";
        //    }
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
             //echo $fetch_data[1];
        }
    }

    //header('location: index.php');
    
?>


