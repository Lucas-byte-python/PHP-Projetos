<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada em PHP</title>
</head>
<body>
    <?php
        $n = isset($_GET["num"])?$_GET["num"]:1;
        for ($i = 1; $i <= 10; $i++ ){
            $r = $n * $i;
            echo "$n x $i = $r </br>";
        }
    ?>
    <br/>
    <a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>