<?php
require_once __DIR__."/../config/Database.php";

class CategoriaModel{

    private $conn;
    private $tabela = "categoria";

    public function __construct(){
        $db = new Database();
        $this->conn = $db->conectar();
    }

    public function listar() {

        $query = "SELECT * FROM $this->tabela";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll();
    }
    

    public function buscarPorId($id){
        $query = "SELECT * FROM $this->tabela WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        return $stmt->fetch();
    }

    public function criar($categoria){
        $query = "INSERT INTO $this->tabela (nome) VALUE (:nome)";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":nome", $categoria['nome']);
        return $stmt->execute();
    }

    public function editar($categoria){
        $query = "UPDATE $this->tabela SET nome = :nome WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $categoria['id']);
        $stmt->bindParam(":nome", $categoria['nome']);

        return $stmt->execute();
    }

    public function excluir($id){
        $query = "DELETE FROM categoria WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        return $stmt->rowCount() > 0;
    }
}






