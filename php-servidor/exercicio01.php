<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>Primeiro exercicio (PHP)</title>
</head>
<body>
<?php 
    $preco = $_GET["p"];
    echo "O preço recebido do produto é R$ $preco" . number_format($preco, 2);
    $preco += $preco*10/100;
    echo "<br/>O novo preço com 10% de aumento será de R$ $preco" . number_format($preco, 2);
?>
</body>
</html>