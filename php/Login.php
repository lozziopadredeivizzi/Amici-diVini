<?php

require_once("data_source.php");

session_start();

$Login_username = $_POST["username"];
$Login_password = $_POST["password"];

$userID = $dbh->login($Login_username, $Login_password);

if ($userID) {
    $_SESSION["username"] = $Login_username;
    $_SESSION["userID"] = $userID;
    header('Location: ../homepage.html');
    exit();
} else {
    echo "Login failed: Please check your username and password";
}

?>