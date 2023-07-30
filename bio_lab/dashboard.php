<?php

// Teacher's Dashboard

require_once "../app/app.php";
biologyLabOnly();
$studentCount= R::count('student', "department='biology'");
$clearedStudentCount=R::count('clearanceitem', "officer_id=:pk and status='cleared'  ",[':pk'=>$_SESSION['bid']]);
$notClearedStudentCount=$studentCount-$clearedStudentCount;


$ctx = [
    'title' => 'Biology Lab',
    'Bio_lab' => CRUD::querySingle("officer", "id=:pk", [':pk'=>$_SESSION['bid']]),
    'studentCount' =>$studentCount,
    'clearedStudentCount' => $clearedStudentCount,
    'notClearedStudentCount' => $notClearedStudentCount,
];

render_view("bio_lab/dashboard", $ctx);