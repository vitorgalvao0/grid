<?php
    require_once __DIR__ ."/../../model/CategoriaModel.php"; 
 
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = ["id"];
 
    if (!empty($id)) {
        $categoriaModel = new CategoriaModel();
        $categoriaModel->excluir($_POST['id']);
    }
}
 
return header('Location: categorias.php');
   

