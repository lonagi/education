<?php
header("X-Frame-Options: SAMEORIGIN");
header("X-Content-Type-Options: nosniff");
header("X-XSS-Protection: 1; mode=block");
session_start();

$main_color = "#9769E5";
$description = "Индивидуальные IT занятия и консультации от Lonagi";
$cache_vers = '';

//LIBS
require_once("php/nvg/autoload.php");
nvgPHP::importN(true,"php/nvg/lib");
require_once("php/db.php");
?>