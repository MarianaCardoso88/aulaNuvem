<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Roupas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .produto {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 10px;
            width: calc(33.33% - 20px); /* 33.33% para 3 colunas e subtraindo 20px devido à margem */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .produto img {
            width: 100%;
            height: 300px;
            border-bottom: 1px solid #ccc;
        }
        .produto h3 {
            margin: 10px 0;
            color: #333;
            text-align: center;
        }
        .produto p {
            margin: 0 0 10px;
            color: #666;
            text-align: center;
        }
        .add-carrinho {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: block;
            font-size: 16px;
            border-radius: 0 0 5px 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
            box-sizing: border-box;
        }
        .add-carrinho:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <header>
        <h1>Loja de Roupas</h1>
    </header>
    <div class="container">
        <?php
        $produtos = array(
            array("Camisa Polo", 49.90, "https://images.tcdn.com.br/img/img_prod/231785/camisa_polo_cinza_pensi_4601_1_51d77e289285b4274bc620cfae5b1d6b.png", "Camisa Polo de alta qualidade."),
            array("Calça Jeans", 79.90, "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQ7oRKjNAClMGX-SCLCkoaLVjnMOvIW9bzWw&s", "Calça Jeans confortável e estilosa."),
            array("Vestido Floral", 99.90, "https://images.tcdn.com.br/img/img_prod/757170/90_vestido_alice_midi_floral_liberty_verde_2271_1_b71542cf3bdae4bfc994c147fcd02731.jpg", "Vestido floral perfeito para o verão."),
            array("Blazer Slim Fit", 129.90, "https://images.tcdn.com.br/img/img_prod/839931/90_blazer_masculino_slim_fit_angelo_campana_danithais_2569_1_3c91530171a47a35b946d93ebb891442.jpg", "Blazer elegante e moderno."),
            array("Saia Midi", 59.90, "https://images.tcdn.com.br/img/img_prod/736191/90_saia_midi_em_crepe_kauly_com_bolso_e_botoes_funcionais_lateral_4415_3_06c68dfbe99c4292e0fcd18b63cae680.jpg", "Saia midi em diversas cores."),
            array("Jaqueta de Couro", 149.90, "https://images.tcdn.com.br/img/img_prod/1219434/90_jaqueta_couro_blue_lord_slim_preta_171_1_652444fc737b4914d84bf442f7be8401.jpg", "Jaqueta de couro legítimo."),
            array("Blusa de Tricot", 39.90, "https://images.tcdn.com.br/img/img_prod/1277278/90_blusa_tricot_gola_v_amarelo_175_1_44cc0728cb795b97536a60177bdc94ac.jpeg", "Blusa de tricot confortável."),
            array("Bermuda Cargo", 69.90, "https://static.gordshouse.com.br/public/gordshouse/imagens/produtos/thumbs/bermuda-hocks-grade-preto-verde-653ac4b44a430.png", "Bermuda cargo resistente."),
            array("Regata Esportiva", 29.90, "https://images.tcdn.com.br/img/img_prod/792580/90_camiseta_regata_masculina_leve_e_confortavel_100_poliester_67_1_e8507e3a421efa5c493e7a271ab512c5.jpg", "Regata esportiva para atividades físicas."),
            array("Casaco de Inverno", 179.90, "https://blazee.com.br/wp-content/uploads/2023/05/Classe-da-cidade-novos-homens-jaquetas-de-inverno-moda-lazer-chap-u-curto-algod-o-acolchoado.jpg_Q90.jpg_-1-300x300.jpg", "Casaco quente e estiloso para o inverno.")
        );

        foreach ($produtos as $produto) {
            echo '<div class="produto">';
            echo '<img src="' . $produto[2] . '" alt="' . $produto[0] . '">';
            echo '<h3>' . $produto[0] . '</h3>';
            echo '<p>R$ ' . number_format($produto[1], 2, ',', '.') . '</p>';
            echo '<p>' . $produto[3] . '</p>';
            echo '<button class="add-carrinho" data-produto="' . $produto[0] . '">Adicionar ao Carrinho</button>';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
