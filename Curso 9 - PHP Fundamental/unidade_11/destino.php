<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <pre>
        <?php
            print_r($_POST);
        ?>
        <?php
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            echo "Meu nome: " . $nome . "<br>";
            echo "Meu email: " . $email . "<br>";
        ?>
    </pre>
    </body>
</html>