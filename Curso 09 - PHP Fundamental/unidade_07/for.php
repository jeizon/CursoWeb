<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php
        for ($i = 1; $i < 7; $i++ ){
            echo rand(1,6) . " ";
        }
        echo " " . "<br>";
    for ($j = 1; ; $j++ ){
        if ($j == 7){
            break;
        }
        echo rand(1,6) . " ";
    }
    ?>

    </body>
</html>