<?php

// Teacher's Dashboard

require_once "../app/app.php";
teacherOnly();
$studentCount=R::count('student', "gender='male'");
$clearedStudentCount=R::count('clearanceitem', "officer_id=:pk and status='cleared'  ",[':pk'=>$_SESSION['tid']]);
$notClearedStudentCount=$studentCount-$clearedStudentCount;
$ctx = [
    'title' => 'All Male Hall Tutors',
    'MH_Tutor' => CRUD::querySingle("officer", "id=:pk", [':pk'=>$_SESSION['tid']]),
    'studentCount' => $studentCount,
    'clearedStudentCount' => $clearedStudentCount,
    'notClearedStudentCount' => $notClearedStudentCount,
];

render_view("snr_mh/dashboard", $ctx);