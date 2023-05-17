<?php

require_once 'rb.php';

const USER = "root";
const PWD = "";
try{
    R::setup("mysql:host=localhost;dbname=eclear",USER,PWD);
}catch (Exception $e){
    die($e);
}


