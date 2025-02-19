<?php

$categorias = [
    [
        'id' => '1',
        'nome' => 'Eletrônicos',
        'descricao' => 'Gadgets como smartphones, laptops e dispositivos móveis.'
    ],
    [
        'id' => '2',
        'nome' => 'Eletrodomésticos',
        'descricao' => 'Aparelhos essenciais para o lar, como refrigeradores, fogões e lavadoras.'
    ],
    [
        'id' => '3',
        'nome' => 'Roupas e Acessórios',
        'descricao' => 'Vestuário para todos os estilos, incluindo sapatos e acessórios.'
    ],
    [
        'id' => '4',
        'nome' => 'Beleza e Cuidados Pessoais',
        'descricao' => 'Produtos para maquiagem, perfumes e cuidados com a pele.'
    ],
    [
        'id' => '5',
        'nome' => 'Saúde e Bem-estar',
        'descricao' => 'Suplementos alimentares, vitaminas e itens para higiene e bem-estar.'
    ],
    [
        'id' => '6',
        'nome' => 'Alimentos e Bebidas',
        'descricao' => 'Produtos alimentícios, bebidas e itens gourmet.'
    ],
    [
        'id' => '7',
        'nome' => 'Casa e Decoração',
        'descricao' => 'Móveis, iluminação e artigos decorativos para o lar.'
    ],
    [
        'id' => '8',
        'nome' => 'Esportes e Lazer',
        'descricao' => 'Equipamentos para atividades esportivas, vestuário fitness e bicicletas.'
    ],
    [
        'id' => '9',
        'nome' => 'Automotivo',
        'descricao' => 'Acessórios e componentes para veículos.'
    ],
    [
        'id' => '10',
        'nome' => 'Brinquedos e Jogos',
        'descricao' => 'Brinquedos educativos, jogos de tabuleiro e eletrônicos interativos.'
    ],
    [
        'id' => '11',
        'nome' => 'Papelaria e Escritório',
        'descricao' => 'Artigos escolares, organizadores e móveis para ambiente de trabalho.'
    ],
    [
        'id' => '12',
        'nome' => 'Livros e Mídia',
        'descricao' => 'Obras literárias, e-books e materiais de aprendizado.'
    ],
    [
        'id' => '13',
        'nome' => 'Música e Instrumentos Musicais',
        'descricao' => 'Instrumentos musicais, acessórios e equipamentos de som.'
    ],
    [
        'id' => '14',
        'nome' => 'Pet Shop',
        'descricao' => 'Alimentos, brinquedos e acessórios para animais de estimação.'
    ],
    [
        'id' => '15',
        'nome' => 'Ferramentas e Construção',
        'descricao' => 'Materiais para reformas, ferramentas manuais e equipamentos de segurança.'
    ],
    [
        'id' => '16',
        'nome' => 'Relógios e Óculos',
        'descricao' => 'Relógios de pulso, óculos de correção e de sol.'
    ],
    [
        'id' => '17',
        'nome' => 'Energia Solar e Sustentabilidade',
        'descricao' => 'Sistemas fotovoltaicos, iluminação LED e produtos ecológicos.'
    ],
    [
        'id' => '18',
        'nome' => 'Segurança e Monitoramento',
        'descricao' => 'Sistemas de vigilância, alarmes e fechaduras inteligentes.'
    ],
    [
        'id' => '19',
        'nome' => 'Viagem e Turismo',
        'descricao' => 'Mochilas, malas de viagem e acessórios para turismo.'
    ],
    [
        'id' => '20',
        'nome' => 'Serviços Digitais',
        'descricao' => 'Cursos online, assinaturas de conteúdo e serviços de consultoria.'
    ]
];


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
                <?php foreach ($categorias as $categoria) { ?>
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