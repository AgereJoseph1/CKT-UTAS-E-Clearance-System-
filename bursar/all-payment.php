<?php

require_once "../app/app.php";


$ctx = [
    "title" => "All payments",
    "payments" => CRUD::query("payment")
];





render_view("bursar/all-payment", $ctx);