<?php

class Connexion{
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'you_article';
    private $conn; 

    public function __construct() {
        try {
            $this->conn = new PDO('mysql:host='.$this->servername.';dbname='.$this->dbname, $this->username, $this->password);
            echo "Connected to $dbname at $host successfully.";
        } 
        catch(PDOException $e) {
            die('Erreur : '.$e->getMessage());
        }
        
    }
}

?>
