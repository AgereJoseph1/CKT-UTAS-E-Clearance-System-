<?php

// Teacher's Dashboard

require_once "../app/app.php";
chemistryLabOnly();
$ctx = [
    'title' => 'Chemistry lab',
    'Chemistry_lab' => CRUD::querySingle("officer", "id=:pk", [':pk'=>$_SESSION['cid']]),
    'studentCount' => R::count('student', "department='chemistry'"),
    'clearedStudentCount' => R::count('clearanceitem', "officer_id=:pk and status='cleared'  ",[':pk'=>$_SESSION['cid']]),
    'notClearedStudentCount' => R::count('clearanceitem', "officer_id=:pk and status='pending' or status ='not cleared'",[':pk'=>$_SESSION['cid']]),
];

render_view("chem_lab/dashboard", $ctx);