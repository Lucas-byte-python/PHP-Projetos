<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetor 2</title>
</head>
<body>
    <pre>
    <?php
        $v = array("A","C","A","C","A","C","A","C");
        print_r($v);
        $v[] = "O";
        print_r($v);
        array_push($v, "G");
        array_push($v, "H");
        array_pop($v);
        var_dump($v);
        array_unshift($v, "A");
        array_unshift($v, "2");
        array_shift($v);
        print_r($v);
        sort($v);
        var_dump($v);
        rsort($v);
        var_dump($v);
        asort($v);
        print_r($v);
        arsort($v);
        print_r($v);
        ksort($v);
        var_dump($v);
        krsort($v);
        var_dump($v);
        //The end Iniciante
    ?>
    </pre>
</body>
</html>