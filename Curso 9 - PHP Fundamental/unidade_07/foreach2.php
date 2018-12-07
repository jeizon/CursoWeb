<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php
        $agenda = array(
                "nome" => "José",
                "sobrenome" => "Silva",
                "salario" => 1000,
                "aniversario" => "06/07/1993"
                );

        foreach ($agenda as $atributo => $valor) {
            echo $atributo . ": " . $valor . "<br>";
        }
    ?>
    </body>
</html>