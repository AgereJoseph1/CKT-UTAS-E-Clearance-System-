<?php

// Teacher's Dashboard

require_once "../app/app.php";
seniorFHallSuppervsiorOnly();
$officer=CRUD::querySingle('officer');
$studentCount=R::count('student', "gender='female'");
$clearedStudentCount=R::count('clearanceitem', "officer_id=:pk and status='cleared'  ",[':pk'=>$_SESSION['tid']]);
$notClearedStudentCount=$studentCount-$clearedStudentCount;
$ctx = [
    'title' => 'All Female Hall Tutors',
    'FH_Tutor' => CRUD::querySingle("officer", "id=:pk", [':pk'=>$_SESSION['fid']]),
    'studentCount' => $studentCount,
    'clearedStudentCount' => $clearedStudentCount,
    'notClearedStudentCount' => $notClearedStudentCount,
];

render_view("snr_fh/dashboard", $ctx);