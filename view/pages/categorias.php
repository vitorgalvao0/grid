<?php
    require_once __DIR__ ."/../../model/CategoriaModel.php"; 

    $categoriaModel = new CategoriaModel();
    $categorias = $categoriaModel->listar();
?>

<?php require_once __DIR__ . '\..\components\head.php'; ?>
<body>
    <?php require_once __DIR__ . '\..\components\navbar.php'; ?>
    <?php require_once __DIR__ . '\..\components\sidebar.php'; ?>

    <main>
        <h1>Categoria</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th class="edit">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categorias as $categoria) { ?>
                    <tr>
                        <td><?php echo $categoria['id'] ?></td>
                        <td><?php echo $categoria['nome'] ?></td>
                        <td class="botoes-container">
                            <form action="editarCategoria.php" method="GET">
                                <input type="hidden" name="id" value="<?= $categoria['id']; ?>">
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
            </tbody>
        </table>
    </main>

    <?php require_once __DIR__ . '\..\components\footer.php'; ?>
</body>
</html>