<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotina em PHP</title>
</head>
<body>
    <?php 
        function soma ($a, $b) {
            $s = $a + $b;
            echo "<p>A soma dos valores 'a' e 'b' é: $s</p>";
        }

        soma (3, 4);
        soma (2, 3);

        function som ($d, $e) {
            $s = $d + $e;
            return $s;
        }
        
        $v = 5;
        $x = 5;
        $res = som ($v, $x);
        echo "<p>A soma entre $v e $x é igual a $res</p>";

        function some () {
            $p = func_get_args();
            $yo = func_num_args();
            $t = 0;
            for ($i = 0; $i < $yo; $i++) {
                $t = $t + $p[$i];
            }
            return $t;
        }

        $resut = some (3, 5, 1, 3, 4);
        echo "A soma dos valores é $resut";
    ?>
</body>
</html>