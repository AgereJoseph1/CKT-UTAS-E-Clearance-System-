<?php

// Show All Students

require_once "../app/app.php";
teacherOnly();

$ctx = [
    'title' => 'All Students',
    "studentClearances" => CRUD::query("clearanceitem", "officer_id=:pk and status ='pending' or status ='not cleared'",[':pk'=>$_SESSION['tid']]),
];


if (isset($_POST['updateClearanceItem'])){
    $studentID = $_POST['sid'];
    $clearID = $_POST['cid'];
    $status = $_POST['status'];
    $remarks = $_POST['remarks'];

    $fields = [
        "status" => $status,
        "remarks" => $remarks ?? "N/A",
    ];

    $res = CRUD::update("clearanceitem", $fields, $clearID);
    
    if ($res == 1){
        $totalClearedCount = R::count("clearanceitem", "student_id=:pk and status='cleared'", [":pk"=> $studentID]);
        $totalClearanceCount = R::count("clearanceitem", "student_id=:pk", [":pk"=> $studentID]);
        if ($totalClearanceCount == $totalClearedCount){
            $fields = [
                "clearance_completed" => true
            ];
            $res2 = CRUD::update("student", $fields, $studentID);
            if ($res2 == 1){
                $_SESSION['at'] = 'success';
                $_SESSION['am'] = 'Clearance Completed.. Student Can print For Submission';
            }

        }
        $_SESSION['at'] = 'success';
        $_SESSION['am'] = 'Clearance Recorded';
        redirect("clearance.php");

    }
    
}


render_view("snr_mh/clearance", $ctx);