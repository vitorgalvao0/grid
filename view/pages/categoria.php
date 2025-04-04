<?php
 
require_once './../../model/CategoriaModel.php';
 
if (isset($_GET['id'])) {
    $modo = 'EDICAO';
    $categoriaMOdel = new CategoriaModel();
    $categorias = $categoriaMOdel->buscarPorId($_GET['id']);
} else {
    $modo = 'CRIACAO';
    $categorias = [
        'id'=> '',
        'nome'=> '',
    ];
}
 
?>
 
<?php require_once './../components/head.php'; ?>

 <body>

    <?php require_once './../components/navbar.php'; ?>
    <?php require_once './../components/sidebar.php'; ?>

    <main class="main-fomr">
        <form class="form-editar" action="salvarCategoria.php" method="POST">
            <input type="hidden" name="id" value="<?=  $categorias['id']; ?>">

            <label class="form-label" for="nome">Nome</label>
            <input class="form-input" type="text" name="nome" id="nome" placeholder="Nome da nova categoria" value="<?php  echo $categorias['nome']; ?>"required>

            <div class="form-btn">
                <button class="cancelar">
                    Cancelar
                </button>
                <button class="salvar">
                    Salvar
                </button>
            </div>

        </form>
    </main>
    <?php require_once './../components/footer.php'; ?>
</body>
</html>