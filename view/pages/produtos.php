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
                        <td class="botoes-container">
                            <form action="editarProdutos.php" method="GET">
                                <input type="hidden" name="id" value="<?= $produto['id']; ?>">
                                <button class="botao-salvar">
                                        <span class="material-symbols-outlined">
                                            room_preferences
                                        </span>
                                </button>
                            </form>

                            <form action="">
                                <button class="botao-excluir">
                                    <span class="material-symbols-outlined">
                                        delete
                                    </span>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
    </main>
</body>
    <?php require_once __DIR__ . '.\..\components\footer.php'; ?>
</html>