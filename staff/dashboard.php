<?php

require_once "../app/app.php";
officerOnly();

$officer = CRUD::querySingle("officer", "id=:pk", [':pk'=>$_SESSION['oid']]);
$studentCount=R::count('student');
$clearedStudentCount=R::count('clearanceitem', "officer_id=:pk and status='cleared' ",[':pk'=>$_SESSION['oid']]);
$notClearedStudentCount=$studentCount-$clearedStudentCount;
$ctx = [
    'title' => 'Officer Dashboard',
    'officer' => $officer,
    'studentCount' => $studentCount,
    'clearedStudentCount' => $clearedStudentCount,
    'notClearedStudentCount' => $notClearedStudentCount,
];

render_view("officer/dashboard", $ctx);