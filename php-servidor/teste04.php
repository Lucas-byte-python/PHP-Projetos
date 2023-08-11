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
?>
</body>
</html>