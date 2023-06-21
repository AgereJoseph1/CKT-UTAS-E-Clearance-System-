<?php

require_once "../app/app.php";
adminOnly();


$ctx = [
    "title" => "All Staff",
    "officers" => CRUD::query('officer'),
];

if (isset($_POST['addOfficer'])){
    $fn = $_POST['fname'];
    $em = $_POST['email'];
    $phn = $_POST['phone'];
    $role = $_POST['role'];
    $signature = $_POST['signature'];
    $pwd='123456';
    $pwd=md5($pwd);

    if (
        empty($fn) || empty($em) || empty($phn || strlen($phn) != 10  || empty($role)
        ) ){
        $_SESSION['at'] = 'warning';
        $_SESSION['am'] = 'All fields are required';
        redirect("officers.php");
    }elseif((CRUD::querySingle("officer", "role=:rle", [':rle'=>$role]))){
        $_SESSION['at'] = 'warning';
        $_SESSION['am'] = 'officer with that role is  already recorded';
    }
    else{
        $officer = [
            'email' => $em,
            'phone' => $phn,
            'fullname' => $fn,
            'role' => $role,
            'signature' => $signature,
            'password' => $pwd,
            'created_at' => date("d/m/Y")
        ];

        $res = CRUD::insert("officer", $officer);

        if ($res > 0){
            $_SESSION['at'] = 'success';
            $_SESSION['am'] = 'Officer Added Successfully';
            redirect("officers.php");
        }else{
            $_SESSION['at'] = 'warning';
            $_SESSION['am'] = $res;
            redirect("officers.php");
        }
    }
}





render_view("admin/all-officers", $ctx);