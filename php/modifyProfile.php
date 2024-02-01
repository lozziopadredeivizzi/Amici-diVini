<?php
    require_once("database.php");

    $descrizione = $_POST["descrizione"];
    $infoPersonali = $_POST["infopersonali"];

    $dbh->modifyProfile($descrizione, $infoPersonali);
    header('Location: ../personalProfile.html');
   
?>