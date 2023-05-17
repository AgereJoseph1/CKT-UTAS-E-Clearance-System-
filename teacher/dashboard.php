<?php

// Teacher's Dashboard

require_once "../app/app.php";
teacherOnly();

$ctx = [
    'title' => 'Form Master Dashboard',
    'master' => CRUD::querySingle("officer", "id=:pk", [':pk'=>$_SESSION['tid']]),
    'studentCount' => R::count('student', "officer_id=:pk", [':pk'=>$_SESSION['tid']]),
    'clearedStudentCount' => R::count('student', "officer_id=:pk and clearance_completed=1", [':pk'=>$_SESSION['tid']]),
    'notClearedStudentCount' => R::count('student', "officer_id=:pk and clearance_completed=0", [':pk'=>$_SESSION['tid']]),
];

render_view("teacher/dashboard", $ctx);