<?php
    require_once __DIR__ ."/../../model/ProdutoModel.php";
    $produtoModel = new ProdutoModel;
    $produtos = $produtoModel->listar();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="/vitorg/adm-site/view/assets/css/style.css">
</head>

<body>
    <?php require_once __DIR__ . '\..\components\navbar.php' ?>  
    <?php require_once __DIR__ . '\..\components\sidebar.php' ?>    
  
    <main>
       <h1>Produtos</h1>
       <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Categoria</th>
                    <th>Preco</th>
                    <th class="edit">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produtos as $produto) { ?>
                    <tr>
                        <td><?php echo $produto['id'] ?></td>
                        <td><?php echo $produto['nome'] ?></td>
                        <td><?php echo $produto['descricao'] ?></td>
                        <td><?php echo $produto['categoria'] ?></td>
                        <td><?php echo $produto['preco'] ?></td>
                    </tr>
                <?php } ?>
    </main>
</body>
    <?php require_once __DIR__ . '\..\components\footer.php'; ?>
</html>