<?php

define("APP_ROOT", dirname(__DIR__, 1) . "/");
const VIEW_ROOT = APP_ROOT . "views/";
define ("ASSET_PATH", "/" . explode("\\", APP_ROOT)[3] . "assets");

require_once "rb.php";
require_once "dbConf.php";
require_once "funcs.php";
require_once "crud.php";
//require_once "models/Office.model.php";
//require_once "models/Officer.model.php";
//require_once "models/Student.model.php";
//require_once "models/Clearance.model.php";
//require_once "models/ClearanceItem.model.php";
//require_once "models/FormMaster.model.php";
//require_once "models/Book.model.php";
//require_once "models/BorrowedBook.model.php";
//require_once "models/Fee.model.php";
//require_once "models/FeePaid.model.php";
