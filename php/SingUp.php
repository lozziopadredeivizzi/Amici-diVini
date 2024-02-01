<?php
    require_once("data_source.php");
    
    $signUp_name = $_POST["nome"];
    $signUp_date = $_POST["dataNascita"];
    $signUp_username = $_POST["username"];
    $signUp_surname = $_POST["cognome"];
    $signUp_email = $_POST["email"];
    $signUp_password = $_POST["password"];


    $dbh->addNewUser($signUp_name, $signUp_surname, $signUp_date, $signUp_email, $signUp_username, $signUp_password);
    $dbh->addNewProfile($signUp_username);
    header('Location: ../modificaprofilo.html');
   
    /* $user = $dbh->login($signUp_username, $signUp_password);
    session_start();
    $_SESSION["user"] = $user[0];
    */


?>
