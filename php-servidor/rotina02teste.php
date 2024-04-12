<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotina-02 PHP Referência</title>
</head>
<body>
    <?php
        // Passagem por referência
        function teste(&$x) {
            $x += 2;
            echo "<p>Valor somado: $x</p>"; 
        }

        $a = 3;
        teste($a);
        echo "Valor falso: $a";
    ?>
</body>
</html>