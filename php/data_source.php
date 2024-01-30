<?php 
require_once("db/database.php");
$dbh = new DatabaseHelper ("localhost", "root", "", ,"amici diVini", 3306);
define("UPLOAD_DIR", "./upload"); //folder where we put img
?>