<?php
 
require_once './../../model/UsuarioModel.php';
 
if (isset($_GET['id'])) {
    $modo = 'EDICAO';
    $usuarioModel = new UsuarioModel();
    $produtos = $usuarioModel->buscarPorIdUsuario($_GET['id']);
} else {
    $modo = 'CRIACAO';
    $produtos = [
        'id'=> '',
        'nome'=> '',
        'email'=> '',
        'telefone'=> '',
        'datanascimento'=> '',
        'cpf'=> ''
    ];
}
 
?>
 
<?php require_once './../components/head.php'; ?>
 
<body>
    <?php require_once './../components/navbar.php'; ?>
    <?php require_once './../components/sidebar.php'; ?>

    <main class="main-editarcategoria">
        <form class="form-editacategoria" action="produtos.php">
            <label class="form-label" for="nome">Nome</label>
            <input class="form-input" type="text" id="nome" value="<?php echo $produtos['nome']; ?>">

            <label class="form-label" for="descricao">Email</label>
            <input class="form-input" type="text" id="descricao" value="<?php echo $produtos['email']; ?>">

            <label class="form-label" for="nome">Telefone</label>
            <input class="form-input" type="text" id="nome" value="<?php echo $produtos['telefone']; ?>">

            <label class="form-label" for="nome">Data de Nascimento</label>
            <input class="form-input" type="text" id="nome" value="<?php echo $produtos['datanascimento']; ?>">
            
            <label class="form-label" for="nome">Cpf</label>
            <input class="form-input" type="text" id="nome" value="<?php echo $produtos['cpf']; ?>">

        </form>
    </main>
<?php require_once './../components/footer.php'; ?>
</body>
</html>