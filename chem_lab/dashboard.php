<?php

// Teacher's Dashboard

require_once "../app/app.php";
chemistryLabOnly();
$studentCount= R::count('student', "department='chemistry'");
$clearedStudentCount= R::count('clearanceitem', "officer_id=:pk and status='cleared'  ",[':pk'=>$_SESSION['cid']]);
$notClearedStudentCount=$studentCount-$clearedStudentCount;

$ctx = [
    'title' => 'Chemistry lab',
    'Chemistry_lab' => CRUD::querySingle("officer", "id=:pk", [':pk'=>$_SESSION['cid']]),
    'studentCount' =>$studentCount,
    'clearedStudentCount' =>$clearedStudentCount,
    'notClearedStudentCount' => $notClearedStudentCount,
];

render_view("chem_lab/dashboard", $ctx);