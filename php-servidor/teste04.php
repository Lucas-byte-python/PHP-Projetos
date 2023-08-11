<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>teste 04 (PHP)</title>
</head>
<body>
<?php
    $v = $_GET["V"];
    $z = $_GET["Z"];
    echo "<h2>Valores recebidos: $v e $z.";
    echo "<br>O valor absoluto: $v  é: ".abs($v);
    echo "<br>O valor de $v<sup>$z</sup> é: " .pow($v, $z);
    echo "<br>A raiz quadrada de $v é: " .sqrt($v);
    echo "<br>O valor de $v arredondado é: " .round($v); //ceil floor
    echo "<br>O valor de $v arredondado é: " .ceil($v); //Sempre arredonda para cima
    echo "<br>O valor de $v arredondado é: " .floor($v); //Sempre arredonda para baixo
    echo "<br>A parte inteira de $v é: " .intval($v);  //Sempre pega o inteiro
    echo "<br>O valor de $v em moeda é R$: " .number_format($v,2,",",".");
?>
</body>
</html>