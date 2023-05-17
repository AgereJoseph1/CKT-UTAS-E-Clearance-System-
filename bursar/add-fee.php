<?php

require_once "../app/app.php";



$ctx = [
    "title" => "Add Fees",
    "Fees" =>CRUD::query("fee")
];


render_view('bursar/add-fee', $ctx);


