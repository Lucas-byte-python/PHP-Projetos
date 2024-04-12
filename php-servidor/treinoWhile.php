<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste PHP 06</title>
</head>
<body>
    <?php
    $c = 1;
    echo "Progressivo: ";
    while ($c <= 10) {
        echo $c ;
        $c++;
    }
    ?>
    <br>
    <br>
    <?php
    $c = 10;
    echo "Regressivo: ";
    while ($c >= 1) {
        echo $c;
        $c--;
    }
    ?>
    <form method="get" action="02-parte2.php">
    <?php
        $c = 1;
        while ($c <= 5) {
        echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0' />
        <br/>";
        $c++;
    }
    ?>
    <input type="submit" value="Enviar"/>
    </form>
</body>
</html>