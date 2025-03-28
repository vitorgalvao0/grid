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
        $stmt->bindParam("id", $id);
        $stmt->execute();

        return $stmt->fetch();

    }
    // public function buscarPorId($id){
    //    $indexCategoria = -1;
       
    //    $array_filtrado = array_filter(
    //         array: $this->nome,
    //         callback: function($categoria,$index) use($id, &$indexCategoria){
    //             if ($categoria['id']==$id){
    //                 $indexCategoria = $index;
    //                 return $categoria;
    //             } 
    //         }
            
    //     );
    //     return $array_filtrado[$indexCategoria];
    // }
}






