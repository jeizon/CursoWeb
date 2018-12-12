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