<?php

class DatabaseConnection
{

    private $db;
    //Connection db
    public function __construct($servername, $username, $password, $dbname, $port)
    {
        $this->db = new mysqli($servername, $username, $password, $dbname, $port);

        if ($this->db->connect_error) {
            die("Connection Failed: " . $this->db->connect_error);
        }
    }


    //add a new user into db

    public function addNewUser($nome, $cognome, $dataDiNascita, $email, $username, $password)
    {
        $stmt = $this->db->prepare("INSERT INTO utente (DataDiNascita, Password, Username, Email, Cognome, Nome) VALUES (?,?,?,?,?,?)");
        $stmt->bind_param("ssssss", $dataDiNascita, $password, $username, $email, $cognome, $nome);
        $stmt->execute();
        if ($stmt == TRUE) {
            echo "Registrazione effettuata con successo";
        } else {
            echo "Registrazione non effettuata";
        }

    }

    public function addNewProfile($username)
    {
        $string = "";
        $int = 0;
        $stmt = $this->db->prepare("INSERT INTO profilo (Username, InfoPersonali, Descrizione, AccountSeguiti, Amici, ViniInseriti) VALUES (?,?,?,?,?,?)");
        $stmt->bind_param("sssiii", $username, $string, $string, $int, $int, $int);
        $stmt->execute();
        if ($stmt == TRUE) {
            echo "Profilo effettuata con successo";
        } else {
            echo "Profilo non effettuata";
        }

    }

    //login utente

    public function login($username, $password)
    {
        $stmt = $this->db->prepare("SELECT * FROM utente WHERE Username=? AND Password=?");
        if ($stmt === false) {
            die("Errore nella preparazione della query");
        }
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        return $user;

    }

    //modifica profilo
    public function modifyProfile($username, $descrizione, $infoPersonali)
    {
        $stmt = $this->db->prepare("UPDATE profilo SET Descrizione=?, InfoPersonali=? WHERE  Username=?");
        $stmt->bind_param("sss", $descrizione, $infoPersonali, $username);
        $stmt->execute();
    }

}