<?php

// Teacher's Dashboard

require_once "../app/app.php";
bursarOnly();

$bursar = CRUD::querySingle("officer", "id=:pk", [':pk'=>$_SESSION['bid']]);

$ctx = [
    'title' => 'Bursar Dashboard',
    'bursar' => $bursar,
    'studentCount' => R::count('student', "institution_id=:pk", [':pk'=> $bursar['institution_id']]),
    'clearedStudentCount' => R::count('student', "institution_id=:pk and clearance_completed=1", [':pk'=> $bursar['institution_id']]),
    'notClearedStudentCount' => R::count('student', "institution_id=:pk and clearance_completed=0", [':pk'=> $bursar['institution_id']]),
];

render_view("bursar/dashboard", $ctx);