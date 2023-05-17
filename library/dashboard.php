<?php

// Teacher's Dashboard

require_once "../app/app.php";
librarianOnly();

$library = CRUD::querySingle("officer", "id=:pk", [':pk'=>$_SESSION['lid']]);

$ctx = [
    'title' => 'Bursar Dashboard',
    'librarian' => $library,
    'studentCount' => R::count('student', "institution_id=:pk", [':pk'=> $library['institution_id']]),
    'clearedStudentCount' => R::count('student', "institution_id=:pk and clearance_completed=1", [':pk'=> $library['institution_id']]),
    'notClearedStudentCount' => R::count('student', "institution_id=:pk and clearance_completed=0", [':pk'=> $library['institution_id']]),
];

render_view("library/dashboard", $ctx);