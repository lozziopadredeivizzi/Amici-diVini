<?php
session_start();
require_once ("../utils/function.php");
require_once ("../db/database.php");
$dbh = new DatabaseConnection("localhost", "root", "", "amicidiVini", 3306);
?>