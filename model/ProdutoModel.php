<?php 
require_once __DIR__."/../config/Database.php";

class ProdutoModel{

    private $conn;
    private $tabela = "produto";

    public function __construct(){
        $db = new Database();
        $this->conn = $db->conectar();
    }

    public function listar() {

        $query = "SELECT p.*, c.nome as catnome FROM $this->tabela p INNER JOIN categoria c ON p.idcategoria = c.id" ;

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

    public function criar($produto){
        $query = "INSERT INTO $this->tabela (nome,descricao,preco,idcategoria) VALUE (:nome,:descricao,:preco,:idcategoria)";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":nome", $produto['nome']);
        $stmt->bindParam(":descricao", $produto['descricao']);
        $stmt->bindParam(":preco", $produto['preco']);
        $stmt->bindParam(":idcategoria", $produto['idcategoria']);

        return $stmt->execute();
    }

    public function editar($produto){
        $query = "UPDATE $this->tabela SET nome = :nome, descricao = :descricao, preco = :preco, idcategoria = :idcategoria WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $produto['id']);
        $stmt->bindParam(":nome", $produto['nome']);
        $stmt->bindParam(":descricao", $produto['descricao']);
        $stmt->bindParam(":preco", $produto['preco']);
        $stmt->bindParam(":idcategoria", $produto['idcategoria']);

        return $stmt->execute();
    }

    public function excluir($id){
        $query = "DELETE FROM produto WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        return $stmt->rowCount() > 0;
    }
    
}