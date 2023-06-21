<?php

// Teacher's Dashboard

require_once "../app/app.php";
teacherOnly();

$ctx = [
    'title' => 'All Female Hall Tutors',
    'MH_Tutor' => CRUD::querySingle("officer", "id=:pk", [':pk'=>$_SESSION['tid']]),
    'studentCount' => R::count('student', "gender='female'"),
    'clearedStudentCount' => R::count('student', "gender='female' and clearance_completed=1"),
    'notClearedStudentCount' => R::count('student', "gender='female' and clearance_completed=0"),
];

render_view("snr_fh/dashboard", $ctx);