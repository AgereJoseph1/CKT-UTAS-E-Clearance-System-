<?php

require_once "../app/app.php";
officerOnly();

$officer = CRUD::querySingle("officer", "id=:pk", [':pk'=>$_SESSION['oid']]);


$ctx = [
    'title' => 'Officer Dashboard',
    'officer' => $officer,
    'studentCount' => R::count('student', "institution_id=:pk", [':pk' =>$officer['institution_id']] ),
    'clearedStudentCount' => R::count('student', "clearance_completed=1 and institution_id={$officer['institution_id']}"),
    'notClearedStudentCount' => R::count('student', "clearance_completed=0 and institution_id={$officer['institution_id']}"),
];

render_view("officer/dashboard", $ctx);