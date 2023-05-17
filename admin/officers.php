<?php

require_once "../app/app.php";
adminOnly();


$ctx = [
    "title" => "All Staff",
    'institutions' => CRUD::query('institution'),
];


if (isset($_SESSION['selectedInstitutionOfficerID'])){
    $ctx['officers'] = CRUD::query("officer", "institution_id=:id", [':id' =>$_SESSION['selectedInstitutionOfficerID']]);
    $ctx['offices'] = CRUD::query("office", "institution_id=:id", [':id' =>$_SESSION['selectedInstitutionOfficerID']]);
}


if (isset($_GET['clr'])){
    unset($_SESSION['selectedInstitutionOfficerID']);
    redirect("officers.php");
}

if (isset($_POST['setInstitutionOfficersID'])){
    $_SESSION['selectedInstitutionOfficerID'] = $_POST['instID'];
    redirect("officers.php");
}

if (isset($_POST['addOfficer'])){
    $fn = $_POST['fname'];
    $em = $_POST['email'];
    $phn = $_POST['phone'];
    $off = $_POST['office'];
    $role = $_POST['role'];


    if (
        empty($fn) || empty($em) || empty($phn || strlen($phn) != 10 || empty($office) || empty($role)
        ) ){
        $_SESSION['at'] = 'warning';
        $_SESSION['am'] = 'All fields are required';
        redirect("officers.php");
    }else{
        $officer = [
            'office_id' => $off,
            'email' => $em,
            'phone' => $phn,
            'fullname' => $fn,
            'role' => $role,
            'password' => "123456",
            'institution_id' => $_SESSION['selectedInstitutionOfficerID'],
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