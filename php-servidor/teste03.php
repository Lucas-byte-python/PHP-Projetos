<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>teste 03 (PHP)</title>
</head>
<body>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $soma = $n1 + $n2;
        $sub = $n1 - $n2;
        $mult = $n1 * $n2;
        $div = $n1 / $n2;
        $mod = $n1 % $n2;
        $med = ($n1 + $n2) / 2;
        echo "A soma dos valores é $soma !";
        echo "<br>A subtração dos valores é $sub !";
        echo "<br>A multiplicação dos valores é $mult !";
        echo "<br>A divisão dos valores é $div !";
        echo "<br>O resto da divisão dos valores é $mod !";
        echo "<br>A média de 2 e 6 é $med!";

    ?>    
</body>
</html>