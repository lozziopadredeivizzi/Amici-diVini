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
        $stmt = $this->db->prepare("INSERT INTO utente (DataDiNascita, Password, Username, Email, Cognome, Nome) VALUES (?,?,?,?,?,?)");
        $stmt->bind_param("ssssss", $dataDiNascita, $password, $username, $email, $cognome, $nome );
        $stmt->execute();
        if($stmt == TRUE){
            echo "Registrazione effettuata con successo";
        } else{
            echo "Registrazione non effettuata";
        }

    }

    public function addNewProfile($username){
        $string="";
        $int=0;
        $stmt = $this->db->prepare("INSERT INTO profilo (Username, InfoPersonali, Descrizione, AccountSeguiti, Amici, ViniInseriti) VALUES (?,?,?,?,?,?)");
        $stmt->bind_param("sssiii", $username, $string, $string, $int, $int, $int );
        $stmt->execute();
        if($stmt == TRUE){
            echo "Profilo effettuata con successo";
        } else{
            echo "Profilo non effettuata";
        }

    }

    //login utente

    public function login($username, $password){
        $stmt = $this->db->prepare("SELECT * FROM 'utente' WHERE Username=? AND Password=?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    //modifica profilo
    public function modifyProfile($descrizione, $infoPersonali){
        $stmt = $this->db->prepare("UPDATE profilo SET Descrizione, InfoPersonali VALUE (?, ?) WHERE ");
        $stmt->bind_param("ss", $descrizione, $infoPersonali );
        $stmt->execute(); 
    }
    
}