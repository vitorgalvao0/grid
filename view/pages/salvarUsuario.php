<?php
 require_once __DIR__ . './../../model/UsuarioModel.php';
 
 //  verificar se é metodo post 
if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $usuarioModel = new UsuarioModel();

    if(empty($_POST['id'])){
        //criar
        $sucesso = $usuarioModel->criar([
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'telefone' => $_POST['telefone'],
            'datanascimento' => $_POST['datanascimento'],
            'cpf' => $_POST['cpf'],

        ]);
    }else{
        $sucesso = $usuarioModel->editar([
            'id' => $_POST['id'],
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'telefone' => $_POST['telefone'],
            'datanascimento' => $_POST['datanascimento'],
            'cpf' => $_POST['cpf'],
        ]);
    }
    
    if(!$sucesso){
        return "ERRO";
    }
    
}
return header('Location: usuarios.php');

