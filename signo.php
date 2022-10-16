<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="cssPHP.css" />
    <link rel = "icon" href = 
    "https://cdn-icons-png.flaticon.com/512/1534/1534067.png"
        type = "image/x-icon">
    <title>Signos</title>
</head>
<body>     
</div>
    <?php
        $nameP = $_POST['namePerson'];
        $dateB = $_POST['birthday'];

        $date = new DateTime($dateB);

        $dateSign = $date->format('m-d');

        // Abrindo o XML e armazenando como Objeto
        $xml = simplexml_load_file('signo.xml');
    ?>
        <?php
        echo '<h1>' . $nameP .' seu signo é ';
        echo '<br/>'.'<br/>';
        ?>
    <div class= "resultado">
    <?php
        //Iterando sobre o XML exibindo as informações
        foreach ($xml->signo as $registro) :
            if ($dateSign >= $registro->dataInicio and $dateSign <= $registro->dataFim) {
                echo $registro->signoNome . '</h1>';
                echo '<br/>'.'<br/>';
                echo '<p>' . $registro->descricao . '<p>';
            }
        endforeach;
    ?>
    </div>

    
</body>
</html>