<?php

?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php
        $data1 = new DateTime('1993-07-06');
        $data2 = new DateTime('2018-12-07');
        $intervalo = $data1->diff($data2);
    ?>
    <pre>
        <?php
            print_r($intervalo);
        ?>
    </pre>

    <pre>
        <?php
            print_r($intervalo->format("%Y anos %M meses e %D dia"));
        ?>
    </pre>
    </body>
</html>