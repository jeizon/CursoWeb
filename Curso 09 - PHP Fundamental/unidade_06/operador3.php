<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php
        $dia = "sábado";
        $a = "sábado";
        $b = "domingo";
        if ($a == "sábado" && $b == "domingo") {
            echo "Dia de descansar" . "<br>";
        } else {
            echo "Dia de trabalhar" . "<br>";
        }
        if ($dia == "sábado" || $dia == "domingo") {
            echo "Dia de descansar" . "<br>";
        } else {
            echo "Dia de trabalhar" . "<br>";
        }
    ?>
    </body>
</html>