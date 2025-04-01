<?php
    require_once __DIR__ ."/../../model/UsuarioModel.php";
    $usuarioModel = new UsuarioModel();
    $usuarios = $usuarioModel->listar();
?>

<?php require_once './../components/head.php'; ?>
<body>
    <?php require_once __DIR__ . '\..\components\navbar.php'; ?>
    <?php require_once __DIR__ . '\..\components\sidebar.php'; ?>

    <main>
        <h1>Usuários</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Data Nascimento</th>
                    <th>CPF</th>
                    <th class="edit">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario) { ?>
                    <tr>
                        <td><?php echo $usuario['id'] ?></td>
                        <td><?php echo $usuario['nome'] ?></td>
                        <td><?php echo $usuario['email'] ?></td>
                        <td><?php echo $usuario['telefone'] ?></td>
                        <td><?php echo $usuario['datanascimento'] ?></td>
                        <td><?php echo $usuario['cpf'] ?></td>
                        <td class="botoes-container">
                            <form action="editarUsuario.php" method="GET">
                                <input type="hidden" name="id" value="<?= $usuario['id']; ?>">
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