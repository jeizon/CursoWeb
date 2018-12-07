<?php
    $fumante = true;
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php
        echo "É Fumante? " . $fumante . "<br>";

        echo "É Boleana? " . is_bool($fumante) . "<br>";
    ?>
    </body>
</html>