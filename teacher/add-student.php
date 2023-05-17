<?php

// Teacher Adds Student

require_once "../app/app.php";
teacherOnly();

$ctx = [
    'title' => 'Add Student'
];

if (isset($_POST['addStudent'])) {
    $fn = $_POST['fname'];
    $in = $_POST['index_no'];
    $pwd = "123456";


    if (empty($fn) || empty($in)) {
        $_SESSION['at'] = 'warning';
        $_SESSION['am'] = 'All fields are required';
    
    // Checks if student exist in db
    }elseif (CRUD::querySingle("student", "index_number=:indx", [':indx'=>$in])){
        $_SESSION['at'] = 'warning';
        $_SESSION['am'] = 'Student already recorded';

    }else{
        // Insert record
        $teacher = CRUD::querySingle("officer", "id=:pk", [':pk'=>$_SESSION['tid']]);
        $student = [
            'fullname' => $fn,
            'index_number' => $in,
            'class' => $teacher['class'],
            'clearance_started' => false,
            'clearance_completed' => false,
            'institution_id' => $teacher['institution_id'],
            "officer_id" => $teacher['id'],
            'pwd' => $pwd
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

render_view("teacher/add-student", $ctx);