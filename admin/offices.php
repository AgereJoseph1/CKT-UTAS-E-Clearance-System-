<?php

require_once "../app/app.php";
adminOnly();



$ctx = [
    "title" => "All Offices",
    'institutions' => CRUD::query('institution')
];

if (isset($_SESSION['selectedInstitutionOfficeID'])){
    $ctx['offices'] = CRUD::query("office", "institution_id=:id", [':id' =>$_SESSION['selectedInstitutionOfficeID']]);
    $ctx['officeCount'] = R::count("office", "institution_id=:id", [':id' =>$_SESSION['selectedInstitutionOfficeID']]);
}


if (isset($_GET['clr'])){
    unset($_SESSION['selectedInstitutionOfficeID']);
    redirect("offices.php");
}

if (isset($_POST['setInstitutionOfficesID'])){
    $_SESSION['selectedInstitutionOfficeID'] = $_POST['instID'];
    redirect("offices.php");
}


if (isset($_POST['delOffice'])){
    $pk = $_POST['oid'];
    $res = CRUD::delete("office", $pk);

    if ($res == 1){
        $_SESSION['at'] = 'info';
        $_SESSION['am'] = 'Office Removed Successfully';
    }else{
        $_SESSION['at'] = 'danger';
        $_SESSION['am'] = $res;
    }
    redirect("offices.php");
}


if (isset($_POST['addOffice'])){
    $name = $_POST['name'];
    if (empty($name)){
        $_SESSION['at'] = 'danger';
        $_SESSION['am'] = 'Name Field is required';
        redirect("offices.php");
    }

    $office = [
        "name" => $name,
        "created_at" => date("d/m/Y"),
        "institution_id" => $_SESSION['selectedInstitutionOfficeID'],
        "user_id" => $_SESSION['aid'],
    ];

    $res = CRUD::insert("office", $office);

    if ($res > 0){
        $_SESSION['at'] = 'success';
        $_SESSION['am'] = 'Office Added Successfully';
    }else{
        $_SESSION['at'] = 'danger';
        $_SESSION['am'] = $res;
    }
    redirect("offices.php");
}



render_view("admin/offices", $ctx);