<?php




?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    <link rel="stylesheet" href="/vitorg/adm-site/view/assets/css/style.css">
</head>
<body>
    <?php require_once __DIR__ . '\..\components\navbar.php'; ?>
    <?php require_once __DIR__ . '\..\components\sidebar.php'; ?>

    <main>
        <h1>Categorias</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th class="edit"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($nomes as $nome) { ?>
                    <tr>
                        <td><?php echo $categoria['id'] ?></td>
                        <td><?php echo $categoria['nome'] ?></td>
                        <td><?php echo $categoria['descricao'] ?></td>
                        <td>
                            <!-- <form action="sem pasta" method="GET"> -->
                                <!-- <input type="hidden" name="id" value="<?= $categoria->id; ?>"> -->
                                    <button>
                                        <span class="material-symbols-outlined">
                                            edit
                                        </span>
                                    </button>
                            <!-- </form> -->
                        </td>
                            
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>

    <?php require_once __DIR__ . '\..\components\footer.php'; ?>
</body>
</html>