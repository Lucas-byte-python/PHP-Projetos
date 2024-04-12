<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores e  Matrizes</title>
</head>
<body>
    <pre>
        <tr> 
    <?php
        $v = array(1,2,2,3);
            print_r($v);
        $f = array("A" => 2,
                   "B" => 3,
                   "C" => 4,
                   "D" => 5);
        foreach($f as $foreach) {
            print_r("<p>$foreach</p>");
        }
        $letras = array("A" => 2,"B" => 3,"C" => 5,"D" => 4,"E" => 8,"F" => 96,"G" => 1,"H" => 4,"I" => 5,"J" => 3,"K" => 2);
        print_r($letras);
        var_dump($letras);

        echo "O vetor tem: " . count($letras) . " elemenentos.";
    ?>
        </tr>
    </pre>
</body>
</html>