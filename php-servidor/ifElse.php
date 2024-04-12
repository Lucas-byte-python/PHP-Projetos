<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>exercicio (PHP)</title>
</head>
<body>
    <?php 
        $a = isset($_GET["ano"])?$_GET["ano"]:1900;
        $i = date("Y") - $a;
        echo "Você nasceu em $a e terá $i anos. <br/>";
        if ($i < 16) {
            $tipoVoto = "não vota";
        }
        else {
            if (($i >= 16 && $i < 18) || ($i > 65)) {
                $tipoVoto = "voto opcional";
            }
            else {
                $tipoVoto = "voto obrigatório";
            }
        }
        echo "Para essa idade, $tipoVoto";
    ?>

</body>
</html>
