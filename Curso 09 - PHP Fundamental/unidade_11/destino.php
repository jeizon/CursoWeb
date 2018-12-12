<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>

        <?php
            $nome = isset($_POST["nome"]) ? $_POST["nome"] : "Sem Definição";
            $email = isset($_POST["email"]) ? $_POST["email"] : "Sem Definição";
            
            echo "Meu nome: " . $nome . "<br>";
            echo "Meu email: " . $email . "<br>";
        ?>

    </body>
</html>