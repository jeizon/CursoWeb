<?php
	// Passo 1 - abrir conexao
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "andes";
	
	$conecta = mysqli_connect($servidor,$usuario,$senha,$banco);
	
	// Passo 2 - Testar conexao
	if ( mysqli_connect_errno() ) {
		die("Conexao falhou: " . mysqli_connect_errno());
	}
?>
<?php
	// Passo 3 - Abrir consulta ao banco de dados
	$consulta_categorias = "SELECT * FROM categorias WHERE categoriaID > 2";
	$categorias = mysqli_query($conecta, $consulta_categorias);
	
	if ( !$categorias ) {
		die("Falha na consulta ao banco." );
	}
?>
	<!doctype html>
	<html>
	<head>
		<meta charset="UTF-8">
		<title>Curso PHP FUNDAMENTAL</title>
	</head>
	
	<body>
	</body>
	</html>

<?php
	mysqli_close($conecta);
?>