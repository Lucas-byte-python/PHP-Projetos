<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funçõe em String Continuação</title>
</head>
<body>
    <?php
     //strtolower: tira as letras minúscula.
     $name = "Lucas Santil";
     $name2 = strtolower($name);
     echo "You name is: $name2";

     //strtoupper: deixa todas as letras maiúsculas.
     $name3 = strtoupper($name);
     echo "<p>Your love name is: $name3</p>";

     //ucfirst: A primeira letra ficará maiúscula.
     $newName = "lucas santil";
     $name4 = ucfirst($newName);
     echo "Your name is: $name4";

     //ucwords: Todas as primeiras letras ficarão em maiúscula.
     $name5 = ucwords($newName);
     echo "<p>Your name is: $name5</p>";

     //strrev: Deixa seu nome todo reverso.
     echo "You name is: ". strrev($name);

     //strpos: Encontra a posição da palavra.
     $frase = "I am learning English";
     $pos = strpos($frase, "English");
     echo "<p>$frase. <br/> String it found in position: $pos</p>";

     //stripos: Ignora o tamanho da letra e encontra a polavra.
     $pos2 = stripos($frase, "english");
     print("<p>$frase. <br/> String it found in position: $pos2</p>");

     //substr_count: Encontra quantas palavras iguais tem.
     $newPhrase = "I am learning PHP in the PHP video course";
     $const = substr_count($newPhrase, "PHP");
     echo "<p>PHP he appeared: $const</p>";

     //substr: Pega seus parâmetros e mostra.
     $web = "Video Course";
     $sub = substr($web, 0, 5);
     echo "<p>$sub</p>";

     //str_pad: Dá espaço na palavra que você quer.
     $newName2 = str_pad($name, 30, " ", STR_PAD_RIGHT);
     echo "My prof $newName2 is beautiful!";

     //str_repeat: Repete o que você colocar.
     $txt = str_repeat("Lucas", 4);
     print("<p>O texto gerado foi: $txt</p>");

     //str_replace: Muda as palavras que você quer.
     $txt2 = "I like learning math";
     $txt2repl = str_replace("math", "PHP", $txt2);
     echo "Your like learning what? $txt2repl";
     ?>
</body>
</html>