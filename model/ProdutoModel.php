<?php 
class ProdutoModel{

    private $produtos =[
        [
            'id' => '1',
            'nome' => 'iPhone 15 128GB - Smartphone de Alta Performance',
            'descricao' => 'O iPhone 15 apresenta uma tela OLED de 6,1 polegadas, processador A17 Bionic e câmera de 48 MP, oferecendo desempenho de ponta e uma experiência de usuário excepcional.',
            'categoria' => 'Eletrônicos',
            'preco' => 6598.90 
        ],
        [
            'id' => '2',
            'nome' => 'Geladeira Samsung 520L Side by Side - Tecnologia No Frost',
            'descricao' => 'Geladeira com capacidade de 520 litros, sistema de refrigeração No Frost, prateleiras ajustáveis e painel digital, ideal para grandes famílias e eficiência energética.',
            'categoria' => 'Eletrodomésticos',
            'preco' => 3848.90 
        ],
        [
            'id' => '3',
            'nome' => 'Tênis Nike Air Max 270 - Amortecimento e Conforto',
            'descricao' => 'Tênis de corrida com tecnologia Air Max, proporcionando excelente amortecimento e conforto. Design moderno e estilo único para todas as ocasiões.',
            'categoria' => 'Roupas e Acessórios',
            'preco' => 549.90 
        ],
        [
            'id' => '4',
            'nome' => 'Base Líquida LOréal Infallible - Alta Cobertura e Acabamento Matte',
            'descricao' => 'Base líquida com alta cobertura e acabamento matte, garantindo uma pele impecável por até 24 horas. Fórmula leve e de longa duração, perfeita para o dia a dia.',
            'categoria' => 'Beleza e Cuidados Pessoais',
            'preco' => 98.90 
        ],
        [
            'id' => '5',
            'nome' => 'Multivitamínico One a Day - Suplemento Diário Completo',
            'descricao' => 'Suplemento multivitamínico diário com uma combinação balanceada de vitaminas e minerais para melhorar a saúde geral, fortalecer o sistema imunológico e aumentar a disposição.',
            'categoria' => 'Saúde e Bem-estar',
            'preco' => 76.90 
        ],
        [
            'id' => '6',
            'nome' => 'Cerveja Artesanal IPA - Sabor Intenso e Amargor Marcante',
            'descricao' => 'Cerveja artesanal estilo IPA, com aroma floral e sabor forte, ideal para apreciadores de cervejas de caráter marcante e amargor equilibrado.',
            'categoria' => 'Alimentos e Bebidas',
            'preco' => 21.90 
        ],
        [
            'id' => '7',
            'nome' => 'Sofá Retrátil 3 Lugares - Conforto e Estilo para Sua Sala',
            'descricao' => 'Sofá retrátil e reclinável com 3 lugares, proporcionando conforto e estilo para sua sala de estar. Ideal para relaxar ou receber visitas com sofisticação.',
            'categoria' => 'Casa e Decoração',
            'preco' => 1758.90 
        ],
        [
            'id' => '8',
            'nome' => 'Bicicleta MTB Aro 29 - Suspensão Dianteira e Conforto',
            'descricao' => 'Bicicleta mountain bike com aro 29 e suspensão dianteira, ideal para aventuras e trilhas, proporcionando conforto e performance nas mais diversas superfícies.',
            'categoria' => 'Esportes e Lazer',
            'preco' => 2088.90 
        ],
        [
            'id' => '9',
            'nome' => 'Kit de Faróis LED para Carro - Aumento de Visibilidade e Segurança',
            'descricao' => 'Kit de faróis LED automotivos com alta luminosidade e baixo consumo de energia. Melhora a visibilidade, aumentando a segurança ao dirigir durante a noite ou em condições adversas.',
            'categoria' => 'Automotivo',
            'preco' => 328.90 
        ],
        [
            'id' => '10',
            'nome' => 'Jogo de Tabuleiro Catan - Conquista e Estratégia',
            'descricao' => 'Catan é um jogo de estratégia onde os jogadores competem para conquistar e negociar recursos em uma ilha. Ideal para jogos em família e com amigos.',
            'categoria' => 'Brinquedos e Jogos',
            'preco' => 274.90 
        ],
        [
            'id' => '11',
            'nome' => 'Caderno Universitário 10 Matérias - Organize Seus Estudos com Estilo',
            'descricao' => 'Caderno espiral com 10 matérias, capa personalizada e design moderno. Perfeito para estudantes que buscam praticidade e estilo no dia a dia escolar.',
            'categoria' => 'Papelaria e Escritório',
            'preco' => 21.90 
        ],
        [
            'id' => '12',
            'nome' => 'O Senhor dos Anéis - Edição Especial - Capa Dura e Ilustrações Exclusivas',
            'descricao' => 'Edição luxuosa do clássico de J.R.R. Tolkien, com capa dura, ilustrações exclusivas e acabamento de alta qualidade. Ideal para colecionadores e fãs de fantasia épica.',
            'categoria' => 'Livros e Mídia',
            'preco' => 164.90 
        ],
        [
            'id' => '13',
            'nome' => 'Violão Yamaha F310 - Ideal para Iniciantes e Apaixonados por Música',
            'descricao' => 'Violão acústico de excelente qualidade, com cordas de aço e construção sólida, perfeito para iniciantes que desejam aprender ou para músicos que buscam um instrumento confiável.',
            'categoria' => 'Música e Instrumentos Musicais',
            'preco' => 878.90 
        ],
        [
            'id' => '14',
            'nome' => 'Ração Pedigree Sabor Frango 15kg - Nutrição Completa para Seu Cão',
            'descricao' => 'Ração seca para cães com sabor de frango, rica em nutrientes essenciais para manter a saúde e vitalidade do seu pet. A embalagem de 15kg oferece uma alimentação balanceada por um longo período.',
            'categoria' => 'Pet Shop',
            'preco' => 65.90 
        ],
        [
            'id' => '15',
            'nome' => 'Furadeira Bosch 600W - Potência e Versatilidade em um Só Equipamento',
            'descricao' => 'Furadeira elétrica Bosch de 600W, com controle de velocidade variável. Ideal para perfurar diferentes materiais como madeira, metal e alvenaria, garantindo alta performance e durabilidade.',
            'categoria' => 'Ferramentas e Construção',
            'preco' => 329.90 
        ],
        [
            'id' => '16',
            'nome' => 'Relógio Casio G-Shock - Resistência e Estilo para Aventureiros',
            'descricao' => 'Relógio digital Casio G-Shock, resistente a choques e à água, ideal para praticantes de esportes radicais e aventureiros. Design robusto e cheio de estilo.',
            'categoria' => 'Relógios e Óculos',
            'preco' => 439.90 
        ],
        [
            'id' => '17',
            'nome' => 'Kit Solar 200W - Energia Limpa e Sustentável',
            'descricao' => 'Kit completo com painel solar de 200W, inversor e bateria para armazenamento de energia. Ideal para quem deseja investir em energia solar e reduzir sua pegada de carbono.',
            'categoria' => 'Energia Solar e Sustentabilidade',
            'preco' => 2858.90 
        ],
        [
            'id' => '18',
            'nome' => 'Câmera de Segurança Arlo Pro 4 - Monitoramento de Alta Qualidade',
            'descricao' => 'Câmera de segurança sem fio Arlo Pro 4 com alta definição de imagem, visão noturna e compatibilidade com dispositivos móveis, proporcionando monitoramento remoto de alta qualidade.',
            'categoria' => 'Segurança e Monitoramento',
            'preco' => 1428.90 
        ],
        [
            'id' => '19',
            'nome' => 'Mala de Viagem Samsonite - Conforto e Praticidade em Suas Viagens',
            'descricao' => 'Mala de viagem Samsonite, resistente e leve, com compartimentos internos organizadores, rodas duplas e design elegante, perfeita para suas viagens de curta e longa distância.',
            'categoria' => 'Viagem e Turismo',
            'preco' => 988.90 
        ],
        [
            'id' => '20',
            'nome' => 'Curso de Marketing Digital - Aprenda a Vender Online',
            'descricao' => 'Curso online de marketing digital, abordando estratégias de SEO, anúncios pagos (Ads) e redes sociais. Ideal para quem deseja aprender a vender produtos e serviços na internet.',
            'categoria' => 'Serviços Digitais',
            'preco' => 548.90 
        ]
    ];

    public function listar() {
        return $this->produtos;
    }

    public function buscarPorId($id){
       $indexProduto = -1;

       $array_filtrado = array_filter(
            array: $this->produtos,
            callback: function($produto,$index) use($id, &$indexProduto){
                if ($produto['id']==$id){
                    $indexProduto = $index;
                    return $produto;
                } 
            }
            
        );
        return $array_filtrado[$indexProduto];
    }
}