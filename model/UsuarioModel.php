<?php 
require_once __DIR__."/../config/Database.php";

class UsuarioModel{

    private $conn;
    private $tabela = "usuario";

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
        $query = "INSERT INTO $this->tabela (nome,email,telefone,datanascimento,cpf) VALUE (:nome,:email,:telefone,:datanascimento,:cpf)";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":nome", $categoria['nome']);
        $stmt->bindParam(":email", $categoria['email']);
        $stmt->bindParam(":telefone", $categoria['telefone']);
        $stmt->bindParam(":datanascimento", $categoria['datanascimento']);
        $stmt->bindParam(":cpf", $categoria['cpf']);

        return $stmt->execute();
    }

    public function editar($categoria){
        $query = "UPDATE $this->tabela SET nome = :nome, email = :email, telefone = :telefone, datanascimento = :datanascimento WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $categoria['id']);
        $stmt->bindParam(":nome", $categoria['nome']);
        $stmt->bindParam(":email", $categoria['email']);
        $stmt->bindParam(":telefone", $categoria['telefone']);
        $stmt->bindParam(":datanascimento", $categoria['datanascimento']);
        $stmt->bindParam(":cpf", $categoria['cpf']);

        return $stmt->execute();
    }

    public function excluir($id){
        $query = "DELETE FROM usuario WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        return $stmt->rowCount() > 0;
    }
}