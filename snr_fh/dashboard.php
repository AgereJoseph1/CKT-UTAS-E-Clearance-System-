<?php

// Teacher's Dashboard

require_once "../app/app.php";
teacherOnly();
$officer=CRUD::querySingle('officer');
$ctx = [
    'title' => 'All Female Hall Tutors',
    'FH_Tutor' => CRUD::querySingle("officer", "id=:pk", [':pk'=>$_SESSION['tid']]),
    'studentCount' => R::count('student', "gender='female'"),
    'clearedStudentCount' => R::count('clearanceitem', "officer_id=:pk and status='cleared'  ",[':pk'=>$_SESSION['tid']]),
    'notClearedStudentCount' => R::count('clearanceitem', "officer_id=:pk and status='pending' or status ='not cleared'",[':pk'=>$_SESSION['tid']]),
];

render_view("snr_fh/dashboard", $ctx);