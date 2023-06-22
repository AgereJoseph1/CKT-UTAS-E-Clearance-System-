<?php

// Teacher's Dashboard

require_once "../app/app.php";
physicsLabOnly();

$ctx = [
    'title' => 'Physics lab',
    'Physics_lab' => CRUD::querySingle("officer", "id=:pk", [':pk'=>$_SESSION['pid']]),
    'studentCount' => R::count('student', "department='physics' or department='computer science'"),
    'clearedStudentCount' => R::count('clearanceitem', "officer_id=:pk and status='cleared'  ",[':pk'=>$_SESSION['pid']]),
    'notClearedStudentCount' => R::count('clearanceitem', "officer_id=:pk and status='pending' or status ='not cleared'",[':pk'=>$_SESSION['pid']]),
];

render_view("phy_lab/dashboard", $ctx);