<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php
        $dia = "sexta";
        switch($dia) {
            case "segunda":
                echo "Hoje ainda é segunda :( " . "<br>";
                break;
            case "quarta":
                echo "Hoje não é sexta, mas esta chegando... " . "<br>";
                break;
            case "sexta":
                echo "Oba \o/ chegou o grande dia " . "<br>";
                break;
            default:
                echo "trabalha ai que esta chegando" . "<br>";
                break;
        }
    ?>
    </body>
</html>