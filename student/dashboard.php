<?php
require_once "../app/app.php";
studentOnly();

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
            $femaleHallTutor=CRUD::querySingle("officer","role='snr_fhall_tutor'");
            $maleHallTutor=CRUD::querySingle("officer","role='snr_mhall_tutor'");
            $bio_lab=CRUD::querySingle("officer","role='bio_lab'");
            $chem_lab=CRUD::querySingle("officer","role='chem_lab'");
            $phy_lab=CRUD::querySingle("officer","role='phy_lab'");
            $student=CRUD::querySingle("student","id=:pk",[":pk"=>$_SESSION['sid']]);
            if($student['gender']=='female'){
               $clearanceFormForHallTutor=[
                       "clearance_id" => $clearanceFormID,
                       "officer_id" => $femaleHallTutor['id'],
                       "student_id" => $_SESSION['sid'],
                       "status" => "pending",
                       "remarks" => "Not Set",
                       "created_at" => date("d/m/Y"),
                       "time_created" => date("h:i a"),
                       "updated_at" => date("d/m/Y"),
                       "time_updated" => date("h:i a"),
                   ];
               CRUD::insert("clearanceitem", $clearanceFormForHallTutor);
           }elseif($student['gender']=='male'){
               $clearanceFormForHallTutor=[
                   "clearance_id" => $clearanceFormID,
                   "officer_id" => $maleHallTutor['id'],
                   "student_id" => $_SESSION['sid'],
                   "status" => "pending",
                   "remarks" => "Not Set",
                   "created_at" => date("d/m/Y"),
                   "time_created" => date("h:i a"),
                   "updated_at" => date("d/m/Y"),
                   "time_updated" => date("h:i a"),
               ];
               CRUD::insert("clearanceitem", $clearanceFormForHallTutor);
           }
           if($student['department']=='computer science' || $student['department']=='physics'){
               $clearanceFormitemForLab=[
                   "clearance_id" => $clearanceFormID,
                   "officer_id" => $phy_lab['id'],
                   "student_id" => $_SESSION['sid'],
                   "status" => "pending",
                   "remarks" => "Not Set",
                   "created_at" => date("d/m/Y"),
                   "time_created" => date("h:i a"),
                   "updated_at" => date("d/m/Y"),
                   "time_updated" => date("h:i a"),
               ];
               CRUD::insert("clearanceitem", $clearanceFormitemForLab);

           }elseif($student['department']=='biology'){
               $clearanceFormitemForLab=[
                   "clearance_id" => $clearanceFormID,
                   "officer_id" => $bio_lab['id'],
                   "student_id" => $_SESSION['sid'],
                   "status" => "pending",
                   "remarks" => "Not Set",
                   "created_at" => date("d/m/Y"),
                   "time_created" => date("h:i a"),
                   "updated_at" => date("d/m/Y"),
                   "time_updated" => date("h:i a"),
               ];
               CRUD::insert("clearanceitem", $clearanceFormitemForLab);

           }elseif($student['department']=='chemistry'){
               $clearanceFormitemForLab=[
                   "clearance_id" => $clearanceFormID,
                   "officer_id" => $chem_lab['id'],
                   "student_id" => $_SESSION['sid'],
                   "status" => "pending",
                   "remarks" => "Not Set",
                   "created_at" => date("d/m/Y"),
                   "time_created" => date("h:i a"),
                   "updated_at" => date("d/m/Y"),
                   "time_updated" => date("h:i a"),
               ];
               $res = CRUD::insert("clearanceitem", $clearanceFormitemForLab);

           }
            $officers = CRUD::query("officer", "role='librarian' OR role='accountant' OR role='computer_lab' OR role='deen' OR role='cmps_coach' OR role='it_directorate'");
            $successCount = 0;

            foreach ($officers as $officer) {
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

                $res = CRUD::insert("clearanceitem", $clearanceFormItem);

                if ($res > 0) {
                    $successCount++;
                }
            }

            if ($successCount > 0) {
                $_SESSION['at'] = 'success';
                $_SESSION['am'] = "Clearance Request Sent to all Offices";
                redirect("dashboard.php");
            } else {
                $_SESSION['at'] = 'warning';
                $_SESSION['am'] = "Already Requested For Clearance";
                redirect("dashboard.php");
            }

        }

    }else{
        $_SESSION['at'] = 'warning';
        $_SESSION['am'] = $update;
    }
}
render_view("student/dashboard", $ctx, "sdashboard");