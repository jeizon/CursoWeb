<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php
        $cont = 0;
        while ($cont <= 5) {
            $sorteio = rand(1, 60);
            echo $sorteio . " ";
            $cont++;
        }

    ?>

    </body>
</html>