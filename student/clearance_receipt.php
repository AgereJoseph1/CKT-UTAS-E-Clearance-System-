<?php
require_once "../app/app.php";
studentOnly();


$ctx = [
    'title' => 'Student Receipt',
    'student' => CRUD::querySingle("student", "id=:pk", [":pk"=>$_SESSION['sid']]),
    "clearance_items" => CRUD::query("clearanceitem", "student_id=:pk", [":pk"=>$_SESSION['sid']]),
    "totalClearedCount" => R::count("clearanceitem", "student_id=:pk and status='cleared'", [":pk"=>$_SESSION['sid']]),
    "totalClearanceCount" => R::count("clearanceitem", "student_id=:pk", [":pk"=>$_SESSION['sid']]),
];

render_view("student/clearance_receipt", $ctx);