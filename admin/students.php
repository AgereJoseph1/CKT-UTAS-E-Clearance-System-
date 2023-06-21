
<?php

// Show All Students

require_once "../app/app.php";
adminOnly();

$ctx = [
    'title' => 'All Students',
    "students" => CRUD::query("student")
];


render_view("admin/all-students", $ctx);