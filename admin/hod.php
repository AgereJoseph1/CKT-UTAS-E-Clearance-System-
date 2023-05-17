<?php

require_once "../app/app.php";
adminOnly();


$ctx = [
    "title" => "All Institutions",
    "headmasters" => CRUD::query("headmaster")
];

if (isset($_POST['saveInstitution'])){
    $iname = $_POST['iname'];
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $phn = $_POST['phn'];

    if (empty($iname) || empty($fname) || empty($email) || empty($phn)){
        $_SESSION['at'] = 'danger';
        $_SESSION['am'] = 'Fields are required';
        redirect("headmasters.php");
        exit();
    }

    $institutionFields = [
        'i_name' => $iname,
        'user_id' => $_SESSION['aid'],
        'created_at' => date("d/m/Y")
    ];
    $res = CRUD::insert("institution", $institutionFields);

    if ($res > 0 ){
        $headmasterFields = [
            'institution_id' => $res,
            'h_name' => $fname,
            'h_email' => $email,
            'h_phone' => $phn,
            'user_id' => $_SESSION['aid'],
            'created_at' => date("d/m/Y")

        ];
        $hres = CRUD::insert('headmaster', $headmasterFields);

        if ($hres > 0){
            $_SESSION['at'] = "success";
            $_SESSION['am'] = "Institution & Headmaster Created Successfully";
        }else{
            $_SESSION['at'] = 'danger';
            $_SESSION['am'] = 'Fields are required';
        }
        redirect("headmasters.php");
    }
}





render_view("admin/headmasters", $ctx);