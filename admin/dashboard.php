<?php

require_once "../app/app.php";
adminOnly();

$ctx = [
    "title" => "Admin Dashboard", 
    "officeCount" => R::count("office"),
    "officerCount" => R::count("formmaster") + R::count("officer"),
    "institutionCount" => R::count("institution"),
    "studentcount" => R::count("student"),
];


render_view("admin/dashboard", $ctx);
