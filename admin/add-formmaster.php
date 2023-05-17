<?php

require_once '../app/app.php';
adminOnly();


$ctx = [
  'title' => 'Add Form Master',
];

if (isset($_POST['addClassMaster'])){
    $fn = $_POST['fname'];
    $cl = $_POST['class'];
    $phn = $_POST['phone'];
    $em = $_POST['email'];



    if ( empty($fn) || empty($phn) || empty($cl) || empty($em) ){
        $_SESSION['at'] = 'warning';
        $_SESSION['am'] = 'All fields are required';
    }else{
        $office = CRUD::querySingle("office", "name=:nm", [':nm'=> 'Classroom']);
        $fields = [
            'class' => $cl,
            'fullname' => $fn,
            'office_id' => $office['id'],
            'phone' => $phn,
            'email' => $em,
            'user_id' => $_SESSION['aid'],
            'password' => "123456"
        ];

        $res = CRUD::insert("formmaster", $fields);
        if ($res > 0){
            $_SESSION['at'] = 'success';
            $_SESSION['am'] = 'Form Master Added Successfully';
        }else{
            $_SESSION['at'] = 'warning';
            $_SESSION['am'] = $res;
        }
    }
    redirect("add-formmaster.php");
}

render_view('admin/add-formmaster', $ctx);