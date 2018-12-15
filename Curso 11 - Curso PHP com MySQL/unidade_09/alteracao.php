<?php require_once("../../db/conexao.php"); ?>
<?php
	if ( isset($_POST["nometransportadora"]) ) {
		$nome			= utf8_decode($_POST["nometransportadora"]);
		$endereco		= utf8_decode($_POST["endereco"]);
		$telefone		= $_POST["telefone"];
		$cidade			= utf8_decode($_POST["cidade"]);
		$estados		= $_POST["estados"];
		$cep			= $_POST["cep"];
		$cnpj			= $_POST["cnpj"];
		$tID			= $_POST["transportadoraID"];
		
		print_r($nome);
	}
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
	
	// Consulta aos estados
	$estados = "SELECT * ";
	$estados .= "FROM estados ";
	$lista_estados = mysqli_query($conecta,$estados);
	if (!$lista_estados) {
		die("Erro no banco");
	}
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
					<input type="text" value="<?php echo utf8_encode($info_tr["endereco"]); ?>" name="endereco" id="endereco"">
					
					<label for="telefone">Telefone</label>
					<input type="text" value="<?php echo $info_tr["telefone"]; ?>" name="telefone" id="telefone">
					
					<label for="cidade">Cidade</label>
					<input type="text" value="<?php echo utf8_encode($info_tr["cidade"]); ?>" name="cidade" id="cidade">
					
					<label for="estados">Estados</label>
					<select id="estados" name="estados">
						<?php
							$meuestado = $info_tr["estadoID"];
							while ($linha = mysqli_fetch_assoc($lista_estados)){
								$estado_principal = $linha["estadoID"];
								if ($meuestado == $estado_principal ) {
						?>
									<option value="<?php echo $linha["estadoID"] ?>" selected>
										<?php echo utf8_encode($linha["nome"]) ?>
									</option>
						<?php
								} else {
						?>
									<option value="<?php echo $linha["estadoID"] ?>">
										<?php echo utf8_encode($linha["nome"]) ?>
									</option>
						<?php
								}
							}
						?>
					</select>
					<label for="cep">CEP</label>
					<input type="text" value="<?php echo $info_tr["cep"]; ?>" name="cep" id="cep">
					
					<label for="cnpj">CPNJ</label>
					<input type="text" value="<?php echo $info_tr["cnpj"]; ?>" name="cnpj" id="cnpj">
					
					<input type="hidden" name="transportadoraID" value="<?php echo $info_tr["transportadoraID"] ?>">
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