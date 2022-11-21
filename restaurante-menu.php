<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=H1, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $pratos = [
        "file-sabara" => [
            "titulo" => "PRATO FILÉ AO MOLHO SABARÁ",
            "ingredientes" => " Medalhão de Filé, flambado na cachaça, com purê de mandioca ao molho de jabuticaba ",
            "tempo" => "Tempo médio de preparo 30 minutos ",
            "sugestao" => "Prato harmoniza com vinho branco seco",
        ],

        "tilapia-tabuleiro" => [
            "titulo" => "PRATO TILÁPIA A MODA CACHOEIRA TABULEIRO",
            "ingredientes" => " Filé de Tilápia no limão, acompanha salada de repolho com abacaxi e maçã e arroz branco ao alho ",
            "tempo" => "Tempo médio de preparo 20 minutos ",
            "sugestao" => "Prato harmoniza com vinho branco seco",
        ],

        "costelinha-tiradentes" => [
            "titulo" => "PRATO COSTELINHA A MODA TIRADENTES ",
            "ingredientes" => " Costelinha banhada na cachaça, acompanha couve frita, lascas de mandioca com molho de pimenta biquinho ",
            "tempo" => "Tempo médio de preparo 40 minutos",
            "sugestao" => "Prato harmoniza com vinho suave ",
        ],

        "serra-caraca" => [
            "titulo" => "PETISCO SERRA DO CARAÇA ",
            "ingredientes" => "Bolinho de arroz recheado com queijo e goiabada ",
            "tempo" => "Tempo médio de preparo 20 minutos",
            "sugestao" => "Prato harmoniza com vinho de jabuticada",
        ],
        "frango-diamantina" => [
            "titulo" => "PRATO SURPRESA DIAMANTINA DE FRANGO ",
            "ingredientes" => "Bombom de frango, envolto em bacon e queijo banhado ao molho de mostarda e mel ",
            "tempo" => "Tempo médio de preparo 20 minutos",
            "sugestao" => " Prato harmoniza com vinho suave",
        ],

        "pastel-angu" => [
            "titulo" => "PETISCO PASTEL DE ANGU TROPEIRO ",
            "ingredientes" => " Sabores banana, carne, queijo, frango com passas , milho e queijo",
            "tempo" => " Tempo médio de preparo 15 minutos",
            "sugestao" => " Prato harmoniza com caldo de cana com limão ou abacaxi",
        ],
        "pernil-serro" => [
            "titulo" => "PRATO PERNIL AO MOLHO DE GOIABA DO SERRO ",
            "ingredientes" => "Pernil marinado por 24 horas em especiarias da casa, risoto de queijo do serro , com molho de goiaba ",
            "tempo" => " Tempo médio de preparo 45 minutos",
            "sugestao" => "Prato harmoniza com vinho branco seco ",
        ],

        "sobremesa-inconfidentes" => [
            "titulo" => "SOBREMESA INCONFIDENTES ",
            "ingredientes" => "Sorvete de queijo artesanal, com geleia de goiaba e hortelã ",
            "tempo" => "Tempo médio de preparo 20 minutos ",
            "sugestao" => "prato harmoniza com soda limonada italiana",
        ],
        "torta-ouropreto" => [
            "titulo" => "TORTA OURO PRETO",
            "ingredientes" => "Torta de chocolate amargo, com frutas vermelhas ",
            "tempo" => "Tempo médio de preparo 20 minutos",
            "sugestao" => "prato harmoniza soda italiana de maçã",
        ],
    ];

    echo '<pre>';
    //print_r($pratos);
    foreach ($pratos as $idPrato => $descricao) {
        print_r($idPrato);
        echo '<br>';
        print_r($descricao["titulo"]);
        echo '<br>';
    }
    echo '</pre>';

    ?>
    <?php

    foreach ($pratos as $idPrato => $descricao) {
        echo '<section id="' . $idPrato . '">';
        echo '<h2> <b>' . $descricao["titulo"] . '</b> </h2>';
        echo '<p><i>' . $descricao["ingredientes"] . '</i> </p>';
        echo '<p>' . $descricao["tempo"] . '</p>';
        echo '<p>' . $descricao["sugestao"] . '</p>';
        echo '</section>';
    }

    ?>

</body>

</html>