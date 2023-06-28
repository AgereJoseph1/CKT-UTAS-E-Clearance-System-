<?php

require_once "../app/app.php";
adminOnly();

$ctx = [
    "title" => "All Staff",
    "officers" => CRUD::query('officer'),
];

if (isset($_POST['addOfficer'])) {
    $fn = $_POST['fname'];
    $em = $_POST['email'];
    $phn = $_POST['phone'];
    $role = $_POST['role'];
    $pwd = '123456';
    $pwd = md5($pwd);

    if (
        empty($fn) || empty($em) || empty($phn || strlen($phn) != 10 || empty($role))
    ) {
        $_SESSION['at'] = 'warning';
        $_SESSION['am'] = 'All fields are required';
        redirect("officers.php");
    } elseif ((CRUD::querySingle("officer", "role=:rle", [':rle' => $role]))) {
        $_SESSION['at'] = 'warning';
        $_SESSION['am'] = 'officer with that role is already recorded';
        redirect("officers.php");
    } else {
        // Check if a file was uploaded
        if (isset($_FILES['signature']) && $_FILES['signature']['error'] === UPLOAD_ERR_OK) {
            $file = $_FILES['signature'];

            $filename = uniqid() . '_' . $file['name'];

            move_uploaded_file($file['tmp_name'], '../assets/uploads/' . $filename);
        } else {

            $filename = '';
        }

        $officer = [
            'email' => $em,
            'phone' => $phn,
            'fullname' => $fn,
            'role' => $role,
            'signature' => $filename,
            'password' => $pwd,
            'created_at' => date("d/m/Y")
        ];

        $res = CRUD::insert("officer", $officer);

        if ($res > 0) {
            $_SESSION['at'] = 'success';
            $_SESSION['am'] = 'Officer Added Successfully';
            redirect("officers.php");
        } else {
            $_SESSION['at'] = 'warning';
            $_SESSION['am'] = $res;
            redirect("officers.php");
        }
    }
}
if (isset($_POST['delOfficer'])){
    $pk = $_POST['oid'];
    $res = CRUD::delete("officer", $pk);

    if ($res == 1){
        $_SESSION['at'] = 'info';
        $_SESSION['am'] = 'Officer Removed Successfully';
    }else{
        $_SESSION['at'] = 'danger';
        $_SESSION['am'] = $res;
    }
    redirect("officers.php");
}

render_view("admin/all-officers", $ctx);
