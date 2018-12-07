<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php
        $megasena = array();
        $cont = 1;

        while ($cont <=6 ) {
            $sorteio = rand(1,60);
            if (!in_array($sorteio,$megasena) ) {
                $megasena[] = $sorteio;
                $cont++;
            }
        }
        sort($megasena);

    ?>
    <pre>
        <?php
            print_r($megasena);
        ?>
    </pre>
    </body>
</html>