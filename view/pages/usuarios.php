<?php
$usuarios = [
    [
        'id' => 1,
        'nome' => 'Carlos Eduardo',
        'email' => 'carlos.eduardo@email.com',
        'senha' => 'hash_da_nova_senha',
        'telefone' => '(11) 98888-1111',
        'data_nascimento' => '1985-06-22',
        'cpf' => '234.567.890-12',
        'genero' => 'Masculino',
    ],
    [
        'id' => 2,
        'nome' => 'Fernanda Pereira',
        'email' => 'fernanda.pereira@email.com',
        'senha' => 'hash_da_nova_senha',
        'telefone' => '(11) 98888-2222',
        'data_nascimento' => '1990-07-19',
        'cpf' => '234.567.890-23',
        'genero' => 'Feminino',
    ],
    [
        'id' => 3,
        'nome' => 'Ricardo Oliveira',
        'email' => 'ricardo.oliveira@email.com',
        'senha' => 'hash_da_nova_senha',
        'telefone' => '(11) 98888-3333',
        'data_nascimento' => '1993-09-17',
        'cpf' => '234.567.890-34',
        'genero' => 'Masculino',
    ],
    [
        'id' => 4,
        'nome' => 'Patricia Santos',
        'email' => 'patricia.santos@email.com',
        'senha' => 'hash_da_nova_senha',
        'telefone' => '(11) 98888-4444',
        'data_nascimento' => '1994-01-25',
        'cpf' => '234.567.890-45',
        'genero' => 'Feminino',
    ],
    [
        'id' => 5,
        'nome' => 'Gabriel Lima',
        'email' => 'gabriel.lima@email.com',
        'senha' => 'hash_da_nova_senha',
        'telefone' => '(11) 98888-5555',
        'data_nascimento' => '1982-11-04',
        'cpf' => '234.567.890-56',
        'genero' => 'Masculino',
    ],
    [
        'id' => 6,
        'nome' => 'Ana Costa',
        'email' => 'ana.costa@email.com',
        'senha' => 'hash_da_nova_senha',
        'telefone' => '(11) 98888-6666',
        'data_nascimento' => '1995-05-18',
        'cpf' => '234.567.890-67',
        'genero' => 'Feminino',
    ],
    [
        'id' => 7,
        'nome' => 'Lucas Pereira',
        'email' => 'lucas.pereira@email.com',
        'senha' => 'hash_da_nova_senha',
        'telefone' => '(11) 98888-7777',
        'data_nascimento' => '1997-02-15',
        'cpf' => '234.567.890-78',
        'genero' => 'Masculino',
    ],
    [
        'id' => 8,
        'nome' => 'Juliana Rocha',
        'email' => 'juliana.rocha@email.com',
        'senha' => 'hash_da_nova_senha',
        'telefone' => '(11) 98888-8888',
        'data_nascimento' => '1988-10-30',
        'cpf' => '234.567.890-89',
        'genero' => 'Feminino',
    ],
    [
        'id' => 9,
        'nome' => 'Eduardo Martins',
        'email' => 'eduardo.martins@email.com',
        'senha' => 'hash_da_nova_senha',
        'telefone' => '(11) 98888-9999',
        'data_nascimento' => '1992-03-13',
        'cpf' => '234.567.890-90',
        'genero' => 'Masculino',
    ],
    [
        'id' => 10,
        'nome' => 'Luana Costa',
        'email' => 'luana.costa@email.com',
        'senha' => 'hash_da_nova_senha',
        'telefone' => '(11) 98888-1000',
        'data_nascimento' => '1989-07-21',
        'cpf' => '234.567.890-01',
        'genero' => 'Feminino',
    ],
    [
        'id' => 11,
        'nome' => 'Felipe Almeida',
        'email' => 'felipe.almeida@email.com',
        'senha' => 'hash_da_nova_senha',
        'telefone' => '(11) 98888-1111',
        'data_nascimento' => '1984-09-04',
        'cpf' => '234.567.890-12',
        'genero' => 'Masculino',
    ],
    [
        'id' => 12,
        'nome' => 'Mariana Silva',
        'email' => 'mariana.silva@email.com',
        'senha' => 'hash_da_nova_senha',
        'telefone' => '(11) 98888-2222',
        'data_nascimento' => '1996-02-12',
        'cpf' => '234.567.890-23',
        'genero' => 'Feminino',
    ],
    [
        'id' => 13,
        'nome' => 'João Pereira',
        'email' => 'joao.pereira@email.com',
        'senha' => 'hash_da_nova_senha',
        'telefone' => '(11) 98888-3333',
        'data_nascimento' => '1989-08-22',
        'cpf' => '234.567.890-34',
        'genero' => 'Masculino',
    ],
    [
        'id' => 14,
        'nome' => 'Isabela Costa',
        'email' => 'isabela.costa@email.com',
        'senha' => 'hash_da_nova_senha',
        'telefone' => '(11) 98888-4444',
        'data_nascimento' => '1991-04-14',
        'cpf' => '234.567.890-45',
        'genero' => 'Feminino',
    ],
    [
        'id' => 15,
        'nome' => 'Vinícius Martins',
        'email' => 'vinicius.martins@email.com',
        'senha' => 'hash_da_nova_senha',
        'telefone' => '(11) 98888-5555',
        'data_nascimento' => '1983-11-10',
        'cpf' => '234.567.890-56',
        'genero' => 'Masculino',
    ]
];

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
    <link rel="stylesheet" href="/vitorg/adm-site/view/assets/css/style.css">
</head>
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
                    <th>Senha</th>
                    <th>Telefone</th>
                    <th>Data Nascimento</th>
                    <th>CPF</th>
                    <th>Gênero</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario) { ?>
                    <tr>
                        <td><?php echo $usuario['id'] ?></td>
                        <td><?php echo $usuario['nome'] ?></td>
                        <td><?php echo $usuario['email'] ?></td>
                        <td><?php echo $usuario['senha'] ?></td>
                        <td><?php echo $usuario['telefone'] ?></td>
                        <td><?php echo $usuario['data_nascimento'] ?></td>
                        <td><?php echo $usuario['cpf'] ?></td>
                        <td><?php echo $usuario['genero'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>

    <?php require_once __DIR__ . '\..\components\footer.php'; ?>
</body>
</html>