<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

define("DB_SERVER", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "projekt");

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
/*$link -> query ('SET NAMES utf8');
$link -> query ('SET CHARACTER_SET utf8_unicode_ci'); */

$link->query("SET CHARSET utf8");
$link->query("SET NAMES `utf8` COLLATE `utf8_polish_ci`"); 

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>