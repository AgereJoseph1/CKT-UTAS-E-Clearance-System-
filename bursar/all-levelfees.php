<?php

require_once "../app/app.php";


$ctx = [
    "title" => "All Fees",
    "fees" => CRUD::query("fee")
];





render_view("bursar/all-leveFees", $ctx);