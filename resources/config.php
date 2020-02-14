<?php

ob_start();
session_start();

defined("direct") ? null : define("direct" , DIRECTORY_SEPERATOR);

defined("front") ? null : define("front" . direct . "templates/front");

defined("back") ? null : define("back" . direct . "templates/back");


defined("DB_HOST") ? null : define("DB_HOST" . "localhost");
defined("DB_USER") ? null : define("DB_USER" . "root");
defined("DB_PASS") ? null : define("DB_PASS" . "");
defined("DB_NAME") ? null : define("DB_NAME" . "uplayecomdb");

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

require_once("functions.php");
echo __DIR__;
