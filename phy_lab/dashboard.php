<?php

// Teacher's Dashboard

require_once "../app/app.php";
physicsLabOnly();

$studentCount=R::count('student', "department='physics' or department='computer science'");
$clearedStudentCount= R::count('clearanceitem', "officer_id=:pk and status='cleared'  ",[':pk'=>$_SESSION['pid']]);
$notClearedStudentCount=$studentCount-$clearedStudentCount;
$ctx = [
    'title' => 'Physics lab',
    'Physics_lab' => CRUD::querySingle("officer", "id=:pk", [':pk'=>$_SESSION['pid']]),
    'studentCount' =>$studentCount,
    'clearedStudentCount' => $clearedStudentCount,
    'notClearedStudentCount' => $notClearedStudentCount,
];

render_view("phy_lab/dashboard", $ctx);