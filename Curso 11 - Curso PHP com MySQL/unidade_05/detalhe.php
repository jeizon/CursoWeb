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
		$produtoID 		= $dados_detalhe["produtoID"];
		$nomeproduto 	= $dados_detalhe["nomeproduto"];
		$descricao 		= $dados_detalhe["descricao"];
		$codigobarra 	= $dados_detalhe["codigobarra"];
		$tempoentrega 	= $dados_detalhe["tempoentrega"];
		$precorevenda 	= $dados_detalhe["precorevenda"];
		$precounitario 	= $dados_detalhe["precounitario"];
		$estoque 		= $dados_detalhe["estoque"];
		$imagemgrande 	= $dados_detalhe["imagemgrande"];
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
			<div id="detalhe_produto">
				<ul>
					<li><img src="<?php echo $imagemgrande ?>"></li>
					<li><?php echo $nomeproduto ?></li>
					<li>Descricao: <?php echo $descricao ?></li>
					<li>Codigo Barras: <?php echo $codigobarra ?></li>
					<li>Entrega: <?php echo $tempoentrega ?></li>
					<li><?php echo $precorevenda ?></li>
					<li><?php echo $precounitario ?></li>
					<li><?php echo $estoque ?></li>
				</ul>
			</div>
        </main>

        <?php include_once("_incluir/rodape.php"); ?>
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>