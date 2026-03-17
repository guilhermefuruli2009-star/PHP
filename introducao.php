<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo 'Tag Padrão';
    ?>
    <br>
    <?=
        'Tag de Impressão';
    ?>


<!--Instruções de saida-->

    <?php
        echo 'Exibir dados <br>';
        print 'Comando Print'; // É possivel capturar esse valor
    ?>

<!--Variaveis-->

    <?php
        //OBRIGATORIAMENTE INICIA-SE COM $
        //Não pode conter espaços ou caraceres especoais
        //Não pode ser seguido números

        //Tipos: string, int, float, boolean, array;
        $nome = 'Cassio Maciel Gomes';
        $idade = '36';
        $peso = '67.3';

    ?>

    <h1>Ficha Cadastral</h1>
    <p>Nome: <?= $nome ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>Peso: <?= $peso ?></p>

<!--Concatenização-->
<?php
    echo ' ola '. $nome . ' Você possui ' . $idade . ' anos. '
?>

<!--Interpolação-->
<?php
    echo ' Ola $nome você possui $idade anos. '
    
?>


    
</body>
</html>