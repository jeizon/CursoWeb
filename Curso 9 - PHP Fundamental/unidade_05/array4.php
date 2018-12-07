
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php
        $salada = array("Maça","Abacate","Laranja");

        echo "Existe o elemento Pera? " . in_array("Pera",$salada) . "<br>";

        // Retorna 1 para verdadeiro e 0 para falso
        echo "Existe o elemento Abacate? " . in_array("Abacate",$salada) . "<br>";

        // Retorna a posição do elemento
        echo "Existe o elemento Abacate? " . array_search("Laranja",$salada) . "<br>";

    ?>
    </body>
</html>