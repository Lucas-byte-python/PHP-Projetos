<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotina-02 PHP Valor</title>
</head>
<body>
    <?php
        // Aprendendo a incluir outras funções de outros arquivos
        include "funcoes.php"; //"Requid" é para caso obrigatório e o includ é mais simplis
        echo"<h1>Testando novas funções!</h1>";
        ola();
        mostrarValor(4);

        // Passagem por valor
        function teste($x) {
        $x += 2;
        echo "<p>Valor somado: $x</p>"; 
        }
        $a = 3;
        teste($a);
        echo "Valor real: $a";
    ?>
</body>
</html>