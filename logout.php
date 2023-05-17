<?php

    require "app/app.php";


if (isset($_POST['userLogout'])){
    if (isset($_SESSION['sid'])){
        unset($_SESSION['sid']);
    }
    elseif (isset($_SESSION['aid'])){
        unset($_SESSION['aid']);
    }elseif (isset($_SESSION['tid'])){
        unset($_SESSION['tid']);
    }elseif (isset($_SESSION['bid'])){
        unset($_SESSION['bid']);
    }elseif (isset($_SESSION['lid'])){
        unset($_SESSION['lid']);
    }else{
        unset($_SESSION['oid']);
    }
    redirect("../eclear/");
}