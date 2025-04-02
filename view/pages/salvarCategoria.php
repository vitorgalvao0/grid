<?php
 require_once __DIR__ . './../../model/CategoriaModel.php';
 
 //  verificar se é metodo post 
if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $categoriaModel = new CategoriaModel();

    if(empty($_POST['id'])){
        //criar
        $sucesso = $categoriaModel->criar([
            'nome' => $_POST['nome'],
        ]);
    }else{
        $sucesso = $categoriaModel->editar([
            'id' => $_POST['id'],
            'nome' => $_POST['nome'],
        ]);
    }
    
    if(!$sucesso){
        return "ERRO";
    }
    
}
return header('Location: categorias.php');

?>