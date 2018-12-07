<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>

        <?php
            if (isset($_POST["nome"])) {
                $nome = $_POST["nome"] . "<br>";
            } else {
                $nome = "Sem Definição" . "<br>";
            }
            if (isset($_POST["email"])) {
                $email = $_POST["email"] . "<br>";
            } else {
                $email = "Sem Definição" . "<br>";
            }

            echo "Meu nome: " . $nome . "<br>";
            echo "Meu email: " . $email . "<br>";
        ?>

    </body>
</html>