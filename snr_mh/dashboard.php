<?php

// Teacher's Dashboard

require_once "../app/app.php";
teacherOnly();

$ctx = [
    'title' => 'All Male Hall Tutors',
    'MH_Tutor' => CRUD::querySingle("officer", "id=:pk", [':pk'=>$_SESSION['tid']]),
    'studentCount' => R::count('student', "gender='male'"),
    'clearedStudentCount' => R::count('clearanceitem', "officer_id=:pk and status='cleared'  ",[':pk'=>$_SESSION['tid']]),
    'notClearedStudentCount' => R::count('clearanceitem', "officer_id=:pk and status='pending' or status ='not cleared'",[':pk'=>$_SESSION['tid']]),
];

render_view("snr_mh/dashboard", $ctx);