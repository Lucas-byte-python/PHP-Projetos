<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções de String</title>
</head>
<body>
    <?php
    //print_f
    $prod = "leite";
    $preco = 4.5;
    printf("O %s está custando R$ %.2f",$prod, $preco);

    // Mostrar valores decimais
    $dec = 10;
    $dec2 = -10;
    printf("<p>Olhe %d!</p>",$dec);
    printf("Olhe %d!",$dec2);

    // Mostrar valores sem sinal
    $sin = -10;
    $sin2 = +10;
    printf("<p>Olhe %u!</p>",$sin);
    printf("<p>Olhe %u!</p>",$sin2);

    // Vetores
    $x[0] = 4;
    $x[1] = 3;
    $x[3] = 8;
    print_r($x);
    $v2 = array(3,7,5,64,4);
    print_r($v2);

    // Wordwrap
    $txt = "Esté texto não é muito grande...";
    $res = wordwrap($txt, 2, "<br/>\n", true); //True quebra por palavra
    echo($res);

    // Strlen
    $text = "Curso em Video";
    $tamanho = strlen($text);
    echo "<p>$tamanho</p>";

    // Trim
    $nome = "xxxJoséxdaxSilvaxxx";
    echo(strlen($nome));
    $novo = trim($nome);
    echo($novo);
    echo(strlen($novo));
    //ltrim apaga somente os espaços da frente
    //rtrim apaga somente os de traz

    // String_Word_Count
    $frase = "Eu estou estudando PHP agora!";
    $cont = str_word_count($frase, 0);
    echo "<p>$cont</p>";
    //Caso coloque 1 no lugar do zero ele irá mostrar um vetor com a indicação de cada palavra

    //Explode
    $site =  "Curso para PHP";
    $vetor = explode(" ", $site);
    print_r($vetor);

    //String_Split
    $nome2 = "Lucas";
    $vetor2 = str_split($nome2);
    print_r($vetor2);

    //Implode
    $vetor3[0] = "Curso";
    $vetor3[1] = "de";
    $vetor3[2] = "PHP";
    $text3 = implode("#", $vetor3);
    print($text3);

    //chr
    $letra = chr(67);
    echo "A letra de código 67 é: $letra";

    //ord
    $letra2 = "C";
    $cod = ord($letra2);
    echo "Quem é esse pokemon? $cod";
    ?>
</body>
</html>