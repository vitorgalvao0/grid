<?php
 
require_once './../../model/ProdutoModel.php';
require_once './../../model/CategoriaModel.php';
$categoriaModel = new CategoriaModel();
$categorias = $categoriaModel->listar();

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

    <main class="main-form">
        <form class="form-editar" action="salvarProduto.php" method="POST">
            <input type="hidden" name="id" value="<?=  $produtos['id']; ?>">

            <label class="form-label" for="nome">Nome</label>
            <input class="form-input" type="text" name="nome" id="nome" placeholder="Nome do produto" value="<?php  echo $produtos['nome']; ?>" required>

            <label class="form-label" for="descricao">Descricao</label>
            <input class="form-input" type="text" name="descricao" id="descricao" placeholder="Descricao do seu produto" value="<?php  echo $produtos['descricao']; ?>" required>

            <label class="form-label" for="preco">Preco</label>
            <input class="form-input" type="text" name="preco" id="preco" placeholder="Preco do seu produto" value="<?php  echo $produtos['preco']; ?>" required>

            <label class="form-label" for="id_categoria">Categoria</label>
            <select class="form-input" id="id_categoria" name="idcategoria" required> 
                <option value="">Selecione uma Categoria</option>
                <?php foreach ($categorias as $categoria) { ?>
                    <option value="<?php echo $categoria['id']; ?>"
                        <?php echo ($produtos['idcategoria'] == $categoria['id']) ? 'selected' : ''; ?>>
                        <?php echo $categoria['nome']; ?>
                    </option>
                <?php } ?>
            </select>
            

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