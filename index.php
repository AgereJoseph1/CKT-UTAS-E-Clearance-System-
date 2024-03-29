<?php

require_once  "app/app.php";

$ctx = [
    'title' => 'Home'
];



if (isset($_POST['studentSignIn'])){
    $stid = trim($_POST['stid']);
    $pass = md5(trim($_POST['spwd']));

    if (empty($stid) || empty($pass)) {
        $_SESSION['lat'] = 'warning';
        $_SESSION['lam'] = "Field cannot be empty";
        redirect("../eclear/");
    }
    $res = CRUD::querySingle("student", "index_number=:in", [":in" => $stid]);
    
    if (isset($res['index_number'])){
        if ($res['pwd'] == $pass){
            
            /*
             # Query student table for amount of fees
             # If fees is <= 0:
             #      Grant Access
             #Else:
             #  redirect('')
            */

            $_SESSION['sid'] = $res['id'];
            redirect("student/dashboard.php");
        }else{
            $_SESSION['lat'] = 'danger';
            $_SESSION['lam'] = "Invalid Credentials";
            redirect("../eclear/");
        }
    }else{
        $_SESSION['lat'] = 'danger';
        $_SESSION['lam'] = "Invalid Credentials";
        redirect("../eclear/");
    }
}

if (isset($_POST['staffSignIn'])){
    $semail = trim($_POST['semail']);
    $spwd = trim($_POST['spwd']);
    $spwd=md5($spwd);

    if (empty($semail) || empty($spwd)){
        $_SESSION['sat'] = 'danger';
        $_SESSION['sam'] = "Invalid Credentials";
        redirect("../eclear/");
        exit();
    }

    $staff = CRUD::querySingle("officer", "email=:em", [':em' => $semail]);


    if ($staff['password'] == $spwd ){
        if ($staff['role'] == 'snr_mhall_tutor'){
             $_SESSION["tid"] = $staff['id'];
            redirect("snr_mh/dashboard.php");

        }
        elseif ($staff['role']=='snr_fhall_tutor'){
            $_SESSION["fid"] = $staff['id'];
            redirect("snr_fh/dashboard.php");

        }
        elseif ($staff['role']=='chem_lab'){
            $_SESSION["cid"] = $staff['id'];
            redirect("chem_lab/dashboard.php");

        }
        elseif ($staff['role']=='bio_lab'){
            $_SESSION["bid"] = $staff['id'];
            redirect("bio_lab/dashboard.php");

        }
        elseif ($staff['role']=='phy_lab'){
            $_SESSION["pid"] = $staff['id'];
            redirect("phy_lab/dashboard.php");

        }

        else{
            $_SESSION["oid"] = $staff['id'];
            redirect("staff/dashboard.php");
        }
        exit();
    }
    $_SESSION['sat'] = 'danger';
    $_SESSION['sam'] = "Invalid Credentials";
    redirect("../eclear/");
    exit();

}


render_view("index", $ctx, 'login');