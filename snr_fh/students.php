<?php

// Show All Students

require_once "../app/app.php";
teacherOnly();

$ctx = [
    'title' => 'All Students', 
    "students" => CRUD::query("student", "gender='female' ")
];



render_view("snr_fh/all-students", $ctx);