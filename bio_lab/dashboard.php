<?php

// Teacher's Dashboard

require_once "../app/app.php";
biologyLabOnly();

$ctx = [
    'title' => 'Biology Lab',
    'Bio_lab' => CRUD::querySingle("officer", "id=:pk", [':pk'=>$_SESSION['bid']]),
    'studentCount' => R::count('student', "department='biology'"),
    'clearedStudentCount' => R::count('clearanceitem', "officer_id=:pk and status='cleared'  ",[':pk'=>$_SESSION['bid']]),
    'notClearedStudentCount' => R::count('clearanceitem', "officer_id=:pk and status='pending' or status ='not cleared'",[':pk'=>$_SESSION['bid']]),
];

render_view("bio_lab/dashboard", $ctx);