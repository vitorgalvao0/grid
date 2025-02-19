<?php
// require_once __DIR__ . '\..\model\ProdutoModel.php';
// $produtoModel = new ProdutoModel;
// $produtos = $produtoModel->listar()

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
       <div class="produtos">
            <?php foreach ($produtos as $produto) { ?>
                <div class="produto">
                    <!-- <h2>ID : <?php echo $produto['id'] ?></h2> -->
                    <span> <h2>Nome :</h2> <?php echo $produto['nome'] ?></span>
                    <span> <h2>Descrição :</h2> <?php echo $produto['descricao'] ?></span>
                    <span> <h2>Categoria :</h2> <?php echo $produto['categoria'] ?></span>
                    <span> <h2>Preço :</h2> <?php echo $produto['preco'] ?></span>
                </div>
            <?php } ?>
       </div>
    </main>

    <?php require_once __DIR__ . '\..\components\footer.php'; ?>
</body>

</html>