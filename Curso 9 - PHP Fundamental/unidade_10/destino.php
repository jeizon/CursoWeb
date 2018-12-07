<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php
        $salada = array("Laranja","Maça","Abacate");
        $fruta = $_GET["codigo"];
        echo $salada[$fruta];
    ?>
    </body>
</html>