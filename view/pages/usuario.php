<?php
 
require_once './../../model/UsuarioModel.php';
 
if (isset($_GET['id'])) {
    $modo = 'EDICAO';
    $usuarioModel = new UsuarioModel();
    $usuarios = $usuarioModel->buscarPorId($_GET['id']);
} else {
    $modo = 'CRIACAO';
    $usuarios = [
        'id'=> '',
        'nome'=> '',
        'email'=> '',
        'telefone'=> '',
        'datanascimento'=> '',
        'cpf'=> '',
    ];
}
 
?>
 
<?php require_once './../components/head.php'; ?>

 <body>

    <?php require_once './../components/navbar.php'; ?>
    <?php require_once './../components/sidebar.php'; ?>

    <main class="main-editarcategoria">
        <form class="form-editacategoria" action="salvarUsuario.php" method="POST">
            <input type="hidden" name="id" value="<?=  $usuarios['id']; ?>">

            <label class="form-label" for="nome">Nome</label>
            <input class="form-input" type="text" name="nome" id="nome" placeholder="Nome do usuario" value="<?php  echo $usuarios['nome']; ?>">

            <label class="form-label" for="nome">Email</label>
            <input class="form-input" type="text" name="nome" id="nome" placeholder="Email do usuario" value="<?php  echo $usuarios['email']; ?>">

            <label class="form-label" for="nome">Telefone</label>
            <input class="form-input" type="text" name="nome" id="nome" placeholder="Telefone do usuario" value="<?php  echo $usuarios['telefone']; ?>">

            <label class="form-label" for="nome">Data de nascimento</label>
            <input class="form-input" type="text" name="nome" id="nome" placeholder="Informe a data de nascimento" value="<?php  echo $usuarios['datanascimento']; ?>">

            <label class="form-label" for="nome">CPF</label>
            <input class="form-input" type="text" name="nome" id="nome" placeholder="Cpf do usuario" value="<?php  echo $usuarios['cpf']; ?>">

            <div class="form-btn">
                <button class="btn btn-terciario">
                    Cancelar
                </button>
                <button class="btn btn-secundario">
                    Salvar
                </button>
            </div>

        </form>
    </main>
    <?php require_once './../components/footer.php'; ?>
</body>
</html>