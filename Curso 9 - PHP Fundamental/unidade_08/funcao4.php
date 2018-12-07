
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php
        function retornarDiaria($salario,$dias,$cotacao) {
            $real = number_format($salario/$dias,2);
            $dolar = number_format(($salario/$dias)/$cotacao,2);

            return array($real,$dolar);
        }

        $diaria_array = retornarDiaria(1500,22,3.40);
        echo "ARRAY - Diaria em R$ é: ". $diaria_array[0] . "<br>";
        echo "ARRAY - Diaria em US$ é: ". $diaria_array[1] . "<br>";

        list($result_real,$result_dolar) = retornarDiaria(1500,22,3.40);
        echo "LIST - Diaria em R$ é: ". $result_real . "<br>";
        echo "LIST - Diaria em US$ é: ". $result_dolar . "<br>";

    ?>
    </body>
</html>