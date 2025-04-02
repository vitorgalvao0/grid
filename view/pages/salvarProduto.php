<?php
 require_once __DIR__ . './../../model/ProdutoModel.php';
 
 //  verificar se é metodo post 
if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $produtoModel = new ProdutoModel();

    if(empty($_POST['id'])){
        //criar
        $sucesso = $produtoModel->criar([
            'nome' => $_POST['nome'],
            'descricao' => $_POST['descricao'],
            'preco' => $_POST['preco'],
            'idcategoria' => $_POST['idcategoria'],

        ]);
    }else{
        $sucesso = $produtoModel->editar([
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