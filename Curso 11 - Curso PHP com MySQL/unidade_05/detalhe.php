<?php require_once("../../db/conexao.php"); ?>
<?php
	if ( isset($_GET["codigo"]) ) {
		$produto_id = $_GET["codigo"];
	} else {
		Header("Location: inicial.php");
	}
	
	// Consulta ao banco de dados
	$consulta = "SELECT * ";
	$consulta .= "FROM produtos ";
	$consulta .= "WHERE produtoID = {$produto_id} ";
	$detalhe = mysqli_query($conecta, $consulta);
	
	// Testar erro
	if ( !$detalhe ) {
		die("Falha no Banco de Dados. ");
	} else {
		$dados_detalhe = mysqli_fetch_assoc($detalhe);
	}
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
        <?php include_once("_incluir/topo.php"); ?>
        
        <main>  
			<?php
				print_r($dados_detalhe);
			?>
        </main>

        <?php include_once("_incluir/rodape.php"); ?>
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>