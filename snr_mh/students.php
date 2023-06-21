<?php

// Show All Students

require_once "../app/app.php";
teacherOnly();

$ctx = [
    'title' => 'All Students', 
    "students" => CRUD::query("student", "gender ='male' ")
];

render_view("snr_mh/all-students", $ctx);