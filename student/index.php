<?php

require_once '../app/app.php';

$ctx = [
    "title" => "login page"
];


if (isset($_POST['studLogin'])){
    $stid = $_POST['stid'];
    $pass = $_POST['password'];

    if (empty($stid) || empty($pass)) {
        $_SESSION['at'] = 'warning';
        $_SESSION['am'] = "Field cannot be empty";
        redirect("../student/");
    } 
    $res = CRUD::querySingle("student", "index_number=:in", [":in" => $stid]);
    if (isset($res['index_number'])){
        if ($res['pwd'] == $pass){
            $_SESSION['sid'] = $res['id'];
            redirect("dashboard.php");
        }else{
            $_SESSION['at'] = 'danger';
            $_SESSION['am'] = "Invalid Credentials";
            redirect("../student/");   
        }
    }else{
        $_SESSION['at'] = 'danger';
        $_SESSION['am'] = "Invalid Credentials";
        redirect("../student/");
    }
}



render_view("student/login", $ctx, 'login');