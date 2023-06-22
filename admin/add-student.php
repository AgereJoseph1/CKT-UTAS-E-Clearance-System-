<?php

// Teacher Adds Student

require_once "../app/app.php";
adminOnly();

$ctx = [
    'title' => 'Add Student'
];

if (isset($_POST['addStudent'])) {
    $fn = $_POST['fname'];
    $in = $_POST['index_no'];
    $program=$_POST['program'];
    $department=$_POST['department'];
    $gender=$_POST['gender'];
    $pwd = "123456";
    $pwd=md5($pwd);


    if (empty($fn) || empty($in)) {
        $_SESSION['at'] = 'warning';
        $_SESSION['am'] = 'All fields are required';

        // Checks if student exist in db
    }elseif (CRUD::querySingle("student", "index_number=:indx", [':indx'=>$in])){
        $_SESSION['at'] = 'warning';
        $_SESSION['am'] = 'Student already recorded';

    }else{
        // Insert record
        $student = [
            'fullname' => $fn,
            'index_number' => $in,
            'programme' =>$program,
            'department' =>$department,
            'clearance_started' => false,
            'clearance_completed' => false,
            'pwd' => $pwd,
            'gender' =>$gender,
        ];
        $res = CRUD::insert("student", $student);
        if ($res > 0) {
            $_SESSION['at'] = 'success';
            $_SESSION['am'] = 'Student added successfully';
        }else{
            $_SESSION['at'] = 'warning';
            $_SESSION['am'] = 'Unable to save student record';
        }
    }
    redirect("add-student.php");
}

render_view("admin/add-student", $ctx);