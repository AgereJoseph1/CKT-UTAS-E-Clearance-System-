<?php

require_once "../app/app.php";


$ctx = [
    "title" => "All Records",
    "records" => CRUD::query('record'),

 
];
if (isset($_POST['delRecord'])){
    $pk = $_POST['pk'];
    $res = CRUD::delete('record', $pk);

    if ($res == 1){
        $_SESSION['at'] = 'info';
        $_SESSION['am'] = 'Book deleted Successfully';
    }else{
        $_SESSION['at'] = 'danger';
        $_SESSION['am'] = $res;
    }
    redirect("records.php");
}


render_view("library/all-records", $ctx);