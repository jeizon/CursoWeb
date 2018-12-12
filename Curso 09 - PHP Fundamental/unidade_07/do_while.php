<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php
        $cont = 1;
        do {
            $sorteio = rand(1,10);
            echo $sorteio . " ";
            $cont++;
        } while ($cont <= 5 )

    ?>

    </body>
</html>