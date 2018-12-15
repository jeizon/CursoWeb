o<?php require_once("../../db/conexao.php"); ?>
<?php
	
	// Consulta a tabela de transportadoras
	$tr = "SELECT * ";
	$tr .= "FROM transportadoras ";
	if(isset($_GET["codigo"]) ) {
		$id = $_GET["codigo"];
		$tr .= "WHERE transportadoraID = {$id} ";
	} else {
		$tr .= "WHERE transportadoraID = 1 ";
	}
	
	$con_tr = mysqli_query($conecta,$tr);
	if (!$con_tr) {
		die("Erro na consulta");
	}
	
	$info_tr = mysqli_fetch_assoc($con_tr);
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP INTEGRACAO</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/alteracao.css" rel="stylesheet">
    </head>

    <body>
        <?php include_once("_incluir/topo.php"); ?>
        
        <main>
			<div id="janela_formulario">
				<form  action="alteracao.php" method="post">
					<h2>Alteração de Transportadoras</h2>
					
					<label for="nometransportadora">Nome da Transportador</label>
					<input type="text" value="<?php echo utf8_encode($info_tr["nometransportadora"]); ?>" name="nometransportadora" id="nometransportadora">
					
					<label for="endereco">Endereço </label>
					<input type="text" value="<?php echo $info_tr["endereco"]; ?>" name="endereco" id="endereco"">
					
					<label for="telefone">Telefone</label>
					<input type="text" value="<?php echo $info_tr["telefone"]; ?>" name="telefone" id="telefone">
					
					<label for="cidade">Cidade</label>
					<input type="text" value="<?php echo $info_tr["cidade"]; ?>" name="cidade" id="cidade">
					
					<label for="estados">Estados</label>
					<select id="estados" name="estados">
					</select>
					<label for="cep">CEP</label>
					<input type="text" value="<?php echo $info_tr["cep"]; ?>" name="cep" id="cep">
					
					<label for="cnpj">CPNJ</label>
					<input type="text" value="<?php echo $info_tr["cnpj"]; ?>" name="cnpj" id="cnpj">
					
					<input type="submit" value="Confirmar alteração">
					
				</form>
			</div>
        </main>

        <?php include_once("_incluir/rodape.php"); ?>  
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>