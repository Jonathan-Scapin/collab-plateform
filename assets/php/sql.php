<?php

// $pdo = new PDO('mysql:host=localhost; dbname=reco_indé', 'root', 'root');
// $response = $pdo->query('SELECT * FROM members');
// $datas = $response->fetchAll(PDO::FETCH_OBJ);
// var_dump($datas[1]->LastName);

class Database
{

    private $db_name;
    private $db_user;
    private $db_password;
    private $db_host;
    private $pdo;

    public function __construct($db_name, $db_user = 'root', $db_password = 'root', $db_host = 'localhost')
    {
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_password = $db_password;
        $this->db_host = $db_host;
    }

    private function getPdo()
    {
        if ($this->pdo === null) {
            $pdo = new PDO('mysql:host=localhost; dbname=reco_indé', 'root', 'root');
            $response = $pdo->query('SELECT * FROM members');
            $this->pdo = $pdo;
        }
        return $this->pdo;
    }

    public function query($statement)
    {
        $req = $this->getPdo()->query($statement);
        $datas =  $req->fetchAll(PDO::FETCH_OBJ);
        return $datas;  
    }

};
