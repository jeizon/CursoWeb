<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php
        $fumante = true;
        if ($fumante) {
            echo "Você é fumante" . "<br>";
        } else {
            echo "Voce não é fumante" . "<br>";
        }
        $fumante = false;
        if (!$fumante) {
            echo "Você não é fumante" . "<br>";
        } else {
            echo "Voce  é fumante" . "<br>";
        }
        ?>
    </body>
</html>