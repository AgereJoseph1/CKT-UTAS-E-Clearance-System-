<?php

require_once "../app/app.php";
adminOnly();

$ctx = [
    "title" => "Admin Dashboard", 
    "officeCount" => R::count("office"),
    "officerCount" => R::count("formmaster") + R::count("officer"),
    "clearedStudentCount" => R::count("student","clearance_completed =1 "),
    "unclearedStudentCount" => R::count("student","clearance_completed = 0"),
    "studentcount" => R::count("student"),
];


render_view("admin/dashboard", $ctx);
