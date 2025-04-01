<?php
 
require_once './../../model/ProdutoModel.php';
 
if (isset($_GET['id'])) {
    $modo = 'EDICAO';
    $produtoModel = new ProdutoModel();
    $produtos = $produtoModel->buscarPorIdProduto($_GET['id']);
} else {
    $modo = 'CRIACAO';
    $produtos = [
        'id'=> '',
        'nome'=> '',
        'descricao'=> '',
        'id_categoria'=> '',
        'preco'=> '',
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

            <label class="form-label" for="descricao">Descricao</label>
            <input class="form-input" type="text" id="descricao" value="<?php echo $produtos['descricao']; ?>">

            <label class="form-label" for="nome">IdCategoria</label>
            <input class="form-input" type="text" id="nome" value="<?php echo $produtos['id_categoria']; ?>">

            <label class="form-label" for="nome">Preco</label>
            <input class="form-input" type="text" id="nome" value="<?php echo $produtos['preco']; ?>">

        </form>
    </main>
<?php require_once './../components/footer.php'; ?>
</body>
</html>