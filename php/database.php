<?php

class DatabaseConnection {
    
    private $db;
    //Connection db
    public function __construct($servername, $username, $password, $dbname, $port){
        $this->db = new mysqli($servername, $username, $password, $dbname, $port);

        if ($this->db->connect_error){
            die("Connection Failed: " . $db->connect_error);
        }
    }

    //add a new user into db

    public function addNewUser($nome, $cognome, $dataDiNascita, $email, $username, $password){
        $stmt = $this->db->prepare("INSERT INTO utente (DataDiNascita, Password, Username, Email, Cognome, Nome VALUES (?,?,?,?,?,?)");
        $stmt->bind_param("ssssss", $nome, $cognome, $dataDiNascita, $email, $username, $password );
        $stmt->execute();

    }

    //login utente

    public function login($username, $password){
        $stmt = $this->db->prepare("SELECT * FROM 'utente' WHERE Username=? AND Password=?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

}