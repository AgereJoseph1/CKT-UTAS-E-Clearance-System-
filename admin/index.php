<?php

require_once "../app/app.php";
notAuthenticatedOnly();


$ctx = [
    "title" => "Admin Login"
];


if (isset($_POST['adminLogin'])){
    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];

    if (empty($uname) || empty($pwd)){
        $_SESSION['at'] = 'danger';
        $_SESSION['am'] = 'All Fields are required';
        redirect("../admin/");
    }

    $res = CRUD::querySingle("user", "username=:un", [':un'=> $uname]);

    if (isset($res['password'])){
        if ($res['password'] == $pwd){
            $_SESSION['aid'] = $res['id'];
            redirect("../admin/dashboard.php");
        }
        $_SESSION['at'] = 'danger';
        $_SESSION['am'] = 'Invalid Credentials';
        redirect("../admin/");
    }
}

render_view("admin/login", $ctx, "login");

