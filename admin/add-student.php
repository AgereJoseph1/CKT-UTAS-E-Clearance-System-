<?php

// Teacher Adds Student

require_once "../app/app.php";
adminOnly();

$ctx = [
    'title' => 'Add Student'
];

if (isset($_POST['addStudent'])) {
    $fn = $_POST['fname'];
    $in = $_POST['index_no'];
    $program = $_POST['program'];
    $department = $_POST['department'];
    $gender = $_POST['gender'];
    $pwd = "123456";
    $pwd = md5($pwd);

    function validateAndInsertStudent($fullname, $index_number, $programme, $department, $gender, $pwd)
    {
        if (empty($fullname) || empty($index_number)) {
            $_SESSION['at'] = 'warning';
            $_SESSION['am'] = 'All fields are required';
            return false;
        }

        if (CRUD::querySingle("student", "index_number=:indx", [':indx' => $index_number])) {
            $_SESSION['at']= 'warning';
            $_SESSION['am']= 'Student already recorded';
            return false;
        }

        // Insert record
        $student = [
            'fullname' => $fullname,
            'index_number' => $index_number,
            'programme' => $programme,
            'department' => $department,
            'clearance_started' => false,
            'clearance_completed' => false,
            'pwd' => $pwd,
            'gender' => $gender,
        ];

        $res = CRUD::insert("student", $student);
        if ($res > 0) {
            return true; // Indicates success
        } else {
            $_SESSION['at'][] = 'warning';
            $_SESSION['am'][] = 'Unable to save student record';
            return false;
        }
    }

    // Check if a CSV file was uploaded
    if (isset($_FILES['csv_file']) && $_FILES['csv_file']['error'] == UPLOAD_ERR_OK) {
        $file = $_FILES['csv_file']['tmp_name'];

        // Read the CSV file
        $handle = fopen($file, "r");

        // Skip the header row
        fgetcsv($handle);

        // Process each row of the CSV file
        $successCount = 0;
        $errorCount = 0;
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            // Extract data from each column
            $fn = $data[0];
            $in = $data[1];
            $program=$data[2];
            $department = $data[3];
            $gender=$data['4'];



            // Insert the student record
            $pwd=md5("123456");
            $result = validateAndInsertStudent($fn, $in, $program, $department, $gender, $pwd);
            if ($result) {
                $successCount++;
            } else {
                $errorCount++;
            }
        }

        fclose($handle);

        if ($successCount > 0) {
            $_SESSION['at'] = 'success';
            $_SESSION['am']= "$successCount student(s) added successfully";
        }

        elseif ($errorCount > 0) {
            $_SESSION['at'] = 'warning';
            $_SESSION['am']= "Failed to add $errorCount student(s)";
        }

        redirect("add-student.php");
    } else {

        $result = validateAndInsertStudent($fn, $in, $program, $department, $gender, $pwd);
        if ($result) {
            $_SESSION['at']= 'success';
            $_SESSION['am'] = 'Student added successfully';
        }

        redirect("add-student.php");
    }
}

render_view("admin/add-student", $ctx);
