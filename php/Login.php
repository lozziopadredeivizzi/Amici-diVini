<?php
    require_one("data_source.php");
    
    $Login_username = $_POST["username"];
    $Login_password = $_POST["password"];

    $dbh->login($Login_username, $Login_password);
    $user = $dbh->login($Login_username, $Login_password);
    session_start();
    $_SESSION["user"] = $user[0];
    header('Location: ./homepage.html');

?>
