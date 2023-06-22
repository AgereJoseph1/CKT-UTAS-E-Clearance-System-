<?php
require_once "../app/app.php";

$ctx = [
    'title' => 'Student Dashboard',
    'student' => CRUD::querySingle("student", "id=:pk", [":pk"=>$_SESSION['sid']]),
    "clearance_items" => CRUD::query("clearanceitem", "student_id=:pk", [":pk"=>$_SESSION['sid']]),
    "totalClearedCount" => R::count("clearanceitem", "student_id=:pk and status='cleared'", [":pk"=>$_SESSION['sid']]),
    "totalClearanceCount" => R::count("clearanceitem", "student_id=:pk", [":pk"=>$_SESSION['sid']]),
];


if (isset($_POST["reqClearance"])) {

    $fields = [
        "clearance_started" => true
    ];

    $update = CRUD::update("student", $fields, $_SESSION['sid']);
    if ($update == 1) {
        $student = CRUD::querySingle("student", "id=:pk", [":pk"=>$_SESSION['sid']]);
        $clearanceForm = [
            "student_id" => $_SESSION['sid'],
            "is_completed" => false,
            "code" => substr(uniqid(),0,10 ),
            "created_at" => date("d/m/Y"),
            "created_time" => date("h:i a")
        ];
        $checkStudentClearanceForm = CRUD::querySingle("clearance", "student_id=:pk", [':pk'=>$_SESSION['sid']]);

        if (!isset($checkStudentClearanceForm['student_id'])){
            $clearanceFormID = CRUD::insert("clearance", $clearanceForm);
            $officers = CRUD::query("officer" );
            foreach ($officers as $officer){
                $clearanceFormItem = [
                    "clearance_id" => $clearanceFormID,
                    "officer_id" => $officer['id'],
                    "student_id" => $_SESSION['sid'],
                    // "student_id" => get_hall(StdID),
                    "status" => "pending",
                    "remarks" => "Not Set",
                    "created_at" => date("d/m/Y"),
                    "time_created" => date("h:i a"),
                    "updated_at" => date("d/m/Y"),
                    "time_updated" => date("h:i a"),
                ];

               $res= CRUD::insert("clearanceitem", $clearanceFormItem);
                
            }

            if ($res > 0){
                $_SESSION['at'] = 'success';
                $_SESSION['am'] = "Clearance Request Sent to all Offices";
            redirect("dashboard.php");
            }
        }else{
            $_SESSION['at'] = 'warning';
            $_SESSION['am'] = "Already Requested For Clearance";
            redirect("dashboard.php");
        }

    }else{
        $_SESSION['at'] = 'warning';
        $_SESSION['am'] = $update;
    }
}
render_view("student/dashboard", $ctx, "sdashboard");