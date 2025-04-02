<?php
 
require_once './../../model/ProdutoModel.php';
 
if (isset($_GET['id'])) {
    $modo = 'EDICAO';
    $produtoModel = new ProdutoModel();
    $produtos = $produtoModel->buscarPorId($_GET['id']);
} else {
    $modo = 'CRIACAO';
    $produtos = [
        'id'=> '',
        'nome'=> '',
        'descricao'=> '',
        'preco'=> '',
        'idcategoria'=> '',
    ];
}
 
?>
 
<?php require_once './../components/head.php'; ?>

 <body>

    <?php require_once './../components/navbar.php'; ?>
    <?php require_once './../components/sidebar.php'; ?>

    <main class="main-editarcategoria">
        <form class="form-editacategoria" action="salvarProduto.php" method="POST">
            <input type="hidden" name="id" value="<?=  $produtos['id']; ?>">

            <label class="form-label" for="nome">Nome</label>
            <input class="form-input" type="text" name="nome" id="nome" placeholder="Nome do produto" value="<?php  echo $produtos['nome']; ?>">

            <label class="form-label" for="nome">Descricao</label>
            <input class="form-input" type="text" name="nome" id="nome" placeholder="Descricao do seu produto" value="<?php  echo $produtos['descricao']; ?>">

            <label class="form-label" for="nome">Preco</label>
            <input class="form-input" type="text" name="nome" id="nome" placeholder="Preco do seu produto" value="<?php  echo $produtos['preco']; ?>">

            <label class="form-label" for="nome">Categoria</label>
            <input class="form-input" type="text" name="nome" id="nome" placeholder="Qual a categoria do seu produto" value="<?php  echo $produtos['idcategoria']; ?>">

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