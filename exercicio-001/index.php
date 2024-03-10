<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $nome = "Wennas";
    // echo "$nome";
    if ($nome == "Tania") {
        echo "Vc acertou o nome";
    } else {
        echo "Você errou o nome";
    }

    $num1 = 5;
    $num2 = 8;
    $num3 = 2;
    $num4 = 10;

    $soma = $num1 + $num3;
    print "<br>A soma é $soma";

    $subtracao = $num4 - $num2;
    print "<br>A subtracão é $subtracao";

    $multiplicacao = $num1 * $num3;
    print "<br>A multiplicação é $multiplicacao";

    $divisao = $num4 / $num3;
    print "<br>A divisão é $divisao";

    //Exercício 01############################################################
    echo "===============<br>";
    $a = 1000;
    $b = $a / 2;

    echo "$b";

    echo "<br>";

    $a = 100;
    $b = $a * 3;
    echo $b;

    echo "<br>";
    $a = 20;
    echo ++$a;
    echo "<br>";


    ?>
</body>

</html>