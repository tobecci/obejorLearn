<?php
/**
 * My configuration file
 */
$path = __DIR__.'/';
echo($path);

require("kint.phar");

//database configuration
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'root';
$db_name = 'learn';

$connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die("Could not connect to database");

d($connect);