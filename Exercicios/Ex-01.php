<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio-01</title>
</head>
<body>
    <?php



echo "Olá Mundo!<br><br>";


$nome = 'Cassio';
$sobrenome1 = 'Maciel';
$sobrenome2 = 'Gomes';

echo "Olá $nome $sobrenome1 $sobrenome2, tenha uma excelente semana!<br><br>";


$nome = 'Cassio';
$sobrenome = 'Maciel Gomes';
$idade = 32;
$cidade = 'Juquia';

echo 'Olá '.$nome.'<br/>';
echo "Seu nome completo é $nome $sobrenome<br/>";
echo "Você tem $idade anos e mora em $cidade/SP<br><br>";


$idade = 25;
$peso = 60;

if ($idade >= 16 && $idade <= 69 && $peso >= 50) {
    echo "Atende aos requisitos<br><br>";
} else {
    echo "Não atende aos requisitos<br><br>";
}


$nota1 = 6;
$nota2 = 5;
$nota3 = 7;
$nota4 = 8;

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

if ($media <= 5) {
    echo "REPROVADO!<br><br>";
} elseif ($media > 5 && $media < 6) {
    echo "RECUPERAÇÃO!<br><br>";
} else {
    echo "APROVADO!<br><br>";
}


$a = 5;
$b = 4;

if ($a < $b) {
    echo "$a $b";
} else {
    echo "$b $a";
}

?>

    
</body>
</html>