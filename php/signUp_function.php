<?php
    require_one("../data_source.php");

    $signUp_name = $_POST["nome"];
    $signUp_date = $_POST["dataDiNascita"];
    $signUp_username = $_POST["username"];
    $signUp_surname = $_POST["cognome"];
    $signUp_email = $_POST["email"];
    $signUp_password = $_POST["password"];

    echo $signUp_username
    echo $_POST["repeatPassword"];
    if($signUp_password != $_POST["repeatPassword"]){
        header('Location: /NowMusic/src/auth/sign_up.php?error=1'); //modificare questo
    } else {
        try {
            $crypted_password = $_POST["crypt_password"];
            $dbh->addNewUser($signUp_username, $crypted_password, $signUp_email);
            $user = $dbh->login($signUp_email, $crypted_password);
            session_start();
            $_SESSION["user"] = $user[0];
            header('Location: /NowMusic/src/home/home.php');
        } catch (Exception $e) {
            header('Location: /NowMusic/src/auth/sign_up.php?error=2');
        }
    }
?>
