<?php

require_once "../app/app.php";
officerOnly();

$officer = CRUD::querySingle("officer", "id=:pk", [':pk'=>$_SESSION['oid']]);


$ctx = [
    'title' => 'Officer Dashboard',
    'officer' => $officer,
    'studentCount' => R::count('student'),
    'clearedStudentCount' => R::count('student', "clearance_completed=1"),
    'notClearedStudentCount' => R::count('student', "clearance_completed=0"),
];

render_view("officer/dashboard", $ctx);