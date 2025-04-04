<?php
    require_once __DIR__ ."/../../model/ProdutoModel.php";

    $produtoModel = new ProdutoModel;
    $produtos = $produtoModel->listar();
?>

<?php require_once './../components/head.php'; ?>
<body>
    <?php require_once __DIR__ . '\..\components\navbar.php' ?>  
    <?php require_once __DIR__ . '\..\components\sidebar.php' ?>    
  
    <main>
       <h1>Produtos</h1>

       <form class="form-button-add" action="produto.php" method="GET">
                <button class="button-add" type="submit" >
                    <span class="material-symbols-outlined">
                        box_add
                    </span>
                </button>
        </form>

       <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Categoria</th>
                    <th class="edit">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produtos as $produto) { ?>
                    <tr>
                        <td><?php echo $produto['id'] ?></td>
                        <td><?php echo $produto['nome'] ?></td>
                        <td><?php echo $produto['descricao'] ?></td>
                        <td><?php echo $produto['preco'] ?></td>
                        <td><?php echo $produto['catnome'] ?></td>

                        <td class="botoes-container">
                            <form action="produto.php" method="GET">
                                <input type="hidden" name="id" value="<?= $produto['id']; ?>">
                                    <button class="botao-salvar">
                                            <span class="material-symbols-outlined">
                                                box_edit
                                            </span>
                                    </button>
                            </form>

                            <form action="excluirProduto.php" method="POST">
                                <input type="hidden" name="id" value="<?= $produto['id']; ?>">
                                    <button class="botao-excluir">
                                        <span class="material-symbols-outlined">
                                            delete_forever
                                        </span>
                                    </button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
    </main>
    
    <?php require_once __DIR__ . '\..\components\footer.php'; ?>
</body>
</html>