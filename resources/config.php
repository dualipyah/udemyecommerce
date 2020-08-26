<?php
//send alot of request to php
ob_start();
session_start();

// defined("DS") ? null : define ("DS", DIRECTORY_SEPERATOR);
define('DS', DIRECTORY_SEPARATOR);


//echo __DIR__;
//front template
defined("TEMPLATE_FRONT") ? null : define ("TEMPLATE_FRONT" , __DIR__ . DS . "templates/front");
//back template
defined("TEMPLATE_BACK") ? null : define ("TEMPLATE_BACK" , __DIR__ . DS . "templates/front");
//db host
defined("DB_HOST") ? null : define ("DB_HOST" , "localhost");
//db user
defined("DB_USER") ? null : define ("DB_USER" , "root");
//db pass
defined("DB_PASS") ? null : define ("DB_PASS" , "");
//db name
defined("DB_NAME") ? null : define ("DB_NAME" , "ecom_db");

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
require_once("functions.php");


?>