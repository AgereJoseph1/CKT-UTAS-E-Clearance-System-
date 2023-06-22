<?php

use JetBrains\PhpStorm\NoReturn;

session_start();


function render_view($name, $ctx = [], $layout=""){

    if (empty($layout)){
        require_once VIEW_ROOT . "layouts/base.layout.php";
    }else{
        require_once VIEW_ROOT . "layouts/$layout.layout.php";
    }

}

function redirect($page, $ctx=[]){
    header("Location:{$page}");
    die();
}



function notAuthenticatedOnly(){
    if (isset($_SESSION['sid'])){
        redirect("../student/dashboard.php");
    }
    elseif (isset($_SESSION['aid'])){
        redirect("../admin/dashboard.php");
    }elseif (isset($_SESSION['tid'])){
        redirect("../snr_mh/dashboard.php");
    }elseif (isset($_SESSION['bid'])){
        redirect("../bursar/dashboard.php");
    }elseif (isset($_SESSION['lid'])){
        redirect("../library/dashboard.php");
    }
    elseif (isset($_SESSION['oid'])){
        redirect("../staff/dashboard.php");
    }
    elseif (isset($_SESSION['hid'])){
        redirect("../headmaster/dashboard.php");
    }
}

function studentOnly(){
    if (!isset($_SESSION['sid'])){
        $_SESSION['at'] = "warning";
        $_SESSION['am'] = "Not Allowed";
        redirect("../");
    }
}


function officerOnly(){
    if (!isset($_SESSION['oid'])){
        $_SESSION['at'] = "warning";
        $_SESSION['am'] = "Not Allowed";
        redirect("../");
    }
}

function adminOnly(){
    if (!isset($_SESSION['aid'])){
        $_SESSION['at'] = "warning";
        $_SESSION['am'] = "Not Allowed";
        redirect("../");
    }
}

function bursarOnly(){
    if (!isset($_SESSION['bid'])){
        $_SESSION['at'] = "warning";
        $_SESSION['am'] = "Not Allowed";
        redirect("../");
    }
}

function librarianOnly(){
    if (!isset($_SESSION['lid'])){
        $_SESSION['at'] = "warning";
        $_SESSION['am'] = "Not Allowed";
        redirect("../");
    }
}
function seniorFHallSuppervsiorOnly(){
    if (!isset($_SESSION['fid'])){
        $_SESSION['at'] = "warning";
        $_SESSION['am'] = "Not Allowed";
        redirect("../");
    }
}
function chemistryLabOnly(){
    if (!isset($_SESSION['cid'])){
        $_SESSION['at'] = "warning";
        $_SESSION['am'] = "Not Allowed";
        redirect("../");
    }
}
function biologyLabOnly(){
    if (!isset($_SESSION['bid'])){
        $_SESSION['at'] = "warning";
        $_SESSION['am'] = "Not Allowed";
        redirect("../");
    }
}
function physicsLabOnly(){
    if (!isset($_SESSION['pid'])){
        $_SESSION['at'] = "warning";
        $_SESSION['am'] = "Not Allowed";
        redirect("../");
    }
}
function teacherOnly(){
    if (!isset($_SESSION['tid'])){
        $_SESSION['at'] = "warning";
        $_SESSION['am'] = "Not Allowed";
        redirect("../");
    }
}



// Function to query fee_info.json and extract student info