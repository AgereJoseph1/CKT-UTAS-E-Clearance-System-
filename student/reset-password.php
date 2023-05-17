<?php
require_once "../app/app.php";

$ctx = [
    'title' => 'Reset Password'
];


if(isset($_POST['reset_pass'])){
   // Waiting for teachers to add students

   $pass = $_POST['pass'];
   $cpass = $_POST['cfm-pass'];

  
   if ($pass == $cpass) {
     $update=Student::resetPassword($_SESSION['user_id']);
    if ($update==1) {
        $_SESSION['at'] = "success";
        $_SESSION['am'] = "Successfully changed password";
        redirect('dashboard.php');
    }

   }else{
    $_SESSION['at'] = "warning";
    $_SESSION['am'] = "Passwords do not match";

   }



}

render_view("student/reset-password", $ctx, "login");