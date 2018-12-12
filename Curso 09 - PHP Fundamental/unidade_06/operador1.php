<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php
        $salario = 800;
        $premio = "800";

        if ($salario == $premio) {
            echo "Salario é igual a premio" . "<br>";
        } else {
            echo "Salario não é igual a premio" . "<br>";
        }

        if ($salario === $premio) {
            echo "Salario é idêntico a premio" . "<br>";
        } else {
            echo "Salario não é idêntico a premio" . "<br>";
        }
    ?>
    </body>
</html>