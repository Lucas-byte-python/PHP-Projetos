<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treino For (PHP)</title>
</head>
<body>
    <?php
        for ($i = 1; $i <=  10; $i++) { 
            echo "$i ";
        }
        echo "</br>";
        for ($i = 10; $i >= 1; $i--) { 
            echo "$i ";
        }
        echo "</br>";
        for ($i = 0; $i  <= 50; $i +=5) { 
            echo "$i ";
        }
        echo "</br>";
        for ($i = 20; $i >= 1 ; $i-=2) { 
            echo "$i ";
        }
    ?>
    <!-- Tabuada em PHP -->
    <div>
        <form method="get" action="tabuada.php">
            <select name="num">
            <?php
                for ($i = 0; $i  <= 10; $i ++) { 
                    echo "<option>$i</option>"; 
                }
            ?>
            </select>
            <input type="submit" value="Tabuada"/>
        </form>
    </div>
</body>
</html>