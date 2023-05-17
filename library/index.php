<?php

require_once "../app/app.php";


$ctx = [
    "title" => "Library Dashboard"
];


render_view("library/index", $ctx);