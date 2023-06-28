<?php
require_once "../app/app.php";
studentOnly();



$ctx = [
    'title' => 'Student Receipt',
    'student' => CRUD::querySingle("student", "id=:pk", [":pk"=>$_SESSION['sid']]),
    "totalClearedCount" => R::count("clearanceitem", "student_id=:pk and status='cleared'", [":pk"=>$_SESSION['sid']]),
    "totalClearanceCount" => R::count("clearanceitem", "student_id=:pk", [":pk"=>$_SESSION['sid']]),
];

// Create an array to hold the details of the officers
$officers_details = [];

$clearance_items = CRUD::query("clearanceitem", "student_id=:pk", [":pk"=>$_SESSION['sid']]);
foreach ($clearance_items as $row) {
    # code...
    $officer_id = $row['officer_id'];
    $date = $row['updated_at'];
    
    $officer = CRUD::querySingle("officer", "id=:pk", [":pk"=>$officer_id]);
    $officer_signature = $officer['signature'];

    $details = [
        "officer_id" => $officer_id,
        "signature" => $officer_signature,
        "date" => $date,
    ];

    // Add the details to the officers_details array
    array_push($officers_details, $details);

}

// Add the array to the context
array_push($ctx, $officers_details);

render_view("student/clearance_receipt", $ctx);