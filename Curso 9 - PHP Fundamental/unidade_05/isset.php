<?php
$nome = null;
$endereco = "Brasil";
$telefone = "";
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Curso PHP FUNDAMENTAL</title>
</head>

<body>
<?php
    echo "Se a variavel está configurada? " . isset($nome) . "<br>";
    echo "Se a variavel está configurada? " . isset($endereco) . "<br>";
    echo "Se a variavel está configurada? " . isset($cep) . "<br>";
?>
</body>
</html>