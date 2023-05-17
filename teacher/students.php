<?php

// Show All Students

require_once "../app/app.php";
teacherOnly();

$ctx = [
    'title' => 'All Students', 
    "students" => CRUD::query("student", "officer_id=:pk", [':pk' => $_SESSION['tid']])
];



render_view("teacher/all-students", $ctx);