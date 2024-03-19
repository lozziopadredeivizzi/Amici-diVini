<?php
require_once("data_source.php");

session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];


    $descrizione = $_POST["descrizione"];
    $infoPersonali = $_POST["infopersonali"];

    $dbh->modifyProfile($username, $descrizione, $infoPersonali);
    header('Location: ../personalProfile.php');
   
} else {
    header('Location: ../login.html');
}
?>