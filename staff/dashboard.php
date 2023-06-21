<?php

require_once "../app/app.php";
officerOnly();

$officer = CRUD::querySingle("officer", "id=:pk", [':pk'=>$_SESSION['oid']]);


$ctx = [
    'title' => 'Officer Dashboard',
    'officer' => $officer,
    'studentCount' => R::count('student'),
    'clearedStudentCount' => R::count('clearanceitem', "officer_id=:pk and status='cleared' ",[':pk'=>$_SESSION['oid']]),
    'notClearedStudentCount' => R::count('clearanceitem', "officer_id=:pk and status='pending' or status='not cleared' ",[':pk'=>$_SESSION['oid']]),
];

render_view("officer/dashboard", $ctx);