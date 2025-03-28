<?php
    require_once __DIR__ ."/../../model/CategoriaModel.php"; 


    if(isset($_GET['id'])){
        $modo = 'EDICAO';
        $categoriaModel = new CategoriaModel();
        $categoria = $categoriaModel->buscarPorId($_GET['id']);
    } else{
        $modo = 'CRIACAO';
        $categoria = [
            'id'=>'',
            'nome'=>'',
        ];
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria</title>
    <link rel="stylesheet" href="/vitorg/adm-site/view/assets/css/style.css">
</head>
<body>
    <?php require_once __DIR__ . '\..\components\navbar.php'; ?>
    <?php require_once __DIR__ . '\..\components\sidebar.php'; ?>

    <main>
        <p>oi</p>
    </main>

    <?php require_once __DIR__ . '\..\components\footer.php'; ?>
</body>
</html>