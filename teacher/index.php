<?php

require_once '../app/app.php';
notAuthenticatedOnly();

$ctx = [
    "title" => "login page"
];

if (isset($_POST['adminLogin'])){
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    if (empty($email) || empty($pwd)){
        $_SESSION['at'] = 'danger';
        $_SESSION['am'] = 'All Fields are required';
        redirect("../teacher/");
    }

    $res = CRUD::querySingle("formmaster", "email=:em", [":em"=>$email]);

    if (isset($res['password'])){
        if ($res['password'] == '123456'){
            $_SESSION['tid'] = $res['id'];
            redirect("dashboard.php");
        }
    }
    $_SESSION['at'] = 'danger';
    $_SESSION['am'] = 'Invalid Credentials';
    redirect("../teacher/");
}



render_view("teacher/login", $ctx, $layout="login");