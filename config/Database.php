<?php

class Database{
    
    private $host = "localhost";
    private $port = "3306";
    private $dbName = "loja_produtos";
    private $user = "root";
    private $password = "";

    public function conectar(){
        $url = "mysql:host=$this->host;port=$this->port;dbname=$this->dbName;charset=utf8mb4";
        $conn = new PDO($url,$this->user, $this->password);
        return $conn;
    }
}