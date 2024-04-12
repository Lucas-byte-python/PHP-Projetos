<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores</title>
</head>
<body>
    <pre>
        <table border="5">
            <tr>
    <?php 
        $n = array(3,5,8,2);
        $n[] = 7;
        print_r($n);

        //Range
        $c = range(2,20,2);
        print_r($c);

        //Foreach
        foreach($c as $v) {
            echo "<td>$v  ";
        }
    ?>
            </tr>
        </table>
    </pre>

    <pre>
    <?php
        //Chaves Personalizadas
        $valor = array(1=>"A",6=>"C",14=>"B",4=>"D");
        $valor[] = 40; 
        unset($valor[4]);
        print_r($valor);

        //Chave Associativas
        $cad = array("nome" => "Lucas Santil",
                    "idade" => 15,
                    "peso" => 57.6);
        $cad["lindo"] = "Sim";
        foreach($cad as $k => $a) {
            echo "O campo $k posssui o conteúdo $a</br>";
        }
        //matriz
        $matriz = array(array(1,2),
                        array(3,4),
                        array(5,6));
        $matriz[0][1] = $matriz[2][0];
        $matriz[1][0] = $matriz[1][1];
        print_r($matriz);
    ?>
    </pre>
</body>
</html>

