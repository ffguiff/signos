<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signos</title>
</head>
<body>
    <?php
    $nameP = $_POST['namePerson'];
    $dateB = $_POST['birthday'];

    $date = new DateTime($dateB);

    $dateSign = $date->format('m-d');

    // Abrindo o XML e armazenando como Objeto
    $xml = simplexml_load_file('signo.xml');

    echo '<h4>' . $xml->titulo . '</h4>';
    echo '<p> Horoscopo ' . $hoje = date('d/m/Y') . '.</p>';
    echo '<h1>' . $nameP .' seu signo é ';

    //Iterando sobre o XML exibindo as informações
    foreach ($xml->signo as $registro) :
        if ($dateSign >= $registro->dataInicio and $dateSign <= $registro->dataFim) {
            echo $registro->signoNome . '</h1>';
            echo '<p>' . $registro->descricao . '<p>';
        }
    endforeach;

    ?>
    
</body>
</html>