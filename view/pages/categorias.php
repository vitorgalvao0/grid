<?php
    require_once __DIR__ ."/../../model/CategoriaModel.php"; 

    $categoriaModel = new CategoriaModel();
    $categorias = $categoriaModel->listar();
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
                                <button class="botao">
                                        <span class="material-symbols-outlined">
                                            room_preferences
                                        </span>
                                </button>
                            </form>
                            <button class="botao">
                                <span class="material-symbols-outlined">
                                    delete
                                </span>
                            </button>
                        </td>
                            
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>

    <?php require_once __DIR__ . '\..\components\footer.php'; ?>
</body>
</html>