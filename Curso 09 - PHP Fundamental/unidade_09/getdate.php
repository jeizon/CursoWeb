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
        date_default_timezone_set('America/Sao_Paulo');
        $agora = getdate();
        print_r($agora);
    ?>
    </body>
</html>